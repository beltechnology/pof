<?php
if(isset($_POST['addMedia']))
{
	try {
			if(isset($_POST['title']))
			{
				$mediaData = new stdClass();
				$mediaData->title = $_POST['title'];
				$mediaData->upload = $_FILES["moreFile"]["name"];
				$mediaData->tmp_name = $_FILES["moreFile"]["tmp_name"];
				$mediaData->sessionId = $_POST['sessionId'];				
				$mediaData->state = 1;
				//var_dump($mediaData);
				$mediaInfo = new dataInfo();
				$response = $mediaInfo->addMedia($mediaData);
				$succesMsg = $response;
			  	header("location:viewMedia.php");
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