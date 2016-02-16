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
?>