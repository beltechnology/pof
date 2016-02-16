<?php
if(isset($_POST['updateAboutPof']))
{
	try {
			if(isset($_POST['title']))
			{
				$aboutPofData = new stdClass();
				$aboutPofData->title = $_POST['title'];
				$aboutPofData->description = $_POST['description'];
				if(isset($_FILES["aboutFile"]["name"]) && !empty($_FILES["aboutFile"]["name"]))
				{
					$aboutPofData->upload = $_FILES["aboutFile"]["name"];
					$aboutPofData->tmp_name = $_FILES["aboutFile"]["tmp_name"];
					$aboutPofData->newFile = true;

				}
				else
				{
				 	$aboutPofData->upload = $_POST['oldFile'];	
					$aboutPofData->newFile = false;
				}
				$aboutPofData->seoTitle = $_POST['seoTitle'];
				$aboutPofData->metaTag = $_POST['metaTag'];
				$aboutPofData->keyWord = $_POST['keyWord'];				
				$aboutPofData->sort_order = $_POST['sort_order'];				
				if(isset($_POST['aboutId']))
				{
					$aboutPofData->aboutId = $_POST['aboutId'];
				    $aboutPofData->state = 2;
				}
				else{
					throw new Exception("fill required field.");
				}
				//var_dump($aboutPofData);
				$aboutpfInfo = new dataInfo();
				$response = $aboutpfInfo ->updateAboutPof($aboutPofData);
				$succesMsg = $response;
				header("location:viewAboutPof.php");
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