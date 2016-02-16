<?php
if(isset($_POST['addMoreInformation']))
{
	try {
			if(isset($_POST['title']))
			{
				$moreInformationData = new stdClass();
				$moreInformationData->title = $_POST['title'];
				$moreInformationData->upload = $_FILES["moreFile"]["name"];
				$moreInformationData->tmp_name = $_FILES["moreFile"]["tmp_name"];
				$moreInformationData->link = $_POST['link'];				
				$moreInformationData->state = 1;
				//var_dump($moreInformationData);
				$moreInformationInfo = new dataInfo();
				$response = $moreInformationInfo->addMoreInformation($moreInformationData);
				$succesMsg = $response;
			  	header("location:viewMoreInformation.php");
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