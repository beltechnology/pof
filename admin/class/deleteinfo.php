<?php
class deleteinfo
{
	var $deleteData;
	public function deleteRecord($deleteData)
	{
				if($deleteData->tableName !="" && $deleteData->value !="" &&  $deleteData->fieldName !="" &&  $deleteData->state !="" && $deleteData->state == 3)
				{
					if($deleteData->tableName == "studentregistration")
					{
						$response = mysql_query("UPDATE user SET deleted= 1 WHERE registrationId=".$deleteData->value);
					}
					$response = mysql_query("UPDATE ".$deleteData->tableName." SET deleted= 1 WHERE ". $deleteData->fieldName."=".$deleteData->value);
					return $response;
				}
		
	}
	public function checkFeatured($featuredInfo)
	{
				$response = mysql_query("UPDATE category SET featured= ".$featuredInfo->checkType." WHERE category_id=".$featuredInfo->category_id);
				return $response;
	}
}

?>