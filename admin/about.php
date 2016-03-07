<?php
include("controller/about_controller.php");
$menuType = "viewAbout";
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
            <h3 class="box-title">Testimonial</h3>
          </div>
                <form role="form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
					
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required />
                    </div>
                <div class="box-body pad">
                <label>Description</label>
                    <textarea id="editor1" name="description" rows="10" cols="80" required>
                                            
                    </textarea>
                </div>
                    <div class="form-group">
                      <label for="aboutFile">Upload</label>
                      <input type="file" class="form-control" id="aboutFile" name="aboutFile" placeholder=""  required />
                    </div>
                                        
                    <div class="form-group">
                      <label for="sort_order"> Sort order </label>
                      <input type="number" class="form-control" id="sort_order" name="sort_order" min="0" max="100" placeholder="Sort order" />
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="addAbout">Submit</button>
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
<script>
CKEDITOR.replace('editor1', {
"filebrowserImageUploadUrl": "<?php echo BaseUrl;?>admin/plugins/ckeditor/plugins/imgupload.php",
"filebrowserBrowseUrl": "<?php echo BaseUrl;?>admin/plugins/ckeditor/plugins/imgupload.php",
"filebrowserUploadUrl": "<?php echo BaseUrl;?>admin/plugins/ckeditor/plugins/imgupload.php"
});
    </script>