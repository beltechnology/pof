<?php include("common/header.php");?>
 <!--/#home-slider-->
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Significant Improvement In Learning Performance</h1>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        
                        <form class="form" action="<?php echo BaseUrl;?>admin/index.php" method="post">
					   <div class="row">
					      
					      <div class="col-md-6 col-lg-6"><input class="group-form" type="text" class="form-control" placeholder="Username" required id="userName" name="userName"></div>
						  <div class="col-md-6 col-lg-6" id="dateTimePassword">
                          <input class="group-form" type="password" class="form-control" placeholder="Password" required name="password" id="password" readonly>
                          <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>                   
                         </span> 
                         
                          </div>
                          </div>
                          <div align="center" style="color:red;"><?php if(isset($_GET['msg'])){echo $_GET['msg'];}?></div>
                          <input name="loginType" type="hidden" class="input username" value="student"  />
                           <button type="submit"  class="btn btn-common" name="login">LOGIN</button>  
                          </form>
                          
                          
                                         </div>
                    <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">                </div>
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
                            
                             <form action="#">
              <div class="input-group">
                 <input class="btn btn-lg" name="email" id="email" type="email" placeholder="Your Email" required>
                 <button class="btn btn-info btn-lg" type="submit">Submit</button>
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
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image3.png" class="img-responsive single-img" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Olympiad Schedule: Academic Year 2015-16</h2>
                        <P>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</P><a href="#">  READ FULL STORY</a>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Olympaid Award</h2>
                        <P>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</P><a href="#">  READ FULL STORY</a>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image2.png" class="img-responsive single-img" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image3.png" class="img-responsive single-img" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Olympaid Prepration</h2>
                        <P>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</P><a href="#">  READ FULL STORY</a>
                    </div>
                </div>
           </div>
          
          <?php include("common/menu.php");?>
         
        </div>
    </section>
     <!--/#features-->
      <section id="action" class="responsive Tabs_Bg">
     
     <div class="container">
                <div class="row">
                <h1 class="Icon_Category">Categories</h1>
                    <div class="Category_Tabs">
                    
                    	
                        <div class="col-sm-3 wow fadeInLeft Cat_Tab" data-wow-duration="500ms" data-wow-delay="300ms">
                        <a href="#" class="btn btn-common">PLANET</a>
                        </div>
                        
                        <div class="col-sm-3 wow fadeInLeft Cat_Tab" data-wow-duration="500ms" data-wow-delay="300ms">
                        <a href="#" class="btn btn-common">PMO-SY..</a>
                        </div>
                        
                        <div class="col-sm-3 wow fadeInLeft Cat_Tab" data-wow-duration="500ms" data-wow-delay="300ms">
                        <a href="#" class="btn btn-common">PMO-EX..</a>
                        </div>
                        
                        <div class="col-sm-3 wow fadeInLeft Cat_Tab" data-wow-duration="500ms" data-wow-delay="300ms">
                        <a href="#" class="btn btn-common">PMO-PR</a>
                        </div>
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
                        <p><img src="images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">More Information</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <marquee>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-4 col-sm-3">
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
                            
                        </div>
                       <!--  <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client1.png" class="img-responsive person" alt=""></a>
                            <h3>Lorem Ipsum</h3>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client2.png" class="img-responsive person" alt=""></a>
                            <h3>Lorem Ipsum</h3>
                        </div>-->
                    </div>
                    </marquee>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->
<?php include("common/footer.php");?>
