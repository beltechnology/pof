<?php include("common/header.php");
$menuClass = "mediaCoverage";
?>
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Media Coverage</h1>
                            
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
				echo $htmlFactory->getMediaCovrageSession();
			?>
				</div>
			</div>
        </div>
		
    </section>
		
    <!--/#blog-->
  <?php include("common/footer.php");?>