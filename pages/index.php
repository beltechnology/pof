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
		$menuClass = "about";

	}
	elseif($_REQUEST['aboutId'] == 3)
	{
		$menuClass = "whatwedo";

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
	$innerHtml = $htmlFactory->getCategoryDataById($_REQUEST['categoryId']);
	if(count($innerHtml)>0)
	foreach($innerHtml as $innerHtmls)
	$innerDescription = $htmlFactory->createPagesInnnerPages($_REQUEST['categoryId']);
	$innerTitle = $innerHtmls->title;
//	var_dump($innerTitle);
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
                            <h1 class="title"><?php echo $innerTitle;?></h1>
                            
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
<?php echo $innerDescription;?>
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
	<?php
if($aboutPage)
{?>
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
<?php
}
?>	
    <!--/#blog-->

  <?php include("../common/footer.php");?>