<?php

require_once __DIR__."/api.php";
require_once __DIR__."/../utils.php";
require_once __DIR__."/../../third_party/google-api-php-client--PHP8.0/vendor/autoload.php";

$client = api_get_client();
$driveservice = new Google_Service_Drive($client);

function drive_delete_file($fileId){
	GLOBAL $driveservice;
	try{
		$resp = $driveservice->files->delete($fileId);
	}catch (Exception $e) {
		print "Something went wrong:<br>";
		preprint($e);
	}
}

function drive_create_spreadsheet($folder, $title){
	GLOBAL $driveservice;
	try{
		$body = new Google_Service_Drive_DriveFile([
			'mimeType' => "application/vnd.google-apps.spreadsheet",
			'name' => $title,
			'supportsAllDrives' => TRUE,
			'driveId' => $folder,
			'parents' => [$folder],
		]);
		$res = $driveservice->files->create($body);
		return $res->id;
	}catch(exception $e){
		echo "Somethig went wrong:<br>";
		preprint($e);
		return "";
	}
}

function drive_create_folder($folder, $title){
	GLOBAL $driveservice;
	try{
		$body = new Google_Service_Drive_DriveFile([
			'mimeType' => "application/vnd.google-apps.folder",
			'name' => $title,
			'parents' => [$folder]
		]);
		$res = $driveservice->files->create($body, array('fields' => 'id', 'supportsAllDrives' => true));
		return $res->id;
	}catch(exception $e){
		echo "Somethig went wrong:<br>";
		preprint($e);
		return "";
	}
}

function drive_ls($folder){
	GLOBAL $driveservice;
	try{
		$optParams = array(
			"q"=>"'$folder' in parents",
			'fields' => 'nextPageToken, files(id, name, mimeType, modifiedTime, size, parents)'
		);
			
		$results = $driveservice->files->listFiles($optParams);
		$files = array();
		foreach($results->files as $file){
			$f = ["name"=>$file->name, "id"=>$file->id, "mimeType"=>$file->mimeType];
			$files[$file->name] = $f;
		}
		return $files;
	}catch(exception $e){
		echo "Somethig went wrong:<br>";
		preprint($e);
		return array();
	}
}

function drive_share($id, $mail, $role){
	GLOBAL $driveservice;
	try{
		$body = new Google_Service_Drive_Permission([
			"type"=>"user",
			"role"=>$role,
			"emailAddress"=>$mail
		]);
		$res = $driveservice->permissions->create($id, $body, array("sendNotificationEmail"=>false));
	}catch(exception $e){
		echo "Somethig went wrong:<br>";
		preprint($e);
	}
}

?>
