<?php
include("controller/gallery_controller.php");
$menuType = "viewGallery";
?>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <section class="content">
    <div class="row"> 
      <!-- left column -->
      <div class="col-md-12"> 
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Add Gallery</h3>
          </div>
                <form role="form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
<?php
						$selectCategory = new dataInfo();

						$tbl_name = "tb_gallerysession";
						$session = $selectCategory->selectAllDesc($tbl_name);
?>					
                    <div class="form-group">
                      <label for="gallerysessionId">Gallery Session</label>
                      <select name="gallerysessionId" id="gallerysessionId"  class="form-control">
						<?php
							foreach($session as $sessionData){
								echo "<option value='".$sessionData->gallerysessionId."'>".$sessionData->title."</option>";
							}
						?>
					  </select>
                    </div>
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Title" maxlength="20" required />
                    </div>
                    
                    <div class="form-group">
                      <label for="moreFile">Upload</label>
                      <input type="file" class="form-control" id="moreFile" name="moreFile" placeholder=""  required />
                    </div>
                                        
            <!--      
					<div class="form-group">
                      <label for="link"> Link </label>
                      <input type="url" class="form-control" id="link" name="link"  placeholder="Link" required />
                    </div>
					</div><!-- /.box-body
			-->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="addGallery">Submit</button>
                  </div>
                </form>
        
      </div>
      <!--/.col (left) --> 
      
    </div>
    <!-- /.row --> 
  </section>
</div>
<!-- /.content-wrapper -->
<?php include("common/adminFooter.php");?>
