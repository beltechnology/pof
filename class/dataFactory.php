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
		$query = "select * from  pages where categoryId ='$category_id' and status = 0 and deleted=0";
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
	  $res=mysql_query("SELECT * FROM ".$tableName." where deleted = 0 and status= 0 ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
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
	  $res=mysql_query("SELECT * FROM category where deleted = 0 and status= 0 ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	}	 
	 

	
	function getOlympaidInformation()
	{
	  $allData = "";
	  $res=mysql_query("SELECT * FROM olympaidinformation where deleted = 0 ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	}
	
	
	
	function getTestimonialData()
	{
	  $allData = "";
	  $res=mysql_query("SELECT * FROM testimonial where deleted = 0 ");
	  while($obj=mysql_fetch_object($res))
	  {
	  	$allData[] = $obj;
	  }
	  return $allData;
	} 
	 

	
} 
?>