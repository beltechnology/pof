<?php
if(isset($_POST['addGallery']))
{
	try {
			if(isset($_POST['title']))
			{
				$gallerySessionData = new stdClass();
				$gallerySessionData->title = $_POST['title'];
				$gallerySessionData->upload = $_FILES["moreFile"]["name"];
				$gallerySessionData->tmp_name = $_FILES["moreFile"]["tmp_name"];
				$gallerySessionData->gallerysessionId = $_POST['gallerysessionId'];				
				$gallerySessionData->state = 1;
				$gallerySessionInfo = new dataInfo();
				$response = $gallerySessionInfo->addGallery($gallerySessionData);
				$succesMsg = $response;
			  	header("location:viewGallery.php");
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