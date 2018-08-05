<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("189145022945-hpuhr4m1u69qvdfh6jhstb8ummt1i581.apps.googleusercontent.com");
	$gClient->setClientSecret("66oBPHjgjDeJUTS233KWFvne");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/GuraMie/login/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
