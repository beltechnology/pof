<?php include("common/header.php");?>
 <!--/#home-slider-->
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Significant Improvement In Learning Performance</h1>
                        <p>POF is promises to give you a good future. To see our world upclose provide your credentials and start your journey with us. </p>
                        
                        <form class="form" action="<?php echo BaseUrl;?>admin/index.php" method="post">
					   <div class="row">
					      
					      <div class="col-md-6 col-lg-6"><input class="group-form" type="text" class="form-control" placeholder="Username" required id="userName" name="userName"></div>
						  <div class="col-md-6 col-lg-6 " id="passwordDiv">
                <div class="group-form date" >
                    <input  type="password"  placeholder="Password" required name="password" id="password" readonly  class="span2"><span class="add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>                        </div>
                          </div>
                          <div align="center" style="color:red;"><?php if(isset($_GET['msg'])){echo $_GET['msg'];}?></div>
                          <input name="loginType" type="hidden" class="input username" value="student"  />
                           <button type="submit"  class="btn btn-common" name="login">LOGIN</button>  
                          </form>
                                         </div>
                    <img src="<?php echo BaseUrl;?>images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="<?php echo BaseUrl;?>images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="<?php echo BaseUrl;?>images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="<?php echo BaseUrl;?>images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="<?php echo BaseUrl;?>images/home/slider/birds2.png" class="slider-birds2" alt="slider image">                </div>
          </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
</section>
    <!--/#home-slider-->
    <?php include("common/services.php");?>
     <!--/#services-->
     <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Subscribe Our Newsletter</h1>
                            
                          <form action="" method="post">
                          <div class="input-group">
                             <input class="btn btn-lg" id="sEmail" name="sEmail" type="email" placeholder="Your Email" required>
                             <input type="hidden" name="emailSubscribe"/>
                             <button class="btn btn-info btn-lg" type="submit" name="emailSubscribe">Submit</button>
							 <?php
							 if(isset($response))
							 {?>
							 <p><?php echo $response; ?></p>
							 <?php
							 }
							 elseif(isset($msg))
							 {?>
							 <p><?php echo $msg; ?></p>
							 <?php
							 }
							 ?>
                          </div>
                         </form>
                          <!--  <p>A responsive, retina-ready &amp; wide multipurpose template.</p>-->
                        </div>
          
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <!--<a href="#" class="btn btn-common">TAKE THE TOUR</a>-->
                             </div>
                        </div>
                  </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->
   <section id="features">
        <div class="container">
            <div class="row col-sm-9 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms ">
             <?php  echo  $htmlFactory->createOlympaidInformation();?>
        	</div>
           <div class="Index col-sm-3 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
          <?php include("common/menu.php");?>
         </div>
        </div>
    </section>
     <!--/#features-->
      <section id="action" class="responsive Tabs_Bg">
     
     <div class="container">
                <div class="row">
                <h1 class="Icon_Category">Categories</h1>
                    <div class="Category_Tabs ">
                    <ul class="marqueeUl">
                    	 <?php  echo  $htmlFactory->getHomeMenu();?>
					</ul>
                        <!-- <marquee direction="right" scrolldelay="5">
                        <ul class="marqueeUl">
                        <li class=" wow fadeInLeft Cat_Tab" data-wow-duration="500ms" data-wow-delay="300ms">
                        <a href="#" class="btn btn-common">PLANET</a>
                        </li>
                        
                        <li class=" wow fadeInLeft Cat_Tab" data-wow-duration="500ms" data-wow-delay="300ms">
                        <a href="#" class="btn btn-common">PMO-SY..</a>
                        </li>
                        
                        <li class=" wow fadeInLeft Cat_Tab" data-wow-duration="500ms" data-wow-delay="300ms">
                        <a href="#" class="btn btn-common">PMO-EX..</a>
                        </li>
                        
                        <li class=" wow fadeInLeft Cat_Tab" data-wow-duration="500ms" data-wow-delay="300ms">
                        <a href="#" class="btn btn-common">PMO-PR</a>
                       </li>
                        </ul>-->
                       <!-- </marquee>-->
                    </div>
                </div>
     </div>
                        
     </section>
     <!--/#IMO Tabs-->
      <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p  style="text-align:center;" ><img src="images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title"> Recent Activities</h1>
                        
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <?php echo $htmlFactory->moreInformation();?>
                        <!--<div class="col-xs-4 col-sm-3">
                            <a href="#"><img src="images/home/client1.png" class="img-responsive person" alt=""></a>
                            
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <a href="#"><img src="images/home/client2.png" class="img-responsive person" alt=""></a>
                           
                        </div>
                         <div class="col-xs-4 col-sm-3">
                            <a href="#"><img src="images/home/client3.png" class="img-responsive person" alt=""></a>
                            
                        </div>
                         <div class="col-xs-4 col-sm-3">
                            <a href="#"><img src="images/home/client4.png" class="img-responsive person" alt=""></a>
                            
                        </div>-->
                     
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->
<?php include("common/footer.php");?>
<link rel="stylesheet" href="<?php echo BaseUrl;?>css/jquery.fancybox.css?v=2.1.5" media="all" type="text/css">
<link rel="stylesheet" href="<?php echo BaseUrl;?>css/jquery.simplyscroll.css" media="all" type="text/css">
<script type='text/javascript' src='<?php echo BaseUrl;?>js/jquery.simplyscroll.js'></script>
	<script type="text/javascript" src="<?php echo BaseUrl;?>js/jquery.fancybox.js?v=2.1.5"></script>

<script>
$(document).ready(function() {
	$('.fancybox').fancybox();
});

(function($) {
	$(function() {
		$(".marqueeUl").simplyScroll();
	});
	
	$(function() {
		$(".clients-logo").simplyScroll();
	});
	
})(jQuery);
</script>

<style>
	#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
		background-image: url('images/fancybox_sprite@2x.png');
		background-size: 44px 152px; /*The size of the normal image, half the size of the hi-res image*/
	}
.fancybox-lock .fancybox-overlay {
    background-color: rgba(204, 204, 204, 0.79);
}
 .simply-scroll
{
	height:229px !important;
}
.simply-scroll .simply-scroll-clip
{
	height:229px !important;
}
.marqueeUl {
	margin-top:1.5% !important;
}
</style>