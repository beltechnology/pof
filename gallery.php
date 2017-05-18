<?php include("common/header.php");
$menuClass = "gallerySession";
?>
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Award Gallery</h1>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="blog" class="padding-top padding-bottom-10">
        <div class="container">
			<div class="col-lg-12">
				<div class="row">
				
			<?php
				echo $htmlFactory->getGalleryHtml();
			?>
				</div>
			</div>
        </div>
		
    </section>
		
    <!--/#blog-->

  <?php include("common/footer.php");?>
    <link rel="stylesheet" href="<?php echo BaseUrl;?>css/jquery.fancybox.css?v=2.1.5" media="all" type="text/css">
	<script type="text/javascript" src="<?php echo BaseUrl;?>js/jquery.fancybox.js?v=2.1.5"></script>

<script>
$(document).ready(function() {
	$('.fancybox').fancybox();
});

</script>
<style>


#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
	background-image: url('images/fancybox_sprite@2x.png');
	background-size: 44px 152px; /*The size of the normal image, half the size of the hi-res image*/
}
.fancybox-lock .fancybox-overlay {
background-color: rgba(204, 204, 204, 0.79);
}
</style>