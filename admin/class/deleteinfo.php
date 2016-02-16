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
		$featuredInfo->category_id = $_POST['category_id'];
		$featuredInfo->checkType = $_POST['checkType'];

		$query = mysql_query("SELECT COUNT(featured) FROM category where featured= 1 and deleted= 0 ");
		$row = mysql_fetch_array($query);
		if($row[0] <7)
		{
				$response = mysql_query("UPDATE category SET featured= ".$featuredInfo->checkType." WHERE category_id=".$featuredInfo->category_id);
				return $response;
		}
		else
		{
			
		}
		return $response;
	}
}

?>