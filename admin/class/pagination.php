<?php
class pagination
{
var $tbl_name ;
	

	function paginations($tbl_name,$targetpage)
	{
	$query = "SELECT * FROM $tbl_name where deleted = 0 ";
	$total_pages = mysql_num_rows(mysql_query($query));
	$adjacents = 3;
	$limit = 20;
	if(isset($_GET['page'])) 
	{								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit;
	}//first item to display on this page
	else{
		$page = 0;
		$start = 0;
	}//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM $tbl_name  where deleted = 0 LIMIT $start, $limit";
	$result = mysql_query($sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"row\">
							<div class=\"col-sm-5\">
							</div>
							<div class=\"col-sm-7\"><div class=\"dataTables_paginate paging_simple_numbers\" id=\"category_paginate\">
								<ul class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<li class=\"paginate_button previous\"><a href=\"$targetpage?page=$prev\">Previous</a></li>";
		else
			$pagination.= "<li class=\"paginate_button previous disabled\"><span class=\"disabled\"> Previous</span></li>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<li class=\"paginate_button active\"><span class=\"current\">$counter</span></li>";
				else
					$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=$counter\">$counter</a></li>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li class=\"paginate_button active\"><span class=\"current\">$counter</span></li>";
					else
						$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=$counter\">$counter</a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
				$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=1\">1</a></li>";
				$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=2\">2</a></li>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li class=\"paginate_button active\"><span class=\"current\">$counter</span></li>";
					else
						$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=$counter\">$counter</a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
				$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=1\">1</a></li>";
				$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=2\">2</a></li>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li class=\"paginate_button active\"><span class=\"current\">$counter</span></li>";
					else
						$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=$counter\">$counter</a></li>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<li class=\"paginate_button \"><a href=\"$targetpage?page=$next\">Next </a></li>";
		else
			$pagination.= "<li class=\"paginate_button disabled\"><span class=\"disabled\">Next </span></li>";
		$pagination.= "</ul></div></div>\n";		
	}
	return $pagination;
	}


	
	public function selectAll($tbl_name)
	 {
		$limit = 20; 	//how many items to show per page
		if(isset($_GET['page'])) 
		{								//how many items to show per page
		$page = $_GET['page'];
		if($page) 
			$start = ($page - 1) * $limit;
		}//first item to display on this page
		else{
			$page = 0;
			$start = 0;
		}//if no page var is given, set start to 0
		/* Get data. */
		$allData ="";
		$sql = "SELECT * FROM $tbl_name  where deleted = 0 LIMIT $start, $limit";
		$result = mysql_query($sql);
	  while($obj=mysql_fetch_object($result))
	  {
	  	$allData[] = $obj;
	  }
	  
	  return $allData;
	 }
	 
	 
	 
	public function selectAllDataByNotes($pagenationInfo)
	 {
		$notesCategoryId = $pagenationInfo->notesCategoryId;
		$page = $pagenationInfo->page;
		
		$limit = 20; 
		$start = ($page - 1) * $limit;
		$allData ="";
		$sql = "SELECT * FROM notesdetail  where notesCategoryId =$notesCategoryId and deleted = 0 LIMIT $start, $limit ";
		$result = mysql_query($sql);
		  while($obj=mysql_fetch_object($result))
		  {
			$allData[] = $obj;
		  }
			  return $allData;
	 }
	 
	function numRows($pagenationInfo) {
		$notesCategoryId = $pagenationInfo->notesCategoryId;
		$page = $pagenationInfo->page;
		$sql = "SELECT * FROM notesdetail  where notesCategoryId =$notesCategoryId and deleted = 0 ";
		$result = mysql_query($sql);
		$rowcount = mysql_num_rows($result);
		$limit = 20; 
		$rowcount  = ceil($rowcount/$limit);
		return $rowcount;	
	}
	 
	 
	function showNotesByClass($notesData)
	{
			$class = $notesData->studentClass;
			$subject = $notesData->subject;
		$limit = 20; 	//how many items to show per page
		if(isset($_GET['page'])) 
		{								//how many items to show per page
		$page = $_GET['page'];
		if($page) 
			$start = ($page - 1) * $limit;
		}//first item to display on this page
		else{
			$page = 0;
			$start = 0;
		}//if no page var is given, set start to 0
		/* Get data. */
		$allData ="";
		$sql = "SELECT * FROM  notesdetail where deleted = 0 and studentClass='".$class."' and status= 0 and notesCategoryId in(".$subject.")   LIMIT $start, $limit";
		$result = mysql_query($sql);
	  while($obj=mysql_fetch_object($result))
	  {
	  	$allData[] = $obj;
	  }
	  	

	  return $allData;
	 }
	 

}
?>

