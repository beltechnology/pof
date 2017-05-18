<?php
if(isset($_POST['addGallerySession']))
{
	try {
			if(isset($_POST['title']))
			{
				$gallerySessionData = new stdClass();
				$gallerySessionData->title = $_POST['title'];
				$gallerySessionData->upload = $_FILES["moreFile"]["name"];
				$gallerySessionData->tmp_name = $_FILES["moreFile"]["tmp_name"];
				$gallerySessionData->sessionId = $_POST['sessionId'];				
				$gallerySessionData->state = 1;
				$gallerySessionInfo = new dataInfo();
				$response = $gallerySessionInfo->addGallerySession($gallerySessionData);
				$succesMsg = $response;
			  	header("location:viewGallerySession.php");
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