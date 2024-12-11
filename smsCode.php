<?php
//echo "<pre>";print_r($_POST);
 $phone = $_POST['phone'];
 $code = $_POST['code'];
if(!empty($phone)){
//$code = mt_rand(100000, 999999);
	

	// create a new cURL resource
	$ch = curl_init();
	//$url = "http://sms.digialaya.com/API/SMSHttp.aspx?UserId=UniproAdmin&pwd=pwd2018&Message=Your%20OTP%20is%20".$code."%20%20Use%20the%20above%20One%20Time%20Password%20to%20verify%20your%20identity.&Contacts=".$phone."&SenderId=EDUOTP&ServiceName=SMSTRANS";
    //$url = "http://sms.digialaya.com/API/SMSHttp.aspx?UserId=UniproAdmin&pwd=pwd2018&Message=Your%20OTP%20is%20".$code."%20Use%20it%20to%20verify%20your%20identity.%20Team%20UNIPRO%20Education&ServiceName=SMSTRANS&SenderId=UNIPRO&Contacts=".$phone; 

    //$url = "http://sms.digialaya.com/API/SMSHttp.aspx?UserId=UniproAdmin&pwd=pwd2018&Message=Your%20OTP%20is%20".$code."%20Use%20it%20to%20verify%20your%20identity.%20UNIPRO%20Education%20&ServiceName=SMSTRANS&SenderId=UNIPRO&Contacts=".$phone;

    $url = "http://sms.digialaya.com/API/SMSHttp.aspx?UserId=UniproAdmin&pwd=pwd2018&Message=Dear%20User,%20your%20mobile%20number%20verification%20code%20is%20".$code."%20please%20do%20not%20share%20this%20information.%20Unipro%20Education%20&ServiceName=SMSTRANS&SenderId=UNIPRO&Contacts=".$phone."";
	
	
	// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);

	// grab URL and pass it to the browser
	 $curl_res = curl_exec($ch);
	 
	curl_close($ch);
	if(!empty($curl_res)){
		$response = 'true';
	}
	else{
		$response = 'false';
	}
	//echo $response;exit;
}

?> 