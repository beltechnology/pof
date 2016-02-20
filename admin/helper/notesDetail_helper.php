<?php
if(isset($_POST['addNotesDetail']))
{
	try {
			if(isset($_POST['notesTitle']))
			{
				$notesDetailData = new stdClass();
				$notesDetailData->notesTitle = $_POST['notesTitle'];
				$notesDetailData->studentClass = $_POST['studentClass'];
				$notesDetailData->notesDescription = $_POST['notesDescription'];
				if(isset($_FILES["notesFile"]["name"]) && !empty($_FILES["notesFile"]["name"]))
				{
					$notesDetailData->uploads = $_FILES["notesFile"]["name"];
					$notesDetailData->tmp_name = $_FILES["notesFile"]["tmp_name"];
					$notesDetailData->newFile = true;

				}
				else
				{
				 	$notesDetailData->uploads = $_POST['oldFile'];	
					$notesDetailData->newFile = false;
				}
				$notesDetailData->seoTitle = $_POST['seoTitle'];
				$notesDetailData->metaTag = $_POST['metaTag'];
				$notesDetailData->keyWord = $_POST['keyWord'];				
				$notesDetailData->sort_order = $_POST['sort_order'];				
				$notesDetailData->status = $_POST['status'];
				$notesDetailData->notesCategoryId = $_POST['notesCategoryId'];
				if(isset($_POST['notesId']))
				{
					$notesDetailData->notesId = $_POST['notesId'];
				    $notesDetailData->state = 2;
				}
				else{
					$notesDetailData->state = 1;
				}
				$categoryInfo = new dataInfo();
				$response = $categoryInfo ->addNotesDetail($notesDetailData);
				$succesMsg = $response;
				header("location:viewNotes.php?msg=".$succesMsg);
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