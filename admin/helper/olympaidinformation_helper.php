<?php
if(isset($_POST['updateOlympaidInformation']))
{
	try {
			if(isset($_POST['title']))
			{
				$olympaidInformationData = new stdClass();
				$olympaidInformationData->title = $_POST['title'];
				$olympaidInformationData->description = $_POST['description'];
				if(isset($_FILES["olympaidInformationInfoFile"]["name"]) && !empty($_FILES["olympaidInformationInfoFile"]["name"]))
				{
					$olympaidInformationData->upload = $_FILES["olympaidInformationInfoFile"]["name"];
					$olympaidInformationData->tmp_name = $_FILES["olympaidInformationInfoFile"]["tmp_name"];
					$olympaidInformationData->newFile = true;

				}
				else
				{
				 	$olympaidInformationData->upload = $_POST['oldFile'];	
					$olympaidInformationData->newFile = false;
				}
				$olympaidInformationData->seoTitle = $_POST['seoTitle'];
				$olympaidInformationData->link = $_POST['link'];
				$olympaidInformationData->metaTag = $_POST['metaTag'];
				$olympaidInformationData->keyWord = $_POST['keyWord'];				
				$olympaidInformationData->sort_order = $_POST['sort_order'];				
				if(isset($_POST['olympaidInformationId']))
				{
					$olympaidInformationData->olympaidInformationId = $_POST['olympaidInformationId'];
				    $olympaidInformationData->state = 2;
				}
				else{
					throw new Exception("fill required field.");
				}
				//var_dump($olympaidInformationData);
				$olympaidInformationInfo = new dataInfo();
				$response = $olympaidInformationInfo ->updateOlympaidInformation($olympaidInformationData);
				$succesMsg = $response;
				header("location:viewOlympaidInformation.php");
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