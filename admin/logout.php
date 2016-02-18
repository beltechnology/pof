<?php
include("common/conn.php");
	$userInfo = $_SESSION['userInfo'];
	$userType = $userInfo->userType;
	if($userType == "student")
	{
		$url = "../";
	}
	else{
		$url = "index.php";
		}

unset($_SESSION['userInfo']);
header("location:".$url);
?>