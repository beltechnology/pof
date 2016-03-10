<?php include("common/header.php");?>
	 <div class="main-page">
	  <div class="container-fluid">
	    <div class="row">
		  <div class="col-md-8 col-lg-8">
		    <div class="about-us container-fluid">
			 <h1>Shortly About Us</h1>
			 <div>&nbsp;</div>
			 <?php echo $htmlFactory->getPofDesc(); ?>
			 <div>&nbsp;</div>
			 <h2>Our Team Focused On You</h2>
			 <div>&nbsp;</div><div>&nbsp;</div>
			  <div class="row">
              <?php
			  echo $htmlFactory->createAboutHtml();
			  ?>
                 </div><!--end of row-->
				<div class="row">
					   <div class="col-md-5">&nbsp;</div>
					   <div class="col-md-2"><a class="btn btn-warning" href="<?php echo BaseUrl;?>contact-us.php"><b>Contact Us</b></a></div>
					   <div class="col-md-5">&nbsp;</div>
				  </div>
			 
			</div><!--end of about-us-->
		  </div><!--end of col-lg-8 col-md-8-->
		  <div class="col-md-4 col-lg-4 container-fluid">
          <div>&nbsp;</div>
				<?php include("common/menu.php");?>
	  <div>&nbsp;</div>
	  <div class="combined-image container-fluid center-block">
	   <div class="">
	     <marquee direction="up"  onMouseOver="stop()" onMouseOut="start();">
<?php echo $htmlFactory->moreInformationInnerPage();?>
		 </marquee>
		 </div><!--end of container-fluid-->
	  </div><!--end of combined-image-->
	  </div><!--end of col-lg-4 col-md-4-->
		</div><!--end of row-->
		<div>&nbsp;</div>
		</div><!--end of container-fluid-->
	  </div><!--end of main-page-->
  <?php include("common/footer.php");?>
