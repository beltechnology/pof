<?php 
class dataInfo
{
	var $response;
	var $dropDown;

	public function selectAll($tableName)
	 {
	  $allData = "";
	  $res=mysql_query("SELECT * FROM ".$tableName." where deleted = 0  ORDER BY sort_order ASC ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	 }
	public function selectAllDesc($tableName)
	 {
	  $allData = "";
	  $res=mysql_query("SELECT * FROM ".$tableName." where deleted = 0  ORDER BY sessionId desc ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	 }


	public function selectAllMenu($tableName)
	 {
	  $allData = "";
	  $res=mysql_query("SELECT * FROM ".$tableName." where deleted = 0 && status = 0  ORDER BY sort_order ASC ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	 }

	 
// check exit category...
	public function checkExitCategory($categoryData)
	 {
	 		
			$categoryName = $categoryData->categoryName;
	 		$parentCategory = $categoryData->parentCategory;
			$state = $categoryData->state;
			if($state == 2)
			{
			 $category_id = $categoryData->category_id;
			 $query = mysql_query("SELECT * FROM  category where deleted = 0 and parentid ='$parentCategory' and title = '$categoryName' and category_id !='$category_id' ");
			}
			else
			{
			 $query = mysql_query("SELECT * FROM  category where deleted = 0 and parentid ='$parentCategory' and title = '$categoryName' ");
			}
			 $row = mysql_num_rows($query);
			 if(!$row >0)
			 {
			 	$response = true;
			 }
			 else
			 {
			 	$response = false;
			 }
			return $response;
	 }

// check notes exit category
	public function checkExitNotesCategory($categoryData)
	 {
	 		$categoryName = $categoryData->categoryName;
	 		$parentCategory = $categoryData->parentCategory;
			$state = $categoryData->state;
			if($state == 2)
			{
			 $notesCategoryId = $categoryData->notesCategoryId;
			 $query = mysql_query("SELECT * FROM notescategory where deleted = 0 and parentId ='$parentCategory' and CategoryName = '$categoryName' and notesCategoryId != '$notesCategoryId' ");
			}
			else
			{
			 $query = mysql_query("SELECT * FROM notescategory where deleted = 0 and parentId ='$parentCategory' and CategoryName = '$categoryName' ");
			}
			 $row = mysql_num_rows($query);
			 if(!$row >0)
			 {
			 	$response = true;
			 }
			 else
			 {
			 	$response = false;
			 }
			return $response;
	 }
// check notes exit notesDetail
	public function checkExitPages($pagesData)
	 {
	 		$pageTitle = $pagesData->pageTitle;
	 		$categoryId = $pagesData->categoryId;
			$state = $pagesData->state;
			if($state == 2)
			{
			 $pageId = $pagesData->pageId;
			 $query = mysql_query("SELECT * FROM pages where deleted = 0 and categoryId ='$categoryId' and pageTitle = '$pageTitle' and pageId != '$pageId' ");
			}
			else
			{
			 $query = mysql_query("SELECT * FROM pages where deleted = 0 and categoryId ='$categoryId' and pageTitle = '$pageTitle' ");
			}
			 $row = mysql_num_rows($query);
			 if(!$row >0)
			 {
			 	$response = true;
			 }
			 else
			 {
			 	$response = false;
			 }
			return $response;
	 }
// check exit notes detail
	public function checkExitNotesDetail($pagesData)
	 {
	 		$notesTitle = $pagesData->notesTitle;
	 		$notesCategoryId = $pagesData->notesCategoryId;
			$state = $pagesData->state;
			if($state == 2)
			{
			 $notesId = $pagesData->notesId;
			 $query = mysql_query("SELECT * FROM notesdetail where deleted = 0 and notesCategoryId ='$notesCategoryId' and notesTitle = '$notesTitle' and notesId != '$notesId' ");
			}
			else
			{
			 $query = mysql_query("SELECT * FROM notesdetail where deleted = 0 and notesCategoryId ='$notesCategoryId' and notesTitle = '$notesTitle' ");
			}
			 $row = mysql_num_rows($query);
			 if(!$row >0)
			 {
			 	$response = true;
			 }
			 else
			 {
			 	$response = false;
			 }
			return $response;
	 }

// add and update notes category 

	public function addNotesCategory($categoryData)
	 {
				$response = $this->checkExitNotesCategory($categoryData);
				$categoryName = $categoryData->categoryName;
				$categoryDescription = $categoryData->categoryDescription;
				$parentCategory = $categoryData->parentCategory;
				$seoTitle = $categoryData->seoTitle;
				$examDate = $categoryData->examDate;
				$metaTag = $categoryData->metaTag;
				$keyWord = $categoryData->keyWord;
				$status = $categoryData->status;
				$sort_order = $categoryData->sort_order;
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
			if($response == true && $categoryData->state == 1 )
			{
				$res = mysql_query("INSERT INTO notescategory (categoryName,categoryDescription,seoTitle ,examDate, parentId,metaTag,keyword,status,sort_order)VALUES ('$categoryName','$categoryDescription','$seoTitle','$examDate','$parentCategory','$metaTag','$keyWord ', '$status', '$sort_order')");
				if ($res) {
					mysql_query("COMMIT");
					$response = "Notes Category successfully added.";
				} else {        
					mysql_query("ROLLBACK");
					$response = "Notes Category failed.";
				}				
				
			}
			elseif($response == true && $categoryData->state == 2 )
			{
				$notesCategoryId = $categoryData->notesCategoryId;
				$res = mysql_query("UPDATE notescategory SET categoryName='$categoryName',categoryDescription='$categoryDescription',seoTitle='$seoTitle', examDate='$examDate', parentId= '$parentCategory',metaTag='$metaTag',keyWord='$keyWord' ,status='$status' ,sort_order='$sort_order'  WHERE notesCategoryId='$notesCategoryId'");
				if ($res) {
					mysql_query("COMMIT");
					$response = "Notes Category successfully updated.";
				} else {        
					mysql_query("ROLLBACK");
					$response = "Notes Category update failed.";
				}				
				
			}
			else
			{
				$response = "Notes Category Already Exit.";
			}
			
			return $response;
	 }

// add and update notes detail 

	public function addNotesdetail($categoryData)
	 {
				
				$response = $this->checkExitNotesDetail($categoryData);
				$notesTitle = $categoryData->notesTitle;
				$studentClass = $categoryData->studentClass;
				$notesDescription = $categoryData->notesDescription;
				$notesCategoryId = $categoryData->notesCategoryId;
				$seoTitle = $categoryData->seoTitle;
				$newFile = $categoryData->newFile;
				if($newFile == true){
				$uploads = $categoryData->uploads;
				$tmp_name = $categoryData->tmp_name;
				$newFile = $categoryData->newFile;
				$temp = explode(".", $uploads);
				$newfilename = $temp[0].round(microtime(true)) . '.' . end($temp);
				
				move_uploaded_file($tmp_name, "../upload/" . $newfilename);
				}
				else{
				$newfilename = $categoryData->uploads;	
				}
				$metaTag = $categoryData->metaTag;
				$keyWord = $categoryData->keyWord;
				$status = $categoryData->status;
				$sort_order = $categoryData->sort_order;
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
			if($response == true && $categoryData->state == 1 )
			{
				$res = mysql_query("INSERT INTO notesdetail (notesCategoryId, notesTitle, notesDescription,uploads,studentClass, seoTitle, metaTag, keyword, status, sort_order)VALUES ('$notesCategoryId','$notesTitle','$notesDescription','$newfilename','$studentClass','$seoTitle','$metaTag','$keyWord ', '$status', '$sort_order')");
				if ($res) {
					mysql_query("COMMIT");
					$response = "Notes Detail successfully added.";
				} else {        
					mysql_query("ROLLBACK");
					$response = "Notes Detail failed.";
				}				

			}
			elseif($response == true && $categoryData->state == 2 )
			{
				$notesId = $categoryData->notesId;
				$res = mysql_query("UPDATE notesdetail SET notesCategoryId='$notesCategoryId',notesTitle='$notesTitle', notesDescription='$notesDescription', uploads='$newfilename',studentClass='$studentClass', seoTitle='$seoTitle', metaTag='$metaTag', keyWord='$keyWord' , status='$status' , sort_order='$sort_order'  WHERE notesId='$notesId'");
				if ($res) {
					mysql_query("COMMIT");
					$response = "Notes detail successfully updated.";
				} else {        
					mysql_query("ROLLBACK");
					$response = "Notes detail update failed.";
				}				

			}
			else
			{
				$response = "Notes Detail Already Exit.";
			}
			
			return $response;
	 }

//  add and update category dropdown
	public function addCategory($categoryData)
	 {
			$response = $this->checkExitCategory($categoryData);
				$categoryName = $categoryData->categoryName;
				$parentCategory = $categoryData->parentCategory;
				$seoTitle = $categoryData->seoTitle;
				$meta = $categoryData->meta;
				$keyword = $categoryData->keyword;
				$status = $categoryData->status;
				$sort_order = $categoryData->sort_order;
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
			if($response == true && $categoryData->state == 1 )
			{
				$res = mysql_query("INSERT INTO category (title,seoTitle ,parentid,meta,keyword,status,sort_order)VALUES ('$categoryName','$seoTitle','$parentCategory','$meta','$keyword ', '$status', '$sort_order')");
				if ($res) {
					mysql_query("COMMIT");
					$response = "Category successfully added.";
				} else {        
					mysql_query("ROLLBACK");
					$response = "Category failed.";
				}				
			}
			elseif($response == true && $categoryData->state == 2 )
			{
				$category_id = $categoryData->category_id;
				$res = mysql_query("UPDATE category SET title='$categoryName',seoTitle='$seoTitle',parentid= '$parentCategory',meta='$meta',keyword='$keyword' ,status='$status' ,sort_order='$sort_order'  WHERE category_id='$category_id'");
				if ($res) {
					mysql_query("COMMIT");
					$response = "Category successfully updated.";
				} else {        
					mysql_query("ROLLBACK");
					$response = "Category update failed.";
				}				

			}
			else
			{
				$response = "Category Already Exit.";
			}
			
			return $response;
	 }
	 
// add and update pages

	public function addPageDetail($pagesData)
	 {
			$response = $this->checkExitPages($pagesData);
				$pageTitle = $pagesData->pageTitle;
				$categoryId = $pagesData->categoryId;
				$pageDescription = $pagesData->pageDescription;
				$specialNote = $pagesData->specialNote;
				$seoTitle = $pagesData->seoTitle;
				$metaTag = $pagesData->metaTag;
				$keyWord = $pagesData->keyWord;
				$status = $pagesData->status;
				$sort_order = $pagesData->sort_order;
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
			if($response == true && $pagesData->state == 1 )
			{
				$res = mysql_query("INSERT INTO pages (categoryId, pageTitle, pageDescription, specialNote, seoTitle, metaTag, keyWord, status,sort_order)VALUES ('$categoryId','$pageTitle','$pageDescription','$specialNote','$seoTitle', '$metaTag', '$keyWord', '$status', '$sort_order')");
				if ($res) {
					mysql_query("COMMIT");
					$response = "page successfully added.";
				} else {        
					mysql_query("ROLLBACK");
					$response = "page detail failed.";
				}				
				
			}
			elseif($response == true && $pagesData->state == 2 )
			{
				$pageId = $pagesData->pageId;
				$res = mysql_query("UPDATE pages SET categoryId='$categoryId', pageTitle='$pageTitle', pageDescription='$pageDescription', specialNote= '$specialNote', seoTitle='$seoTitle', metaTag='$metaTag', keyWord='$keyWord', status='$status', sort_order='$sort_order'  WHERE pageId='$pageId'");
				if ($res) {
					mysql_query("COMMIT");
					$response = "Page successfully updated.";
				} else {        
					mysql_query("ROLLBACK");
					$response = "page detail failed.";
				}				
				
			}
			else
			{
				$response = "Page Already Exit.";
			}
			
			return $response;
	 }
	 
//   category dropdown
	public function genrateCategory($category_id,$title,$parent,$seletedCategoryid,$ele)
	 {
		if($parent > 0 )
		{
			$dropDown = $this->getParentCategoryData($category_id,$parent,$title,$seletedCategoryid,$ele); 
		}
		else
		{
			if($seletedCategoryid == $category_id && $ele == "")
			{
			 $dropDown = "";
			}
			elseif($seletedCategoryid == $category_id && $ele == "option")
			{
				$dropDown = "<option selected='selected' value='".$category_id."' >".$title."</option>";
			}
			else
			{
				if($ele == "")
				{
			 		$dropDown = "<option value='".$category_id."' >".$title."</option>";
				}
				elseif($ele == "option")
				{
					$dropDown = "<option value='".$category_id."' >".$title."</option>";
				}
				else
				{
					$dropDown = $title;
				}
			}
		}
		return $dropDown;
		
	 }
//  notes category dropdown
	public function genrateNotesCategory($category_id,$title,$parent,$seletedCategoryid,$ele)
	 {
		if($parent > 0 )
		{
			$dropDown = $this->getParentNotesCategoryData($category_id,$parent,$title,$seletedCategoryid,$ele); 
		}
		else
		{
			if($seletedCategoryid == $category_id && $ele == "")
			{
			 $dropDown = "";
			}
			elseif($seletedCategoryid == $category_id && $ele == "option")
			{
				$dropDown = "<option selected='selected' value='".$category_id."' >".$title."</option>";
			}
			else
			{
				if($ele == "")
				{
			 		$dropDown = "<option value='".$category_id."' >".$title."</option>";
				}
				elseif($ele == "option")
				{
					$dropDown = "<option value='".$category_id."' >".$title."</option>";
				}
				else
				{
					$dropDown = $title;
				}
			}
		}
		return $dropDown;
		
	 }

//  category data	 fetch

	public function getParentCategoryData($category_id,$parent,$title,$seletedCategoryid,$ele)
	 {
		 	if($ele == "option")
			{
				$query = mysql_query("SELECT * FROM  category where deleted = 0 and status = 0 and category_id ='$parent'  ORDER BY sort_order ASC ");
			}
			else{
			 $query = mysql_query("SELECT * FROM  category where deleted = 0 and category_id ='$parent'  ORDER BY sort_order ASC ");
			}
			 $obj = mysql_fetch_object($query);
			 
			if($obj !="")
			{
			$NewTitle = $obj ->title." >> ".$title;
			$newParent = $obj ->parentid;
			$dropDown = $this->genrateCategory($category_id,$NewTitle,$newParent,$seletedCategoryid,$ele);
			}
			else
			{
				$dropDown = "";
			}
			return $dropDown;
	 }
//  category data by category Id

	public function getCatagoryDataById($parent)
	 {
			 $query = mysql_query("SELECT * FROM  category where deleted = 0 and category_id ='$parent'  ORDER BY sort_order ASC ");
			 $obj = mysql_fetch_object($query);			
			 return $obj;
	 } 
	 // category by parentId
	public function getCatagoryDataByParentId($parent)
	 {			
	 		$objData = "";
			 $query = mysql_query("SELECT * FROM  category where  status = 0 and deleted = 0 and parentid ='$parent'  ORDER BY sort_order ASC ");
			 while($obj = mysql_fetch_object($query))
			 {
				 $objData[] = $obj;
			 }
			 return $objData;
	 }  
// notes category data	 fetch
	public function getParentNotesCategoryData($category_id,$parent,$title,$seletedCategoryid,$ele)
	 {
				if($ele == "option")
				{
 					$query = mysql_query("SELECT * FROM  notescategory where status = 0 and deleted = 0 and notesCategoryId ='$parent'");	
				}
				else
				{
 					$query = mysql_query("SELECT * FROM  notescategory where deleted = 0 and notesCategoryId ='$parent'");	
				}
				
				
			 $obj = mysql_fetch_object($query);
			if($obj !="")
			{
			$NewTitle = $obj ->CategoryName." >> ".$title;
			$newParent = $obj ->parentId;
			$dropDown = $this->genrateNotesCategory($category_id,$NewTitle,$newParent,$seletedCategoryid,$ele);
			}
			else
			{
				$dropDown = "";
			}
			return $dropDown;
	 }
	 
// get Notes descrpion by notesCategoryId
	public function getNotesCategoryDataByCategoryId($notesCategoryId)
	 {
			 $query = mysql_query("SELECT * FROM  notescategory where deleted = 0 and notesCategoryId ='$notesCategoryId'  ORDER BY sort_order ASC ");
			 $obj = mysql_fetch_object($query);
			 return $obj;
	 }
	 
// get pages descrpion by CategoryId
	public function getCategoryDataByCategoryId($category_id)
	 {
			 $query = mysql_query("SELECT * FROM  category where deleted = 0 and category_id ='$category_id'  ORDER BY sort_order ASC ");
			 $obj = mysql_fetch_object($query);
			 return $obj;
	 }
	 
	 // get pages by CategoryId
	public function getpagesByCategoryId($category_id)
	 {
			 $query = mysql_query("SELECT * FROM  pages where deleted = 0 and categoryId ='$category_id'  ORDER BY sort_order ASC  ");
			 $obj = mysql_fetch_object($query);
			 return $obj;
	 }
	 
	 
// get all data by id
	public function getDataById($table,$field,$id)
	 {
			 $query = mysql_query("SELECT * FROM  ".$table." where deleted = 0 and ".$field." =".$id."  ORDER BY sort_order ASC ");
			 $obj = mysql_fetch_object($query);
			 return $obj;
	 }
// update slider data
	public 	function updateSlider($sliderData)
	{
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
				$sliderId = $sliderData->sliderId;
				$text = $sliderData->text;
				$newFile = $sliderData->newFile;
				if($newFile == true){
				$sliderImage = $sliderData->sliderImage;
				$tmp_name = $sliderData->tmp_name;
				$newFile = $sliderData->newFile;
				$temp = explode(".", $sliderImage);
				$newfilename = $temp[0].round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($tmp_name, "../upload/" . $newfilename);
				}
				else{
				$newfilename = $sliderData->sliderImage;	
				}
				
				
					$res = mysql_query("UPDATE slider SET text='$text', sliderImage='$newfilename' WHERE sliderId='$sliderId'");
					if ($res) {
					$response = mysql_query("COMMIT");
					$response = "Slider successfully updated.";
					} else {        
					mysql_query("ROLLBACK");
					$response = "Slider update failed.";
					}
		
	} 
// add and update student registration

	public function addstudent($registrationData)
	 {
				
				
				$studentName = $registrationData->studentName;
				$fatherName = $registrationData->fatherName;				
				$motherName = $registrationData->motherName;
				$dob = $registrationData->dob;
				$subject = $registrationData->subject;
				$studentClass = $registrationData->studentClass;	
				$address = $registrationData->address;
				$mobile = $registrationData->mobile;
				$email = $registrationData->email;				
				$city = $registrationData->city;				
				$addressState = $registrationData->addressState;
				$pinCode = $registrationData->pinCode;
				$schoolName = $registrationData->schoolName;
				$schoolCode = $registrationData->schoolCode;
				$principalName = $registrationData->principalName;
				$principalMobile = $registrationData->principalMobile;
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
				if($registrationData->state == 1 )
				{
					$status =$registrationData->status;
					
					$res = mysql_query("INSERT INTO studentregistration (studentName, status, fatherName, motherName,dob, subject, studentClass, address, mobile, email,city,addressState, pinCode, schoolName, schoolCode, principalName, principalMobile)VALUES ('$studentName', '$status','$fatherName','$motherName','$dob','$subject','$studentClass','$address', '$mobile','$email','$city','$addressState','$pinCode','$schoolName','$schoolCode', '$principalName','$principalMobile')");
					if ($res) {
					mysql_query("COMMIT");
					$response = "Student registered successfully.";
					} else {        
					mysql_query("ROLLBACK");
					$response = "Student registered failed.";
					}
					
				}
				elseif($registrationData->state == 2 )
				{
					$studentId = $registrationData->studentId;
					$res = mysql_query("UPDATE studentregistration SET studentName='$studentName',fatherName='$fatherName', motherName='$motherName', dob='$dob', subject='$subject',studentClass='$studentClass', address='$address', mobile='$mobile', email='$email', city='$city', addressState='$addressState', pinCode='$pinCode', schoolName='$schoolName', schoolCode='$schoolCode', principalName='$principalName', principalMobile='$principalMobile' WHERE studentId='$studentId'");
					if ($res) {
					$response = mysql_query("COMMIT");
					$response = "Student registered successfully updated.";
					} else {        
					mysql_query("ROLLBACK");
					$response = "Student registered update failed.";
					}
				}
				else
				{
					$response = "required data missing.";
				}
			
			return $response;
	 }

//Home menu and submenu	 
public function getSubmenu($parentId)
 {
	 $menuInfo = $this->getCatagoryDataByParentId($parentId);
	 $submenuHTML = "";
	 $liHTML = "";
	 $submenuHtml = "";
	 $htmlFactory = new htmlFactory();
	 $ulHTML = "<ul class='collapse' id='demo".$parentId."'>";
	 if($menuInfo)
	 {
	 foreach($menuInfo as $submenu)
		{
			if($submenu->parentid != 0 && $submenu->parentid == $parentId)
			{
				
				 $sumMenuFlag = false;
				 $menuInfoData = $this->getCatagoryDataByParentId($submenu->category_id);
				 $pageInfo   =   $this->getpagesByCategoryId($submenu->category_id);
				 if($menuInfoData != "" || $pageInfo != "")
				 {
					 $sumMenuFlag = true;
					 $iHTML = "";
				}
				else
				{
					$iHTML ="";
				}
				
				
			   $liHTML= $liHTML."<li id='".$submenu->category_id."'  class='category'><a href='http://".$_SERVER['SERVER_NAME']."".BaseUrl."pages/index.php?categoryId=".$submenu->category_id."'>".$submenu->title."".$iHTML." </a>".$htmlFactory->createPages($submenu->category_id);
								
				$submenuHtml = $this->getSubmenu($submenu->category_id);
				$closeliHTML = "";
				
				$fullSubmenu =  $liHTML.$submenuHtml.$closeliHTML;
			   
			}
		}
		$CloseulHTML =  "</li></ul>";
		$submenuHTML = $ulHTML.$fullSubmenu.$CloseulHTML;
	 }
		return $submenuHTML;
 } 
 // update about pof data
 
 	public function updateAboutPof($updateAboutPofData)
	 {
				
				$title = $updateAboutPofData->title;
				$description = $updateAboutPofData->description;
				$seoTitle = $updateAboutPofData->seoTitle;
				$newFile = $updateAboutPofData->newFile;
				if($newFile == true){
				$upload = $updateAboutPofData->upload;
				$tmp_name = $updateAboutPofData->tmp_name;
				$newFile = $updateAboutPofData->newFile;
				$temp = explode(".", $upload);
				$newfilename = $temp[0].round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($tmp_name, "../upload/" . $newfilename);
				}
				else{
				$newfilename = $updateAboutPofData->upload;	
				}
				$metaTag = $updateAboutPofData->metaTag;
				$keyWord = $updateAboutPofData->keyWord;
				$sort_order = $updateAboutPofData->sort_order;
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
			if($updateAboutPofData->state == 2 )
			{
				$aboutId = $updateAboutPofData->aboutId;
				$res = mysql_query("UPDATE aboutpof SET title='$title', description='$description', upload='$newfilename',seoTitle='$seoTitle',metaTag='$metaTag',keyWord='$keyWord' , sort_order='$sort_order'  WHERE aboutId='$aboutId'");
				if ($res) {
					mysql_query("COMMIT");
					$response = "About pof detail  successfully updated.";
				} else {        
					mysql_query("ROLLBACK");
					$response = "About pof detail update failed.";
				}				

			}
			else
			{
				$response = "Required data fill.";
			}
			
			return $response;
	 }


 // update updateOlympaidInformation data
 
 	public function updateOlympaidInformation($updateOlympaidInformationData)
	 {
				
				$title = $updateOlympaidInformationData->title;
				$description = $updateOlympaidInformationData->description;
				$seoTitle = $updateOlympaidInformationData->seoTitle;
				$link = $updateOlympaidInformationData->link;
				$newFile = $updateOlympaidInformationData->newFile;
				if($newFile == true){
				$upload = $updateOlympaidInformationData->upload;
				$tmp_name = $updateOlympaidInformationData->tmp_name;
				$newFile = $updateOlympaidInformationData->newFile;
				$temp = explode(".", $upload);
				$newfilename = $temp[0].round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($tmp_name, "../upload/" . $newfilename);
				}
				else{
				$newfilename = $updateOlympaidInformationData->upload;	
				}
				$metaTag = $updateOlympaidInformationData->metaTag;
				$keyWord = $updateOlympaidInformationData->keyWord;
				$sort_order = $updateOlympaidInformationData->sort_order;
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
			if($updateOlympaidInformationData->state == 2 )
			{
				$olympaidinformationId = $updateOlympaidInformationData->olympaidInformationId;
				$res = mysql_query("UPDATE olympaidinformation SET title='$title', description='$description', upload='$newfilename',seoTitle='$seoTitle', link = '$link',metaTag='$metaTag',keyWord='$keyWord' , sort_order='$sort_order'  WHERE olympaidinformationId='$olympaidinformationId'");
				if ($res) {
					mysql_query("COMMIT");
					$response = "Olympaid information  successfully updated.";
				} else {        
					mysql_query("ROLLBACK");
					$response = "Olympaid information update failed.";
				}				

			}
			else
			{
				$response = "Required data fill.";
			}
			
			return $response;
	 }


 //  add Testimonial 
 
 	public function addTestimonial($addTestimonialData)
	 {
				
				$title = $addTestimonialData->title;
				$description = $addTestimonialData->description;
				$upload = $addTestimonialData->upload;
				$tmp_name = $addTestimonialData->tmp_name;
				$temp = explode(".", $upload);
				$newfilename = $temp[0].round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($tmp_name, "../upload/" . $newfilename);
				$sort_order = $addTestimonialData->sort_order;
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
				if($addTestimonialData->state == 1 )
				{
				$res = mysql_query("INSERT INTO testimonial (title, description, upload,sort_order)VALUES('$title','$description','$newfilename','$sort_order')");
					if ($res) {
						mysql_query("COMMIT");
						$response = "Testimonial detail  successfully Added.";
					} else {        
						mysql_query("ROLLBACK");
						$response = "Testimonial detail failed.";
					}				
	
				}
				else
				{
					$response = "Required data fill.";
				}
			
			return $response;
	 }
 
 
 //  add moreInformation 
 
 	public function addMoreInformation($addMoreInformationData)
	 {
				
				$title = $addMoreInformationData->title;
				$link = $addMoreInformationData->link;
				$upload = $addMoreInformationData->upload;
				$tmp_name = $addMoreInformationData->tmp_name;
				$temp = explode(".", $upload);
				$newfilename = $temp[0].round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($tmp_name, "../upload/" . $newfilename);
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
				if($addMoreInformationData->state == 1 )
				{
				$res = mysql_query("INSERT INTO moreinformation (title,  upload,link)VALUES('$title','$newfilename','$link')");
					if ($res) {
						mysql_query("COMMIT");
						$response = "Moreinformation detail  successfully Added.";
					} else {        
						mysql_query("ROLLBACK");
						$response = "Moreinformation detail failed.";
					}				
	
				}
				else
				{
					$response = "Required data fill.";
				}
			
			return $response;
	 }
	 
	function updateContactus($contactData)
	{
			$title = $contactData->title;
			$description = $contactData->description;				
			$email = $contactData->email;
			$mobile = $contactData->mobile ;
			$twitter = $contactData->twitter;
			$facebook = $contactData->facebook;	
			$google = $contactData->google;
			$pin = $contactData->pin;
			$address = $contactData->address;				
			$contactId = $contactData->contactId;
			
			mysql_query("SET AUTOCOMMIT=0");
			mysql_query("START TRANSACTION");
			$res = mysql_query("UPDATE contactus SET title='$title', description='$description', email='$email',mobile='$mobile', twitter = '$twitter',facebook='$facebook',google='$google' , pin='$pin', address='$address'  WHERE contactId='$contactId'");
			if ($res) {
			mysql_query("COMMIT");
			$response = "Contact us  successfully updated.";
			} else {        
			mysql_query("ROLLBACK");
			$response = "Contact us  update failed.";
			}	
			
			return 	$response;		
	}
	 
 
	function updatemSliderHeading($sliderHeadData)
	{
			$title = $sliderHeadData->title;
			$mSliderHeadId = $sliderHeadData->mSliderHeadId;				
			
			mysql_query("SET AUTOCOMMIT=0");
			mysql_query("START TRANSACTION");
			
			$res = mysql_query("UPDATE msliderhead SET title='$title'  WHERE mSliderHeadId='$mSliderHeadId'");
			if ($res) {
			mysql_query("COMMIT");
			$response = "Heading   successfully updated.";
			} else {        
			mysql_query("ROLLBACK");
			$response = "Heading  update failed.";
			}	
			
			return 	$response;		
	}
	
// check exit data

	public function  checkExitData($exitData)
	{
		$tableName = $exitData->tableName;
		$value = $exitData->name;
		$query = mysql_query("SELECT * FROM  ".$tableName." where deleted = 0 and name ='$value' ");
		$row = mysql_num_rows($query);
		if(!$row >0)
		{
		$response = true;
		}
		else
		{
		$response = false;
		}
		return $response;
	}	
	
// add city 

 	public function insertField($insertData)
	 {
				
				$name = $insertData->name;
				$sort_order = $insertData->sort_order;
				$tableName = $insertData->tableName;
				$responseCheck = $this->checkExitData($insertData);
				if($responseCheck)
				{
					mysql_query("SET AUTOCOMMIT=0");
					mysql_query("START TRANSACTION");
					
					if($insertData->state == 1 )
					{
					$res = mysql_query("INSERT INTO ".$tableName." (name, sort_order)VALUES('$name','$sort_order')");
						if ($res) {
							mysql_query("COMMIT");
							$response = ucfirst($tableName)." Successfully Added.";
						} else {        
							mysql_query("ROLLBACK");
							$response = ucfirst($tableName)." Falied.";
						}				
		
					}
					else
					{
						$response = "Required data fill.";
					}
				}
				else
				{
					$response = ucfirst($tableName)." already  Exit.";
				}
			
			return $response;
	 }
	 
// update status	 
	function updateStatus($registrationId)
	{
		$query = mysql_query("SELECT * FROM user where deleted = 0 and registrationId ='$registrationId' ");
		$queryStudent = mysql_query("SELECT * FROM studentregistration where deleted = 0 and studentId ='$registrationId' ");
		$row = mysql_num_rows($query);
		if($row == 1)
		{
			$obj = mysql_fetch_array($query);
			if($obj['status'] == 0)
			{
				$status = 1;
			}
			else 
			{
				$status = 0;
			}
			
				mysql_query("UPDATE user SET status='$status'  WHERE registrationId='$registrationId'");
				mysql_query("UPDATE studentregistration SET status='$status'  WHERE studentId='$registrationId'");
			
		}
		else
		{
			$obj = mysql_fetch_array($queryStudent);
			$userName = $obj['studentName'].$registrationId;
			$registrationId = $registrationId;
			$userType = "student";
			$dob = $obj['dob'];
			$userPassword = md5($dob);
			$user = mysql_query("INSERT INTO user (userType, userName, 	password, registrationId)VALUES ('$userType','$userName','$userPassword','$registrationId')");
			mysql_query("UPDATE studentregistration SET status= 0  WHERE studentId='$registrationId'");
			
			    $to = $obj['email'];
				$subject = "Registration";
				$message = "User Name : $userName <br> Password : $dob  ";
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				mail($to,$subject,$message,$headers);	
				//echo $message;		
		}
		
		
	}
 
 
	function getCityNameBycityId($cityId)
	{
		$query = mysql_query("SELECT * FROM city where deleted = 0 and cityId ='$cityId' ");
		$obj = mysql_fetch_object($query);
		return $obj->name ;
		
	}
	 
	 
	function getSchoolNameByschoolId($schoolId)
	{
		$query = mysql_query("SELECT * FROM school where deleted = 0 and schoolId ='$schoolId' ");
		$obj = mysql_fetch_object($query);
		return $obj->name ;
		
	}
	
	
	
 //  add Testimonial 
 
 	public function addAbout($addAboutData)
	 {
				
				$name = $addAboutData->name;
				$description = $addAboutData->description;
				$phone = $addAboutData->phone;
				$uploads = $addAboutData->uploads;
				$tmp_name = $addAboutData->tmp_name;
				$temp = explode(".", $uploads);
				$newfilename = $temp[0].round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($tmp_name, "../upload/" . $newfilename);
				$sort_order = $addAboutData->sort_order;
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
				if($addAboutData->state == 1 )
				{
				$res = mysql_query("INSERT INTO about (name, phone, description, uploads, sort_order)VALUES('$name','$phone','$description','$newfilename','$sort_order')");
					if ($res) {
						mysql_query("COMMIT");
						$response = "About detail  successfully Added.";
					} else {        
						mysql_query("ROLLBACK");
						$response = "About detail failed.";
					}				
	
				}
				else
				{
					$response = "Required data fill.";
				}
			
			return $response;
	 }
 
	 public function changePassword($changePassData)
	 {
			$userId = $changePassData->userId;
			$password = $changePassData->password;
			mysql_query("SET AUTOCOMMIT=0");
			mysql_query("START TRANSACTION");
			$res = mysql_query("UPDATE user SET password='$password'  WHERE userId='$userId'");
			if ($res) {
			mysql_query("COMMIT");
			$response = "Password  successfully changed.";
			} else {        
			mysql_query("ROLLBACK");
			$response = "change password failed.";
			}	
			
			return $response;			
		 
	}
	
	public function updateAboutDesc($aboutData)
	{
			$aboutDes = $aboutData->aboutDes;
			$aboutdescId = $aboutData->aboutdescId;
			mysql_query("SET AUTOCOMMIT=0");
			mysql_query("START TRANSACTION");
			$res = mysql_query("UPDATE aboutdesc SET text='$aboutDes'  WHERE aboutdescId='$aboutdescId'");
			if ($res) {
			mysql_query("COMMIT");
			$response = "about  successfully updated.";
			} else {        
			mysql_query("ROLLBACK");
			$response = "About data failed.";
			}	
			
			return $response;			
		
		
	}
	
	
	public function addSession($sessionData){
			$sessionName = $sessionData->sessionName;
			mysql_query("SET AUTOCOMMIT=0");
			mysql_query("START TRANSACTION");
			$res = mysql_query("insert into  tb_session SET sessionName='$sessionName'");
			if ($res) {
			mysql_query("COMMIT");
			$response = "session  successfully created.";
			} else {        
			mysql_query("ROLLBACK");
			$response = "session data failed.";
			}
			return $response;
	}
	
	
 	public function addMedia($mediaData)
	 {
				
				$title = $mediaData->title;
				$sessionId = $mediaData->sessionId;
				$upload = $mediaData->upload;
				$tmp_name = $mediaData->tmp_name;
				$temp = explode(".", $upload);
				$newfilename = $temp[0].round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($tmp_name, "../upload/" . $newfilename);
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
				if($mediaData->state == 1 )
				{
				$res = mysql_query("INSERT INTO tb_media (title,  upload,sessionId)VALUES('$title','$newfilename','$sessionId')");
					if ($res) {
						mysql_query("COMMIT");
						$response = "Media detail  successfully Added.";
					} else {        
						mysql_query("ROLLBACK");
						$response = "Media detail failed.";
					}				
	
				}
				else
				{
					$response = "Required data fill.";
				}
			
			return $response;
	 }
	 
 	public function addGallerySession($gallerySessionData)
	{
				
				$title = $gallerySessionData->title;
				$sessionId = $gallerySessionData->sessionId;
				$upload = $gallerySessionData->upload;
				$tmp_name = $gallerySessionData->tmp_name;
				$temp = explode(".", $upload);
				$newfilename = $temp[0].round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($tmp_name, "../upload/" . $newfilename);
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
				if($gallerySessionData->state == 1 )
				{
				$res = mysql_query("INSERT INTO tb_gallerysession (title,  upload,sessionId)VALUES('$title','$newfilename','$sessionId')");
					if ($res) {
						mysql_query("COMMIT");
						$response = "Gallery Session detail  successfully Added.";
					} else {        
						mysql_query("ROLLBACK");
						$response = "Gallery Session  detail failed.";
					}				
	
				}
				else
				{
					$response = "Required data fill.";
				}
			
			return $response;
	 }
	 
	 
 	public function addGallery($galleryData)
	{
				
				$title = $galleryData->title;
				$gallerysessionId = $galleryData->gallerysessionId;
				$upload = $galleryData->upload;
				$tmp_name = $galleryData->tmp_name;
				$temp = explode(".", $upload);
				$newfilename = $temp[0].round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($tmp_name, "../upload/" . $newfilename);
				
				mysql_query("SET AUTOCOMMIT=0");
				mysql_query("START TRANSACTION");
				
				if($galleryData->state == 1 )
				{
				$res = mysql_query("INSERT INTO tb_gallery (title,  upload,gallerysessionId)VALUES('$title','$newfilename','$gallerysessionId')");
					if ($res) {
						mysql_query("COMMIT");
						$response = "Gallery successfully Added.";
					} else {        
						mysql_query("ROLLBACK");
						$response = "Gallery detail failed.";
					}				
	
				}
				else
				{
					$response = "Required data fill.";
				}
			
			return $response;
	 }
	 
	 
}


?>
