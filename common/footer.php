
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
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
                        </div>   
                    </div> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com"> admin@gmail.com</a> <br> 
                        Phone:8192900900<br> 
                        Fax:7792834040 <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                      Our Example:Location-<br>
                      5435, N-L-Enclave,Lorem<br>
                      Ispum Ave. (123):123-<br>
                      1212<br>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                <div class="row">
                <div class="col-sm-7 overflow">
                   <div class="social-icons pull-right Footer_icon">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
  
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
