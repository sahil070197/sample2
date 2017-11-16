<?php
	// Authorisation details.
	$username = "chiragarora734@gmail.com";
	$hash = "035d720acc37cc00e6b1d22c386eab0a20ac3c3c";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for tex't message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $_GET['contact']; // A single number or a comma-seperated list of numbers
	$message = $_GET['otp'];
	// 612 chars1 or less]
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	echo ($result);
	curl_close($ch);
?>