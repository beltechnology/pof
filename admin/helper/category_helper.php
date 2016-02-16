<?php
if(isset($_POST['addCategory']))
{
	try {
			if(isset($_POST['categoryName']))
			{
				$matchCategory =  false;
				$getParentCategory = "";
				$categoryData = new stdClass();
				if(isset($_POST['parentCategory']))
				{
					$categoryData->parentCategory = $_POST['parentCategory'];
					$getCategory = new dataInfo();
					$parentCatId = $_POST['parentCategory'];
					$parentCatData = $getCategory->getCatagoryDataById($parentCatId);
					$getParentCategory = $parentCatData->parentid;
				}
				else
				{
					$categoryData->parentCategory = 0;
				}
				$categoryData->categoryName = $_POST['categoryName'];
				$categoryData->seoTitle = $_POST['seoTitle'];
				$categoryData->meta = $_POST['meta'];
				$categoryData->keyword = $_POST['keyword'];				
				$categoryData->sort_order = $_POST['sort_order'];				
				$categoryData->status = $_POST['status'];				
				if(isset($_POST['category_id']))
				{
					if($getParentCategory == $_POST['category_id'])
					{
						$matchCategory =  true;
					}
					$categoryData->category_id = $_POST['category_id'];
				    $categoryData->state = 2;
				}
				else{
					$categoryData->state = 1;
				}
				$categoryInfo = new dataInfo();
				if(!$matchCategory)
				{
				$response = $categoryInfo ->addCategory($categoryData);
				$succesMsg = $response;
				header("location:viewCategory.php?msg=".$succesMsg);
				}
				else
				{
					throw new Exception("Please select different category.");	
				}
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