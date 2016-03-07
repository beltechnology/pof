<?php include("common/header.php");?>
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
elseif(isset($_REQUEST['pageId']))
{
	$innerHtml = $htmlFactory->getPagesDataById("pages","pageId",$_REQUEST['pageId']);
	//var_dump($innerHtml);
	$innerTitle = $innerHtml->pageTitle;
	$innerDescription = $innerHtml->pageDescription;
}
elseif(isset($_REQUEST['categoryId']))
{
	$innerTitle = "";
	$innerDescription = $htmlFactory->createPagesInnnerPages($_REQUEST['categoryId']);
	//var_dump($innerDescription);
}
?>


	 <div class="main-page">
	  <div class="container-fluid">
	    <div class="row">
		  <div class="col-md-8 col-lg-8">
		    <div class="about-us container-fluid">
			 <h1>Shortly About Us</h1>
			 <div>&nbsp;</div>
			 <p class="first">For the academic year 2015-16. SOF will spend over Rs Ten Crores on awards, scholarships, gifts and facilities etc.For the academic year 2015-16. SOF will spend over Rs Ten Crores on awards, scholarships, gifts and facilities etc.For the academic year 2015-16. SOF will spend over Rs Ten Crores on awards, scholarships, gifts and facilities etc.For the academic year 2015-16. SOF will spend over Rs Ten Crores on awards, scholarships, gifts and facilities etc.
			 </p>
			 <p class="first">During the academic year 2014-15, over 31500 schools from more than 1400 cities registred and millions of students appeared for the four olympiad exams. These olympiad were conducted across 19 countries. During the academic year 2014-15, over 31500 schools from more than 1400 cities registred and millions of students appeared for the four olympiad exams. These olympiad were conducted across 19 countries.
			 </p>
			 <p class="first">
			  The following awards will be provided to the winners of olympiad being held during the academic year 2015-16.The following awards will be provided to the winners of olympiad being held during the academic year 2015-16.
			 </p>
			 <div>&nbsp;</div>
			 <h2>Our Team Focused On You</h2>
			 <div>&nbsp;</div><div>&nbsp;</div>
			  <div class="row">
              
              
			    <div class="col-lg-3 col-md-3">
				  <img class="center-block img-circle img-responsive" src="img/pencil.png">
				  <div>&nbsp;</div>
				  <p class="second">Lorem Ispum Dummy </p><p class="second">+91 123 456 7890</p> <p class="second">sed do eiusmod unde ommise uytio set yui prespective
				  </p>
				</div>
			    <div class="col-lg-3 col-md-3">
				  <img class="center-block img-circle img-responsive" src="img/pencil.png">
				  <div>&nbsp;</div>
				  <p class="second">Lorem Ispum Dummy </p><p class="second">+91 123 456 7890</p> <p class="second">sed do eiusmod unde ommise uytio set yui prespective
				  </p>
				</div>
			    <div class="col-lg-3 col-md-3">
				  <img class="center-block img-circle img-responsive" src="img/pencil.png">
				  <div>&nbsp;</div>
				  <p class="second">Lorem Ispum Dummy </p><p class="second">+91 123 456 7890</p> <p class="second">sed do eiusmod unde ommise uytio set yui prespective
				  </p>
				</div>

			    <div class="col-lg-3 col-md-3">
				  <img class="center-block img-circle img-responsive" src="img/pencil.png">
				  <div>&nbsp;</div>
				  <p class="second">Lorem Ispum Dummy </p><p class="second">+91 123 456 7890</p> <p class="second">sed do eiusmod unde ommise uytio set yui prespective
				  </p>
				</div>
				<div class="row">
					   <div class="col-md-5">&nbsp;</div>
					   <div class="col-md-2"><button class="btn btn-default" type="submit">Contact Us</button></div>
					   <div class="col-md-5">&nbsp;</div>
				  </div>
			  </div><!--end of row-->
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
