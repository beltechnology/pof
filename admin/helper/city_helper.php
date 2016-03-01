<?php
if(isset($_POST['addCity']))
{
	try {
			if(isset($_POST['cityName']))
			{
				$cityData = new stdClass();
				$cityData->name = $_POST['cityName'];
				$cityData->tableName = $_POST['tableName'];
				$cityData->sort_order = $_POST['sort_order'];				
				$cityData->state = 1;
				$cityInfo = new dataInfo();
				$response = $cityInfo->insertField($cityData);
				$succesMsg = $response;
			  	header("location:view".ucfirst($_POST['tableName']).".php?msg=".$succesMsg);
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