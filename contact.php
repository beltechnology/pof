<?php include("common/header.php");
$menuClass = "contact";
?>
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><?php echo  $contactData->title ;?></h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <div class="row">


                        <div class="col-sm-12 col-md-12">
						
                        <p><?php echo  $contactData->description ;?></p>
                    <div class="col-sm-6 wow fadeInLeft contact" data-wow-duration="500ms" data-wow-delay="300ms">
                       <h2>Contact Information</h2>
                       <p><i class="fa fa-envelope-o" aria-hidden="true" style="color:#5BC0DE;padding-right: 5px;margin-left: 3px;"></i><b>E-mail:</b> <?php echo  $contactData->email ;?> </p>
                       <p><i class="fa fa-phone" aria-hidden="true" style="color:#5BC0DE;padding-right: 5px;margin-left: 3px;"></i><b>Phone No.:</b>8192900900 , 7792834040 </p>
                       <h2>Address</h2>
                       
                       <address>
                      <?php echo $contactData->address ?>
					  </address>
                     
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28459.42278491603!2d75.79047402408689!3d26.921647634723403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db15569897029%3A0x57d3f3a2975b89f0!2sJaipur%2C+Rajasthan+302001!5e0!3m2!1sen!2sin!4v1460624297001" width="360" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>   
                    </div>
                    
                        </div>
                    </div>
 					
                   </div> 
                    <div class="Index col-md-4 col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="sidebar blog-sidebar">
                    

<?php include("common/menu.php");?>
</div>
                     <div class="sidebar blog-sidebar" style="margin:0px;">                       
                        <div class="sidebar-item popular">
                            <h3>Latest Photos</h3>
                            <ul class="gallery">
							<?php echo $htmlFactory->moreInformationInnerPage();?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
    </section>
		
    <!--/#blog-->

  <?php include("common/footer.php");?>