<?php
date_default_timezone_set('Europe/London');
	if(file_exists($api = "api.json")) {
		$ob = json_decode(file_get_contents($api), true);
	} else {
		echo "Bad input! contact the system administrator.  ";
		header("refresh: 3;");
		exit;

	}
if(isset($_GET['bookform']) && $_GET['bookform'] == 1) {
		$formtemplate = file_get_contents('https://raw.githubusercontent.com/serge72mt/rooms/master/formtemplate_monthly.php');
		eval("?> ".$formtemplate." <?php ");
		exit;
}
if($api_host = $ob['api']['host']) {
	$ch = curl_init(base64_decode($api_host));
	$payload = json_encode(array("roomid" => trim($_GET['id'])));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
	
	$result = json_decode($result, true);
	@extract($result['room']);
	if($debug == "1") {
	    print_r($result['room']);
        exit;
	} else if($active == "0") {
		header('location: ../index.php');
		exit;
	}  else {
		if(isset($_POST['bookform'])) {
			$btpl = file_get_contents('https://raw.githubusercontent.com/serge72mt/rooms/master/bookingtemplate_monthly.php');
			eval("?> ".$btpl." <?php ");
		} else if(isset($_POST['action'])) {
			echo "sent";
			exit;
		} else if(isset($_POST['finish'])) {
			$btpl = file_get_contents('https://raw.githubusercontent.com/serge72mt/rooms/master/bookingtemplate_monthly.php');
			eval("?> ".$btpl." <?php ");
		} else {
			$itpl = file_get_contents('https://raw.githubusercontent.com/serge72mt/rooms/master/indextemplate_monthly.php');
			eval("?> ".$itpl." <?php ");
			//print_r($result);
		}
		
	}
} 
else {
	echo "No Access";
	unlink("api.json");
}

