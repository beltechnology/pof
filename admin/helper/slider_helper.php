<?php
if(isset($_POST['sliderUpdate']))
{
	try {
			if(isset($_POST['sliderId']))
			{
				$sliderData = new stdClass();
				$sliderData->text = $_POST['text'];
				$sliderData->sliderId = $_POST['sliderId'];
				if(!empty($_FILES['sliderImage']['name']))
				{
					$sliderData->sliderImage = $_FILES['sliderImage']['name'];
					$sliderData->tmp_name = $_FILES["sliderImage"]["tmp_name"];
					$sliderData->newFile = true;
					//var_dump($sliderData);
				}
				else
				{
					$sliderData->newFile = false;
					$sliderData->sliderImage = $_POST['oldSliderImage'];
				}
				$sliderInfo = new dataInfo();
				$response = $sliderInfo->updateSlider($sliderData);
				$succesMsg = $response;
				//header("location:viewPages.php?msg=".$succesMsg);
			}
			elseif(isset($_POST['mSliderHeadId']))
			{
				$sliderHeadData = new stdClass();
				$sliderHeadData->title = $_POST['title'];
				$sliderHeadData->mSliderHeadId = $_POST['mSliderHeadId'];

				
				$sliderInfo = new dataInfo();
				$response = $sliderInfo->updatemSliderHeading($sliderHeadData);
				$succesMsg = $response;
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