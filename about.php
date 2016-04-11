<?php include("common/header.php");
$menuType = "about";

?>

          <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">About Us</h1>
                            <p>Why our Clients love to work with us.</p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/aboutus/1.png" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 padding-top">
                <?php echo $htmlFactory->getPofDesc(); ?>
                </div>
            </div>
        </div>
    </section>

   
    <!--/#action-->

    <section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Meet the Team</h1>
                <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                Ut enim ad minim veniam, quis nostrud </p>
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
    <!--/#team-->


  <?php include("common/footer.php");?>
