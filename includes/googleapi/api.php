<?php

namespace RoRdb;

class RordbGoogleApi{

	public $client;
	public $driveservice;
	public $sheetsservice;
	public $serviceaccount;

	function __construct(){
		$jsonkeystring = get_option('rordb_service_account_key');
		$jsonkey = json_decode($jsonkeystring, true);
		if(is_null($jsonkey)){
			throw new Exception(__FUNCTION__.": Could not decode JSON file: ".$jsonkeystring);
		}
		try{
			$this->serviceaccount = $jsonkey["client_email"];
			$this->client = new Google\Client();
			$this->client->setAuthConfig($jsonkey);
			$this->client->addScope(Google\Service\Sheets::SPREADSHEETS);
			$this->client->addScope(Google\Service\Drive::DRIVE);
			$this->client->addScope(Google\Service\Drive::DRIVE_FILE);

			$this->driveservice = new Google\Service\Drive($this->client);
			$this->sheetsservice = new Google\Service\Sheets($this->client);
		}catch(exception $e){
			throw new Exception(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function preprint($s){
		echo "<pre>";
		print_r($s);
		echo "</pre>";
	}

	// Drive API interface
	// -------------------
	function drive_ls($folder){
		try{
			$body = [
				'q'=>"'$folder' in parents",
				'fields'=>"nextPageToken, files(id, name, mimeType, parents)"
			];
			$results = $this->driveservice->files->listFiles($body);
			$files = array();
			foreach($results->files as $file){
				$f = [
					"name"=>$file->name,
					"id"=>$file->id, 
					"mimeType"=>$file->mimeType,
					"parents"=>$file->parents
				];
				$files[$file->name] = $f;
			}
			return $files;
		}catch(exception $e){
			throw new Exception(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function drive_delete_file($id){
		try{
			$this->driveservice->files->delete($id);
		}catch(exception $e){
			throw new Exception(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function drive_share($id, $mail, $role){
		try{
			$type = "user";
			if($mail=="") $type="anyone";
			$body = new Google\Service\Drive\Permission([
				"type"=>$type,
				"role"=>$role
			]);
			if($mail!="") $body->setEmailAddress($mail);
			$this->driveservice->permissions->create($id, $body, 
				array("sendNotificationEmail"=>false));
		}catch(exception $e){
			throw new Exception(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function drive_create_folder($folder, $title){
		try{
			$body = new Google\Service\Drive\DriveFile([
				'mimeType' => "application/vnd.google-apps.folder",
				'name' => $title,
				'parents' => [$folder]
			]);
			$res = $this->driveservice->files->create($body, 
				array('fields' => 'id', 'supportsAllDrives' => true));
			return $res->id;
		}catch(exception $e){
			throw new Exception(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function drive_create_spreadsheet($folder, $title){
		try{
			$body = new Google\Service\Drive\DriveFile([
				'mimeType' => "application/vnd.google-apps.spreadsheet",
				'name' => $title,
				'supportsAllDrives' => TRUE,
				'driveId' => $folder,
				'parents' => [$folder],
			]);
			$res = $this->driveservice->files->create($body);
			return $res->id;
		}catch(exception $e){
			throw new Exception(__FUNCTION__.": ".$e->getMessage());
		}
	}

	// Upload file with $data as file base64 URL
	function drive_upload_file($folder, $title, $data){
		try{
			$arr = explode(",", $data);
			$mimeType = $arr[0];
			$filedat = $arr[1];
			$filetype = explode(";", explode("/", $mimeType)[1])[0];

			$body = new Google\Service\Drive\DriveFile([
				'mimeType' => explode(";", $mimeType)[0],
				'name' => $title.".".$filetype,
				'supportsAllDrives' => TRUE,
				'driveId' => $folder,
				'parents' => [$folder],
				"uploadType" => "multipart",
			]);
			$res = $this->driveservice->files->create($body, [
				'data' => base64_decode($filedat),
				'mimeType' => $mimeType
			]);
			return $res->id;
		}catch(exception $e){
			throw new Exception(__FUNCTION__.": ".$e->getMessage());
		}
	}

	// Sheets API interface
	// --------------------
	function sheets_get_range($id, $sheet, $range){
		try{
			$rangestring = $sheet."!".$range;
			$response = $this->sheetsservice->spreadsheets_values->get($id, $rangestring);
			return $response->getValues();
		}catch(exception $e){
			throw new Exception(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function sheets_put_range($id, $sheet, $range, $values, $raw=FALSE){
		try{
			$rangestring = $sheet."!".$range;
			$inputOption = "USER_ENTERED";
			if($raw) $inputOption = "RAW";
			$body = new Google\Service\Sheets\ValueRange([
				'range'=>$rangestring,
				'majorDimension'=>'ROWS',
				'values'=>$values
			]);
			$params = array(
				'valueInputOption' => $inputOption,
				'responseValueRenderOption' => "UNFORMATTED_VALUE"
			);
			$response = $this->sheetsservice->spreadsheets_values->update($id, $rangestring, $body, $params);
		}catch(exception $e){
			throw new Exception(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function sheets_create_sheet($id, $sheetname){
		try{
			$body = new Google\Service\Sheets\BatchUpdateSpreadsheetRequest([
				'requests' => [
					'addSheet' => [
						'properties' => [
							'title' => $sheetname
						]
					]
				]
			]);
			$result = $this->sheetsservice->spreadsheets->batchUpdate($id, $body);
		}catch(exception $e){
			throw new Exception(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function sheets_delete_sheet($id, $index){
		try{
			$body = new Google\Service\Sheets\BatchUpdateSpreadsheetRequest([
				'requests' => [
					'deleteSheet' => [
						"sheetId" => $index
					]
				]
			]);
			$result = $this->sheetsservice->spreadsheets->batchUpdate($id, $body);
		}catch(exception $e){
			throw new Exception(__FUNCTION__.": ".$e->getMessage());
		}
	}

}
