<?php
class dataFactory
{
	function getDataFromServer($tableName)
	{
		$query = "select * from  ".$tableName." where deleted=0 and status=0 ORDER BY sort_order ASC ";
		$result = mysql_query($query);
		while($obj=mysql_fetch_object($result))
		{
		$allData[] = $obj;
		}
		return $allData;
	}
	
	function getDataFromServerBytableName($tableName)
	{
		$query = "select * from  ".$tableName." where deleted=0";
		$result = mysql_query($query);
		while($obj=mysql_fetch_object($result))
		{
		$allData[] = $obj;
		}
		return $allData;
	}
	
	function getPageDataByCategoryId($category_id)
	{
		$allData = "";
		$query = "select * from  pages where categoryId ='$category_id' and status = 0 and deleted=0  ORDER BY sort_order ASC ";
		$result = mysql_query($query);
		while($obj=mysql_fetch_object($result))
		{
		$allData[] = $obj;
		}
		return $allData;
	}
	
	public function selectAll($tableName)
	 {
	  $allData = "";
	  $res = mysql_query("SELECT * FROM ".$tableName." where deleted = 0 and status= 0 ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	 }
	 
	public function selectAllDesc($tableName,$descField)
	 {
	  $allData = "";
	  $res = mysql_query("SELECT * FROM ".$tableName." where deleted = 0 ORDER BY ".$descField." DESC ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	 }
	 
	 
	 public function updateVisitors()
	 {
		$visitData = $this->selectAll('visitors'); 
	//	var_dump($visitData);
		foreach($visitData as $visit);
		$visitor_id = $visit->visitor_id; 
		$visits = $visit->visits+1;
		mysql_query("UPDATE visitors SET visits = ".$visits." where visitor_id =1 ");
		
	 }
	
// get page by page id

	function getPageDetailByPageId($pageId)
	{
	  $res=mysql_query("SELECT * FROM pages  where pageId = ".$pageId." and deleted = 0 and status= 0 ");
	  $obj=mysql_fetch_object($res);
	  return $obj;
	}	 
	 
	function getContactData()
	{
	  $res = mysql_query("SELECT * FROM contactus where  deleted = 0 ");
	  $obj = mysql_fetch_object($res);
	  return $obj;
	}
	
	function getMenuData()
	{
	  $allData = "";
	  $res=mysql_query("SELECT * FROM category where deleted = 0 and status= 0 and featured=1 ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	}	 
	 

	
	function getChildCategoryByCategoryId($parentid)
	{
	  $allData = "";
	  $res=mysql_query("SELECT * FROM category where deleted = 0 and status= 0 and parentid='$parentid'   ORDER BY sort_order ASC  ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	 
	  return $allData;
	}	 
	 
	function getDataByParentId($parentid)
	{
	  $allData = "";
	  $res=mysql_query("SELECT * FROM notescategory where deleted = 0 and status= 0 and parentId='$parentid'   ORDER BY sort_order ASC  ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	 
	  return $allData;
	}	 
	 
	function getCategoryDataById($category_id)
	{
	  $allData = "";
	  $res=mysql_query("SELECT * FROM category where deleted = 0 and status= 0 and category_id='$category_id'   ORDER BY sort_order ASC  ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	 
	  return $allData;
	}	 
	 
	
	function getOlympaidInformation()
	{
	  $allData = "";
	  $res=mysql_query("SELECT * FROM olympaidinformation where deleted = 0   ORDER BY sort_order ASC ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	}
	
	
	
	function getTestimonialData()
	{
	  $allData = "";
	  $res=mysql_query("SELECT * FROM testimonial where deleted = 0  ORDER BY sort_order ASC ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	} 
	 
	function getStudentInfoById($studentId)
	{
	  $res=mysql_query("SELECT * FROM studentregistration where deleted = 0 and studentId='".$studentId."' ");
	  $obj=mysql_fetch_object($res);
	  return $obj;
	} 
	 
	function mSliderHeading()
	{
	  $res=mysql_query("SELECT * FROM msliderhead where deleted = 0 ");
	  $obj=mysql_fetch_object($res);
	  return $obj->title;
	} 
	 
	function getPagesDataById($table,$fieldName,$fieldValue)
	{
	  $res=mysql_query("SELECT * FROM ".$table." where ".$fieldName."=".$fieldValue." and deleted = 0 ");
	  $obj=mysql_fetch_object($res);
	  return $obj;
	} 
	 
	function getSubjectById($subject)
	{
		$allData ="";
		$sql = "SELECT * FROM  notescategory where deleted = 0 and  status= 0 and notesCategoryId in(".$subject.") ";
		$result = mysql_query($sql);
	  while($obj=mysql_fetch_object($result))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	}
	 
	function getPagesById($notesId)
	{
		$allData ="";
		$sql = "SELECT * FROM  notesdetail where deleted = 0 and  status= 0 and notesId= $notesId ";
		$result = mysql_query($sql);
	  while($obj=mysql_fetch_object($result))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	}
//

	 
	function getPofDesc()
	{
		$allData ="";
		$sql = "SELECT * FROM aboutdesc where deleted = 0 and  status= 0 ";
		$result = mysql_query($sql);
	  while($obj=mysql_fetch_object($result))
	  {
	  	$allData = $obj->text;
	  }
	  return $allData;
	}
	
	
	
	public function getGallerySession(){
			$allData ="";
			$sql = "SELECT tb_session.sessionName, tb_gallerysession.*  FROM tb_session,tb_gallerysession where tb_gallerysession.deleted = 0 and  tb_session.deleted= 0 and tb_session.sessionId =tb_gallerysession.sessionId   ORDER BY tb_gallerysession.gallerysessionId DESC ";
			$result = mysql_query($sql);
		  while($obj=mysql_fetch_object($result))
		  {
			$allData[] = $obj;
		  }
		  return $allData;
	}
	
	public function getGallery(){
			$allData ="";
			$sql = "SELECT tb_session.sessionName,tb_gallery.*, tb_gallerysession.title as typeTitle  FROM tb_session,tb_gallerysession,tb_gallery where tb_gallerysession.deleted = 0 and tb_gallery.deleted=0 and tb_session.deleted= 0 and tb_session.sessionId =tb_gallerysession.sessionId and tb_gallerysession.gallerysessionId=tb_gallery.gallerysessionId   ORDER BY tb_gallery.galleryId DESC ";
			$result = mysql_query($sql);
		  while($obj=mysql_fetch_object($result))
		  {
			$allData[] = $obj;
		  }
		  return $allData;
	}
	
	
} 
?>