<?php
		if(!empty($_GET["page"])) {
		include("common/conn.php");
		include("class/pagination.php");
		include("../class/constant.php");
		
		}

class paginationHtml extends pagination
{
	function getDataForNotes ($pagenationInfo)
	{
		$pageData = $this->selectAllDataByNotes($pagenationInfo);
		return $pageData;
	}
	
	
	
	
	
	
}

?>