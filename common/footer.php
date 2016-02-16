	  <div class="subscribe">
	   <div class="container-fluid">
	    <div class="row">
		  <div class="col-lg-2 col-md-2">&nbsp;</div>
		  <div class="col-lg-4 col-md-4"><h2 class="text-center">Subscribe our newsletter</h2>
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
			<div class="col-lg-3 col-md-3 center-block"><?php /*?><script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:200px;width:250px;'><div id='gmap_canvas' style='height:120px;width:240px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://embedmaps.net'>google maps add to website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=fd141040ae152ab95ffc8458e28f1fd7761d0a20'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:9,center:new google.maps.LatLng(24.9305954,75.5909259),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(24.9305954,75.5909259)});infowindow = new google.maps.InfoWindow({content:'<strong></strong><br><br> rawatbhata<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script><?php */?>
			</div>
			<div class="col-lg-2 col-md-2 col-lg-offset-1 col-md-offset-1"><p class="two">Our Team <br>News & Updates<br>Contact Us <br>Privacy & Policy</p>
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
  <script src="/vibhor/js/jquery.js"></script>
  <script src="/vibhor/js/bootstrap.min.js"></script>
  <script src="/vibhor/js/common.js"></script>
  
  <script>
$("ul li i").click(function()
{
	$(this).toggleClass("fa-minus-square-o");
});

</script>
	<script>
    $('.carousel').carousel({
        interval: 3000
    })
	
	
</script>
  </body>
</html>
