<?php include("../common/header.php");?>
<?php
$innerTitle = "";
$innerDescription = "";
if(isset($_REQUEST['aboutId']))
{
	$innerHtml = $htmlFactory->getPagesDataById("aboutpof","aboutId",$_REQUEST['aboutId']);
	//var_dump($innerHtml);
	$innerTitle = $innerHtml->title;
	$innerDescription = $innerHtml->description;
}

?>


	 <div class="main-page">
	  <div class="container-fluid">
	    <div class="row">
		  <div class="col-md-8 col-lg-8">
		   <div class="sky-line">
		    <div>&nbsp;</div>
		    <h1><?php echo $innerTitle;?></h1>
			<div>&nbsp;</div>
			<p><?php echo $innerDescription;?></p>
		   </div><!--end of sky-line-->
		  </div><!--end of col-lg-8 col-md-8-->
		  <div class="col-md-4 col-lg-4 container-fluid">
          <div>&nbsp;</div>
				<?php include("../common/menu.php");?>
	  <div>&nbsp;</div>
	  <div class="combined-image container-fluid center-block">
	   <div class="">
	     <marquee direction="up">
<?php echo $htmlFactory->moreInformationInnerPage();?>
		 </marquee>
		 </div><!--end of container-fluid-->
	  </div><!--end of combined-image-->
	  </div><!--end of col-lg-4 col-md-4-->
		</div><!--end of row-->
		<div>&nbsp;</div>
		</div><!--end of container-fluid-->
	  </div><!--end of main-page-->
  <?php include("../common/footer.php");?>
