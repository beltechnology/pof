<?php
include("class/paginationHtml.php");
$pageinationHtml = new paginationHtml();
$pagenationInfo = new stdClass();
	if(isset($_REQUEST['notesCategoryId']))
	{
		$page = 1;
		if(!empty($_GET["page"])) {
		$page = $_GET["page"];
		}

		$pagenationInfo->notesCategoryId = $_REQUEST['notesCategoryId'];
		$pagenationInfo->page = $page;
		$selectCategoryData = $pageinationHtml->getDataForNotes($pagenationInfo);
		$pages = $pageinationHtml->numRows($pagenationInfo);
		$output = '<input type="hidden" class="pagenum" value="' . $page . '" /><input type="hidden" class="total-page" value="' . $pages . '" />';

		foreach($selectCategoryData as $category)
				{
				$string = strip_tags($category->notesDescription);
				$stringCut = "";
					if (strlen($string) > 200) {
					
					$stringCut = substr($string, 0, 200);
					$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
					}
				?>
				
				<div class="col-sm-4" >
				<div class="card card-block studentCard">
				<h3 class="card-title"><?php  echo $category->notesTitle ;?></h3>
				<p class="card-text"><?php   echo $string ;?></p>
				<?php
					if($stringCut)
					{?>
					<a href="<?php  echo BaseUrl."admin/readmore.php?notesCategoryId=".$category->notesCategoryId."&notesId=".$category->notesId;?>" class="btn btn-primary">Read More..</a>
					<?php } ?>
					<a download href="<?php  echo BaseUrl."admin/upload/".$category->uploads;?>" class="btn btn-primary pull-right">Download</a>
					</div>
					</div>
					<?php 
					
				}
				echo $output;

		//var_dump($response);
		
		
		
	}
?>