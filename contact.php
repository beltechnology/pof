<?php include("../common/header.php");?>
<?php
$innerTitle = "";
$innerDescription = "";
$aboutPage = false;
if(isset($_REQUEST['aboutId']))
{
	$innerHtml = $htmlFactory->getPagesDataById("aboutpof","aboutId",$_REQUEST['aboutId']);
	//var_dump($innerHtml);
	$innerTitle = $innerHtml->title;
	$innerDescription = $innerHtml->description;
	if($_REQUEST['aboutId'] == 2)
	{
		$aboutPage = true;
		
	}
}
elseif(isset($_REQUEST['pageId']))
{
	$innerHtml = $htmlFactory->getPagesDataById("pages","pageId",$_REQUEST['pageId']);
	//var_dump($innerHtml);
	$innerTitle = $innerHtml->pageTitle;
	$innerDescription = $innerHtml->pageDescription;
}
elseif(isset($_REQUEST['olympaidInformationId']))
{
	$innerHtml = $htmlFactory->getPagesDataById("olympaidinformation","olympaidInformationId",$_REQUEST['olympaidInformationId']);
	//var_dump($innerHtml);
	$innerTitle = $innerHtml->title;
	$innerDescription = $innerHtml->description;
}
elseif(isset($_REQUEST['categoryId']))
{
	$innerTitle = "";
	$innerDescription = $htmlFactory->createPagesInnnerPages($_REQUEST['categoryId']);
	//var_dump($innerDescription);
}
/*
?>
    <section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Meet the Team</h1>
                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#team-carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
					
                        <div class="item active">

						<?php  echo $htmlFactory->createAboutHtml(); ?>

							
                        </div>
                       
                    </div>

                    <!-- Controls -->
                    <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a>
                    <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a>
                </div>
            </div>
        </div>
    </section>

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
  <?php include("../common/footer.php");?>
<script>
$(document).ready(function(e) {
    $(document).scrollTop($(document).height()/3);
});
</script>


    <!--/#header-->
*/?>
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Get In Touch</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <div class="row">


                        <div class="col-sm-12 col-md-12">
						
                        <p>To get more information and contact our representatives , use the following contact details.We are waiting to hear for you.</p>
                    <div class="col-sm-6 wow fadeInLeft contact" data-wow-duration="500ms" data-wow-delay="300ms">
                       <h2>Contact Information</h2>
                       <p><i class="fa fa-envelope-o" aria-hidden="true" style="color:#5BC0DE;padding-right: 5px;margin-left: 3px;"></i><b>E-mail:</b> info@pofindia.com </p>
                       <p><i class="fa fa-phone" aria-hidden="true" style="color:#5BC0DE;padding-right: 5px;margin-left: 3px;"></i><b>Phone No.:</b>8192900900 , 7792834040 </p>
                       <h2>Address</h2>
                       
                       <address>
                      <b>Branch Office : </b><br>POF 164, Muktanand Nagar, Gopalpura Bypass, Tonk Road, Jaipur-302018 <br><br> <b>Corporate Office : </b><br>POF (S.B.Traders), D-42, Ist Floor, Kiran Gardan, Uttam Nagar, New Delhi-110059                        </address>
                     
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28459.42278491603!2d75.79047402408689!3d26.921647634723403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db15569897029%3A0x57d3f3a2975b89f0!2sJaipur%2C+Rajasthan+302001!5e0!3m2!1sen!2sin!4v1460624297001" width="360" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>   
                    </div>
                    
                        </div>
                    </div>
 					
                   </div> 
                    <div class="Index col-md-4 col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="sidebar blog-sidebar">
                    

<?php include("../common/menu.php");?>
</div>
                     <div class="sidebar blog-sidebar" style="margin:0px;">                       
                        <div class="sidebar-item popular">
                            <h3>Latest Photos</h3>
                            <ul class="gallery">
							<?php echo $htmlFactory->moreInformationInnerPage();?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
    </section>
		
    <!--/#blog-->

  <?php include("../common/footer.php");?>