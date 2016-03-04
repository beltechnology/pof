<?php
if(isset($_POST['addNotesCategory']))
{
	try {
			if(isset($_POST['categoryName']))
			{	$categoryInfo = new dataInfo();
				$matchNotesCategory = false;
				$notesCategoryId = "";
				$categoryData = new stdClass();
				if(isset($_POST['parentCategory']))
				{
					$categoryData->parentCategory = $_POST['parentCategory'];
					$notesCategoryData =$categoryInfo->getNotesCategoryDataByCategoryId($_POST['parentCategory']);
					$getParentCategory = $notesCategoryData->parentId;
				}
				else
				{
					$categoryData->parentCategory = 0;
				}
				$categoryData->categoryName = $_POST['categoryName'];
				$categoryData->categoryDescription = $_POST['categoryDescription'];
				$categoryData->seoTitle = $_POST['seoTitle'];
				$categoryData->examDate = $_POST['examDate'];
				$categoryData->metaTag = $_POST['metaTag'];
				$categoryData->keyWord = $_POST['keyWord'];				
				$categoryData->sort_order = $_POST['sort_order'];				
				$categoryData->status = $_POST['status'];				
				if(isset($_POST['notesCategoryId']))
				{
					if($getParentCategory == $_POST['notesCategoryId'])
					{
						echo $getParentCategory."_".$_POST['notesCategoryId'];
						$matchNotesCategory = true;	
					}
					$categoryData->notesCategoryId = $_POST['notesCategoryId'];
				    $categoryData->state = 2;
				}
				else{
					$categoryData->state = 1;
				}
				if(!$matchNotesCategory)
				{
				$response = $categoryInfo ->addNotesCategory($categoryData);
				$succesMsg = $response;
				header("location:viewNotesCategory.php?msg=".$succesMsg);
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