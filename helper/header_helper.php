<?php
if(isset($_POST['register']))
{
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$schoolName = $_POST['schoolName'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	
	$to = "ravi@bel-technology.com";
	$subject = "My subject";
	$txt = "Name:$name<br />Phone:$phone<br />Email:$email<br />School Name:$schoolName<br />City:$city<br />State:$state<br />";
	$headers = "From: webmaster@example.com" . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	mail($to,$subject,$txt,$headers);
	//echo $txt;
}
elseif(isset($_POST['emailSubscribe']))
{
	try {
		mysql_query("SET AUTOCOMMIT=0");
		mysql_query("START TRANSACTION");
		$Semail = $_POST['sEmail'];
		$res = mysql_query("INSERT INTO emailsubscribe (email,createTimestamp)VALUES ('$Semail',now())");
		if ($res) {
			mysql_query("COMMIT");
			$response = "Email subscribe successfully .";
		} else {        
			mysql_query("ROLLBACK");
			throw new Exception("Email already exit.");
		}				
	}
	catch(Exception $e) {
	  $msg = $e->getMessage();
	}

}
echo $msg;
?>