<?php
class deleteinfo
{
	var $deleteData;
	public function deleteRecord($deleteData)
	{
				if($deleteData->tableName !="" && $deleteData->value !="" &&  $deleteData->fieldName !="" &&  $deleteData->state !="" && $deleteData->state == 3)
				{
				$response = mysql_query("UPDATE ".$deleteData->tableName." SET deleted= 1 WHERE ". $deleteData->fieldName."=".$deleteData->value);
				return $response;
				}
		
	}
	public function checkFeatured($featuredInfo)
	{

		$query = mysql_query("SELECT * FROM category where featured= 1 and deleted= 0 ");
		$row = mysql_num_rows($query);
		
		if($featuredInfo->checkType == true)
		{
				$response = mysql_query("UPDATE category SET featured= 1 WHERE category_id=".$featuredInfo->category_id);
		}
		else
		{
			$response = mysql_query("UPDATE category SET featured= 0 WHERE category_id=".$featuredInfo->category_id);
			
		}
		return $row;
	}
}

?>