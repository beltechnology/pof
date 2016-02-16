<?php
include("class/deleteinfo.php");
if(isset($_POST['tableName']) &&($_POST['value']) &&($_POST['fieldName']))
{
	try
	{	
		$deleteInfo = new stdClass();
		$deleteInfo->tableName = $_POST['tableName'];
		$deleteInfo->value = $_POST['value'];
		$deleteInfo->fieldName = $_POST['fieldName'];
		$deleteInfo->state = 3;
		
		$delete = new deleteinfo ();
		$response = $delete->deleteRecord($deleteInfo);
		if($response != true)
		{
		   throw new Exception("genrel eroor.");	
		}
	}
	catch(Exception $e) {
	  $msg = $e->getMessage();
	}
	
}
elseif(isset($_POST['category_id']) &&($_POST['checkType']))
{
	try
	{	
		$featuredInfo = new stdClass();
		$featuredInfo->category_id = $_POST['category_id'];
		$featuredInfo->checkType = $_POST['checkType'];
		$updateFeatured = new deleteinfo ();
		$response = $updateFeatured->checkFeatured($featuredInfo);
		if($response != true)
		{
		   throw new Exception("genrel eroor.");	
		}
	}
	catch(Exception $e) {
	  echo $e->getMessage();
	}
	
}
?>