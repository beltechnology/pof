<?php
if(isset($_POST['addSession']))
{
	try {
			if(isset($_POST['sessionName']))
			{
				$sessionData = new stdClass();
				$sessionData->sessionName = $_POST['sessionName'];
				$sessionInfo = new dataInfo();
				$response = $sessionInfo ->addSession($sessionData);
				$succesMsg = $response;
			  	header("location:viewSession.php");
			}
			else
			{
			throw new Exception("fill required field.");
			}
	}
	catch(Exception $e) {
	  $msg = $e->getMessage();
	}



}

?>