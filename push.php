<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

$data = trim(file_get_contents("php://input"));
$data = json_decode($data);
	if(@$data->api->host) {
		$jsonfile = fopen("api.json", "w") or die("Unable to create json file!");
		$jsondata = json_encode($data);
		fwrite($jsonfile, $jsondata);
		fclose($jsonfile);
		return true;
	}