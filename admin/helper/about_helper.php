<?php
if(isset($_POST['addAbout']))
{
	try {
			if(isset($_POST['name']))
			{
				$aboutData = new stdClass();
				$aboutData->name = $_POST['name'];
				$aboutData->phone = $_POST['phone'];
				$aboutData->description = $_POST['description'];
				$aboutData->uploads = $_FILES["aboutFile"]["name"];
				$aboutData->tmp_name = $_FILES["aboutFile"]["tmp_name"];
				$aboutData->sort_order = $_POST['sort_order'];				
				$aboutData->state = 1;
				//var_dump($aboutData);
				$aboutInfo = new dataInfo();
				$response = $aboutInfo ->addAbout($aboutData);
				$succesMsg = $response;
			  	header("location:viewAbout.php");
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