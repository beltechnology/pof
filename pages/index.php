<?php include("../common/header.php");?>
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
      
		   <div class="col-lg-12 col-md-12 schedule">
		   <h1 class="first-h text-center">Olympaid Schedule:<span class="second-h"> Academic Year 2015-16</span></h1>
		   </div><!--end of schedule-->
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
          <div id="carousel-example-generic" class="carousel slide align" data-ride="carousel"> 
            <!-- Indicators -->
            <ol class="carousel-indicators">
				<?php echo $htmlFactory->getIndicators(5,8)?> 
           </ol>
            
            <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
<?php echo  $htmlFactory->getIndexCarousel();?>
  </div>
            
            <!-- Controls --> 
            <a class="" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon  carousel-sign" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon  carousel-sign" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
          <!--end of id="carousel-example-generic" class="carousel slide" data-ride="carousel"-->
          <div>&nbsp;</div>
          <div>&nbsp;</div>
          <div class="row white-p">
            <div class="col-lg-3 col-md-3 first-b col-md-offset-1 col-lg-offset-1">NCO </div>
            <div class="col-lg-3 col-md-3 second-b col-md-offset-1 col-lg-offset-1">NSO </div>
            <div class="col-lg-3 col-md-3 third-b col-md-offset-1 col-lg-offset-1">IMO </div>
          </div>
          <!--end of row-->
          <div class="row white-p">
            <div>&nbsp;</div>
            <div class="col-lg-3 col-md-3 fourth-b col-md-offset-1 col-lg-offset-1">IEO </div>
            <div class="col-lg-3 col-md-3 fifth-b col-md-offset-1 col-lg-offset-1">Ask Expert </div>
            <div class="col-lg-3 col-md-3 sixth-b col-md-offset-1 col-lg-offset-1">FAQ </div>
          </div>
          <!--end of row-->
          <div>&nbsp;</div>
          <div>&nbsp;</div>
          <div class="row">
            <div class="schedule-2 col-lg-12 col-md-12">
              <h1 class="second-h text-center">Olympaid Information</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <h2 class="text-center blue" style="margin-left:-10%;">Olympaid Awards</h2>
              <div>&nbsp;</div>
              <div class="row">
                <div class="stage col-lg-12 col-md-12">
                  <p class="first-line">Lorem Ispum Dummy
                  <p>
                  <p>1 July 2014</p>
                  <p><a href="#">Read Full Story &gt;&gt;</a></p>
                </div>
                <!--end of stage--> 
              </div>
              <!--end of row--> 
            </div>
            <div class="col-lg-6 col-md-6">
              <h2 class="text-center red"> &nbsp; &nbsp; Olympaid Preprations</h2>
              <div>&nbsp;</div>
              <div class="row">
                <div class="book col-lg-12 col-md-12">
                  <p>OLYMPAIDS PREPARATION MATERIAL</p>
                </div>
                <!--end of book--> 
              </div>
              <!--end of row--> 
            </div>
          </div>
          <!--end of row--> 
        </div>
        <!--end of col-lg-8 col-md-8-->
        <div class="col-md-4 col-lg-4 container-fluid">
        <?php include("../common/menu.php");?>
          </div>
          <!--end of right-side--> 
        </div>
        <!--end of col-lg-4 col-md-4--> 
      </div>
      <!--end of row-->
      <div>&nbsp;</div>
  </div>
  <div class="row">
  
  <p><?php echo $pageData->pageDescription;  ?></p>
  </div>
  <!--end of main-page-->
  <?php include("../common/footer.php");?>
