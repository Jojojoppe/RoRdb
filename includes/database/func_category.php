	// Categories
	// ----------

	function put_category($name, $parent){
		try{

			// See if empty slots can be used
			$query = "select * where B=''";
			$ret = $this->db_query($query, "Categories");

			// Get ID of next category
			if(sizeof($ret)>0){
				$next_id = $ret[0][0];
			}else{
				$next_id = $this->api->sheets_get_range($this->sheet, "Info", "B1")[0][0];
			}

			$row = $next_id+2;
			// Get start cell of new row
			$range = "A".$row;

			// Put into sheet
			$this->api->sheets_put_range($this->sheet, "Categories", $range, [
				[$next_id, $name, $parent,
					"=IFERROR(VLOOKUP(C$row, {B2:B, A2:A}, 2, FALSE), \"\")",											// Parent name
					"=IFERROR(CONCATENATE(A$row, \",\", VLOOKUP(D$row, A2:E, 5, TRUE)), A$row)",							// Parent ID list
					"=IFERROR(CONCATENATE(B$row, \",\", VLOOKUP(D$row, A2:F, 6, TRUE)), B$row)",							// Parent name list
					"=IFERROR(CONCATENATE(TEXTJOIN(\",\", TRUE, TRANSPOSE(FILTER(B2:B, C2:C=B$row))), \",\"), \"\")",	// Child name list
					"=IFERROR(CONCATENATE(TEXTJOIN(\",\", TRUE, TRANSPOSE(FILTER(A2:A, C2:C=B$row))), \",\"), \"\")",	// Child ID list
					"=CONCATENATE(IFERROR(VLOOKUP(D$row, A$2:I, 9, TRUE), \"\"), \",\", B$row, \",\")",					// Search tags
					"=CONCATENATE(IFERROR(VLOOKUP(D$row, A$2:J, 10, TRUE), \"\"), \",\", A$row, \",\")",				// Search tags ID
				]
			], false);
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function get_category($id){
		try{
			$row = $id+2;
			$range = "A$row:J";
			$cat = $this->api->sheets_get_range($this->sheet, "Categories", $range)[0];
			return [
				'id' => $cat[0],
				'name' => $cat[1],
				'parent' => $cat[2],
				'parentid' => $cat[3],
				'parents' => $cat[4]
			];
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function get_categories(){
		try{
			// Get ID of next category to get amount of categories
			$next_id = $this->api->sheets_get_range($this->sheet, "Info", "B1")[0][0];
			// Get last row
			$row = $next_id+1;
			// Calculate range of table
			$range = "A2:J$row";
			$table = $this->api->sheets_get_range($this->sheet, "Categories", $range);

			$childlist = array();
			foreach($table as $row){
				// Skip deleted categories
				if(!array_key_exists(1, $row)) continue;
				$c = [
					'id'=>$row[0],
					'name'=>$row[1],
					'parent'=>$row[2],
					'parentId'=>$row[3],
					'childs'=>explode(',', $row[7]),
					'parents'=>explode(',', $row[4])
				];
				array_pop($c["childs"]);
				$childlist[$row[0]] =  $c;
			}

			$tree = [$this->generate_tree_categories_locations($childlist, 0), $this->generate_tree_categories_locations($childlist, 1)];

			return [$tree, $childlist];
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function update_category($id, $name, $parent){
		try{
			$res = $this->get_categories();
			$categories_flat = $res[1];
			
			// Check if new name
			$newname = false;
			if($categories_flat[$id]["name"]!=$name) $newname=true;
			// Check if new parent
			$newparent = false;
			if($categories_flat[$id]["parent"]!=$parent) $newparent=true;
		
			// If new name update all the children with id as parent
			if($newname){
				$query = "select * where C='".$categories_flat[$id]["name"]."'";
				$ret = $this->db_query($query, "Categories");
				foreach($ret as $c){
					// Get starting range of category
					$range = "C".($c[0]+2);
					$this->api->sheets_put_range($this->sheet, "Categories", $range, [
						[$name]
					], false);	
				}
			}
		
			// Update category
			$range = "B".($id+2);
			$this->api->sheets_put_range($this->sheet, "Categories", $range, [
				[$name, $parent]
			], false);	

			// Change name of category of items placed in this category
			$query = "select * where C='".$categories_flat[$id]['name']."'";
			$ret = $this->db_query($query, "Items");
			foreach($ret as $i){
				$range = "C".($i[0]+2);
				$this->api->sheets_put_range($this->sheet, "Items", $range, [
					[$name]
				], false);
			}

		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function delete_category($id){
		try{
			$res = $this->get_categories();
			$categories_flat = $res[1];

			// Update all the children with id as parent -> set to parent of deleted category
			$query = "select * where C='".$categories_flat[$id]["name"]."'";
			$ret = $this->db_query($query, "Categories");
			foreach($ret as $c){
				$this->update_category($c[0], $c[1], $categories_flat[$id]["parent"]);
			}
		
			// Update category
			$range = "B".($id+2);
			$this->api->sheets_put_range($this->sheet, "Categories", $range, [
				["", "", "", "", "", "", "", "", ""]
			], false);	

			// Update items in this category to None
			$query = "select * where C='".$categories_flat[$id]['name']."'";
			$ret = $this->db_query($query, "Items");
			foreach($ret as $i){
				$range = "C".($i[0]+2);
				$this->api->sheets_put_range($this->sheet, "Items", $range, [
					["None"]
				], false);
			}

		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}
