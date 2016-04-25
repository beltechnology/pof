<?php
include("class/paginationHtml.php");
$pageinationHtml = new paginationHtml();
$pagenationInfo = new stdClass();
	if(isset($_REQUEST['notesCategoryId']))
	{
	  $notesCategoryId = $_REQUEST['notesCategoryId'];
	}
	
	if($notesCategoryId)
	{
		$page = 1;
		if(!empty($_GET["page"])) {
		$page = $_GET["page"];
		}

		$pagenationInfo->notesCategoryId = $notesCategoryId;
		$pagenationInfo->page = $page;
		$pagenationInfo->studentClass = $studentInfo->studentClass;
		$selectCategoryData = $pageinationHtml->getDataForNotes($pagenationInfo);
		$pages = $pageinationHtml->numRows($pagenationInfo);
		$output = '<input type="hidden" class="pagenum" value="' . $page . '" /><input type="hidden" class="total-page" value="' . $pages . '" />';
		
		$cssArray = ["first-card","second-card","third-card","fourth-card","fifth-card","sixth-card"];
		$classArray = [" btn-primary"," btn-success"," btn-info"," btn-warning"," btn-primary"," btn-danger"];
		
		$count = 0;
		if($selectCategoryData !="")
		{
		foreach($selectCategoryData as $category)
				{
				$string = strip_tags($category->notesDescription);
				$stringCut = "";
					if (strlen($string) > 200) {
					
					$stringCut = substr($string, 0, 200);
					$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
					}
					if(isset($_REQUEST['notesId']) && $_REQUEST['notesId'] ==$category->notesId)
					{
					}
					else
					{
				?>
				
				<div class="col-sm-4" >
				<div class="card card-block studentCard <?php echo $cssArray[$count];?>">
				<h3 class="card-title title"><?php  echo $category->notesTitle ;?></h3>
				<p class="card-text title"><?php   echo $string ;?></p>
				<?php
					if($stringCut)
					{?>
					<a href="<?php  echo BaseUrl."admin/readmore.php?notesCategoryId=".$category->notesCategoryId."&notesId=".$category->notesId;?>" class="btn <?php echo $classArray[$count];?>">Read More..</a>
					<?php } 
					if($category->uploads !="")
					{
					?>
					<a download href="<?php  echo BaseUrl."upload/".$category->uploads;?>" class="btn <?php echo $classArray[$count];?> pull-right">Download</a>
                    <?php
					}
					?>
					</div>
					</div>
					<?php 
					if($count>5)
					{
					$count = 0;	
					}

					$count++;
					}
				}
		}
				echo $output;

		//var_dump($response);
		
		
		
	}
?>