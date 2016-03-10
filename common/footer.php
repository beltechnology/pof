	  <div class="subscribe">
	   <div class="container-fluid">
	    <div class="row">
		  <div class="col-lg-2 col-md-2">&nbsp;</div>
		  <div class="col-lg-4 col-md-4"><h2 class="text-center">Subscribe Our Newsletter</h2>
		  </div>
		  <div>&nbsp;</div>
		  <div class="col-lg-4 col-md-4">
		  <form class="form-inline" action="" method="post">
           <input type="email" class="form-control input-group-lg" id="sEmail" name="sEmail" placeholder="Enter your E-mail" required>
           <span><input class="btn btn-default send btn-sm" type="submit" name="emailSubscribe" value="SEND" /></span>
		   </form>
		  </div>
		  <div class="col-lg-2 col-md-2">&nbsp;</div>
		</div><!--end of row-->
		</div><!--end of container-fluid-->
	  </div><!--end of subscribe-->
	  <div>&nbsp;</div>
	  <div class="footer">
	   <div class="container-fluid">
	     <div class="row">
		    <div class="col-lg-2 col-md-2"><p class="one"><?php echo  $contactData->address ;?></p>
			</div>
			<div class="col-lg-1 col-md-1">&nbsp;</div>
			<div class="col-lg-3 col-md-3 center-block"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.38256849028!2d75.65047220499973!3d26.885447914969156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan+302001!5e0!3m2!1sen!2sin!4v1457594348957" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-lg-2 col-md-2 col-lg-offset-1 col-md-offset-1">
            <p class="two">
            <a href="#">Our Team</a> <br><a href="#">News & Updates</a><br><a href="<?php echo BaseUrl;?>contact-us.php">Contact Us</a> <br><a href="#">Privacy & Policy</a></p>
			</div>
			<div class="col-lg-3 col-md-3"><div class="icons pull-right">
			<div>&nbsp;</div>
			<div style="text-align:center;">
			 <a href="<?php echo  $contactData->facebook ;?>" target="_blank"><span class="fa-stack">
             <i class="fa fa-circle fa-stack-2x"></i>
               <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span></a>
			 <a  href="<?php echo  $contactData->google ;?>" target="_blank"><span class="fa-stack">
             <i class="fa fa-circle fa-stack-2x"></i>
               <i class="fa fa-google fa-stack-1x fa-inverse"></i>
            </span></a>
			 <a  href="<?php echo  $contactData->twitter ;?>" target="_blank"><span class="fa-stack">
             <i class="fa fa-circle fa-stack-2x"></i>
               <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span></a>
			 <a  href="<?php echo  $contactData->pin ;?>" target="_blank"><span class="fa-stack">
             <i class="fa fa-circle fa-stack-2x"></i>
               <i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i>
            </span></a>
			</div>
			<p>Copyright © 2015 All Rights Reserved</p> 
			</div><!-- end of icons-->
			</div>
			</div><!--end of row-->
			 </div><!--end of container-fluid-->
			</div><!--end of footer-->
			<!--<div class="footer-bottom">-->
			</div>
	</div><!--end of content-->
  <script src="<?php echo BaseUrl;?>js/jquery.js"></script>
  <script src="<?php echo BaseUrl;?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo BaseUrl;?>admin/bootstrap/js/moment.js"></script>
<script type="text/javascript" src="<?php echo BaseUrl;?>admin/bootstrap/js/bootstrap-datetimepicker.min.js"></script>
  <script src="<?php echo BaseUrl;?>js/common.js"></script>
<script src="<?php echo BaseUrl;?>js/jquery.marquee.min.js"></script> 
  </body>
</html>
<script type="text/javascript">
	$(function () {
		$('#passwordDate').datetimepicker({
		pickTime: false,
		maxDate: moment(),
		format: 'DD/MM/YYYY'
		
		});
});
        </script>