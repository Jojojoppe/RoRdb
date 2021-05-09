## NEST RoR database backend
Create file `dburl.php` in the cfg folder with the database query URL and sheet ID as in
```php
<?php
	$database_url = "https://docs.google.com/spreadsheets/d/[spreadsheet ID]/gviz/tq?tq=";
	$dababase_sheet_id = "[spreadsheet ID]";
?>
```
Copy the service account json to the cfg folder and rename it as `apikey.json`.
