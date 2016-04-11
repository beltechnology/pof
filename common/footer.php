
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                
                <div class="col-md-4 col-sm-7">
                
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>                        
                       <marquee behavior="scroll" direction="up" height="250px">
                       <?php echo $htmlFactory->createTestimonialHtml();?>
                       <!-- <div class="media">
                            <div class="pull-left Footer_Img">
                                <a href="#"><img src="images/home/profile1.png" alt="abc"></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Lorem ipsum dolor sit amet,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</blockquote>
                                <h3><a href="#">- Jhon Kalis</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left Footer_Img">
                                <a href="#"><img src="images/home/profile2.png" alt="def"></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Lorem ipsum dolor sit amet,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</blockquote>
                                <h3><a href="">- Abraham Josef</a></h3>
                            </div>
                        </div>  -->
                        </marquee>  
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-5">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="<?php echo  $contactData->email ;?>"><?php echo  $contactData->email ;?></a> <br> 
                        Phone:<?php echo  $contactData->mobile ;?><br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                      <?php echo $contactData->address ?>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" id="name" name="name" placeholder="Name" maxlength="50" required>
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" placeholder="Email" maxlength="50" required class="form-control" />
                            </div>
                            <div class="form-group">
                                <textarea id="message" name="message" maxlength="300" class="form-control" rows="8" placeholder="Your text here" required></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" class="btn btn-submit" value="Submit" name="contactus">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                <div class="row">
                <div class="col-sm-7 overflow">
                   <div class="social-icons pull-right Footer_icon">
                        <ul class="nav nav-pills">
                            <li><a  href="<?php echo  $contactData->facebook ;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a  href="<?php echo  $contactData->twitter ;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a  href="<?php echo  $contactData->google ;?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a  href="<?php echo  $contactData->pin ;?>" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
  
                        </ul>
                    </div> 
                </div>
                
                <div class="col-sm-10">
                <nav id="menu">
  				 <ul>
    			<li><a href="#menu">Our Team</a></li>
   				 <li><a href="#menu">News & Updates</a></li>
    			<li><a href="contact.html">Contact Us</a></li>
   				<li><a href="#menu">Privacy & Policy</a></li>
    			<li><a href="#top">Back to top &uarr;</a></li>
  				</ul>
				</nav>
                </div>
             </div>
                    <div class="copyright-text text-center">
                        <p>&copy; POF India 2016. All Rights Reserved.</p>
                       <!-- <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
    <script type="text/javascript">
$(function() {
    $('input[name="password"]').datepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY'
        }
    });
});
</script>
</body>
</html>
