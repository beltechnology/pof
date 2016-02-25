<?php include("common/header.php");?>
<link rel="stylesheet" type="text/css" href="css/contact.css">
  <div class="content">
    <div class="contact-page">
     <div class="container-fluid">
       <div class="row">
        <div class="col-md-8 col-lg-8">
		 <h2><?php echo  $contactData->title ;?><div class="border"></div></h2>
		 <p><?php echo  $contactData->description ;?></p>
	  <div class="row">
		    <div class="col-lg-8 col-md-8">
			 <h2>Address</h2>
			  <p><?php echo  $contactData->address ;?>
			  </p>
			</div>
			<div class="col-lg-4 col-md-4">
			 <h2>Call Us:</h2>
			 <p>Mobile:&nbsp; &nbsp; +91 <?php echo  $contactData->mobile ;?></p>
			 <p>E-mail:&nbsp; &nbsp; <?php echo  $contactData->email ;?></p> 
			</div>	
			<div class="col-lg-12 col-md-12">
			 <h3>Contact Form: <div class="border-2"></div></h3>
			</div><!--end of col-lg-12 col-md-12-->
			 <div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>
			<form class="form">
			 <div class="container-fluid">
			 <div class="row">
			  <div class="col-lg-4 col-md-4">
			    <div class="form-group">
                <label class="sr-only" for="exampleInputtext3">Name</label>
               <input type="text" class="form-control" id="exampleInputtext3" placeholder="Name">
               </div>
			  </div>
			  <div class="col-lg-1 col-md-1">&nbsp;</div>
			  <div class="col-lg-4 col-md-4">
			    <div class="form-group">
                <label class="sr-only" for="exampleInputtext3">Address</label>
               <input type="email" class="form-control" id="exampleInputtext3" placeholder="Address">
               </div>
			  </div>
			  <div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>
			  <div class="col-lg-4 col-md-4">
			    <div class="form-group">
                <label class="sr-only" for="exampleInputtext3">Phone No</label>
               <input type="email" class="form-control" id="exampleInputtext3" placeholder="Phone No">
               </div>
			  </div>
			  <div class="col-lg-1 col-md-1">&nbsp;</div>
			  <div class="col-lg-4 col-md-4">
			    <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3">Email address</label>
               <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
               </div>
			  </div>
			  <div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>
			  </div><!--end of row-->
			  </div><!--end of container-fluid-->
			  <div class="container-fluid">
			 <div class="row">
			  <div class="col-lg-7 col-md-7">
			   <textarea class="form-control" rows="3" placeholder="Message"></textarea>
			   </div>
			   <div>&nbsp;</div><div>&nbsp;</div>
			   <div class="col-lg-2 col-md-2"><button type="button" class="btn btn-default btn-lg btn-block">SEND</button>
			   </div>
			  </div><!--end of row-->
			  </div><!--end of container-fluid-->
			  </form>
          </div><!--end of row-->			
			</div><!--end of col-lg-8 col-md-8-->
	    </div><!--end of row-->
	  </div><!--end of container-fluid-->
	</div><!--end of contact-page-->
   </div><!--end of content-->

  <?php include("common/footer.php");?>
