<?php include("common/header.php");?>
  <div class="container-fluid">
    <div class="main-content">
      <div class="row container-fluid">
        <div class="col-lg-12 col-md-12 schedule">
          <h1 class="first-h text-center"><?php echo  $htmlFactory->mSliderHeading();?></h1>
        </div>
        <!--end of schedule--> 
        <!--		   <div class="col-lg-3 col-md-3 col-lg-offset-1 col-md-offset-1">
		        <form class="navbar-form" role="search">
        <div class="form-group">
          <div class="form-group has-default has-feedback">
          <input type="text" class="form-control btn-block search-icon" id="inputSuccess2" aria-describedby="inputSuccess2Status" placeholder="Search For ......" />
		  <span class="glyphicon glyphicon-search form-control-feedback search-icon" aria-hidden="true"></span>
          <span id="inputSuccess2Status" class="sr-only">(success)</span>
              </div>
             </div>
             </form>--> 
      </div>
    </div>
  </div>
  <div>&nbsp;</div>
  <div class="main-page">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-8 col-lg-8">
          <div id="carousel-example-generic1" class="carousel slide align" data-ride="carousel"> 
            <!-- Indicators -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox"> <?php echo  $htmlFactory->getIndexCarousel();?> </div>
            
            <!-- Controls --> 
            <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
          <!--end of id="carousel-example-generic" class="carousel slide" data-ride="carousel"-->
		   <!-- Controls -->
          <div>&nbsp;</div>
          <div>&nbsp;</div>
          <div class="row homeMenu">
            <?php  echo  $htmlFactory->getHomeMenu();?>
          </div>
          <!--end of row-->
          <div>&nbsp;</div>
          <div>&nbsp;</div>
          <div class="row container-fluid">
            <div class="schedule-2 col-lg-12 col-md-12">
              <h1 class="second-h text-center">Olympiad Information</h1>
            </div>
          </div>
          <div class="row container-fluid">
            <?php  echo  $htmlFactory->createOlympaidInformation();?>
          </div>
          <!--end of row--> 
        </div>
        <!--end of col-lg-8 col-md-8-->
        <div class="col-md-4 col-lg-4 container-fluid">
          <?php include("common/menu.php");?>
        </div>
        <!--end of right-side--> 
      </div>
      <!--end of col-lg-4 col-md-4--> 
	
    <!--end of row-->
    <div>&nbsp;</div>
    <div class="row container-fluid">
      <div class="col-lg-12 col-md-12 schedule">
        <div class="">
          <h1 class="second-h text-center">More Information</h1>
        </div>
       </div>
      </div><!-- end of row--> 
    </div>
    <!--end of container-fluid--> 
  </div>
  <!--end of main-page-->
  <div>&nbsp;</div>
  <div class="combined-image">
    <div class="container-fluid">
     <marquee onMouseOver="stop()" onMouseOut="start();">
	  <ul>
        <?php echo $htmlFactory->moreInformation();?>
	  </ul>
     </marquee>
   </div>
    <!--end of container-fluid--> 
  </div>
  <!--end of combined-image-->
  <div>&nbsp;</div>
  <div class="container-fluid">
    <div class="testimonials">
      <div class="row container-fluid">
        <div class="col-lg-12 col-md-12 schedule-2">
          <div class="">
            <h1 class="text-center">Testimonials</h1>
          </div>
        </div>
      </div>
      <!-- end of row--> 
    </div>
    <!--end of container-fluid--> 
  </div>
  <!--end of testimonials-->
  <div>&nbsp;</div>
  <div class="staff">
  <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
      <div id="myCarousel" class="container-fluid carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
    <!-- Wrapper for slides -->
    <div class="row carousel-inner">
	<?php echo $htmlFactory->createTestimonialHtml();?>

    <!-- Left and right controls -->
	<div class='controls'>
    <nav>
      <ul class="pager">
        <li> <a class="left" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a></li>
        <li><a class="right" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a></li>
      </ul>
    </nav>	</div>
  </div>
</div>
</div><!--end of col-lg-12 col-md-12-->
</div><!--end of row-->
</div>

  <!--end of container-fluid--> 
</div>
<!--end of staff-->
<div>&nbsp;</div>
<?php include("common/footer.php");?>
