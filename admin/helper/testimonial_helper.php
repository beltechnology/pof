<?php
if(isset($_POST['addTestimonial']))
{
	try {
			if(isset($_POST['title']))
			{
				$testimonialData = new stdClass();
				$testimonialData->title = $_POST['title'];
				$testimonialData->description = $_POST['description'];
				$testimonialData->upload = $_FILES["testimonialFile"]["name"];
				$testimonialData->tmp_name = $_FILES["testimonialFile"]["tmp_name"];
				$testimonialData->sort_order = $_POST['sort_order'];				
				$testimonialData->state = 1;
				//var_dump($testimonialData);
				$testimonialInfo = new dataInfo();
				$response = $testimonialInfo ->addTestimonial($testimonialData);
				$succesMsg = $response;
			  	header("location:viewTestimonial.php");
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