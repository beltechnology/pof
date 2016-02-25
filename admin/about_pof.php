<?php
include("controller/aboutPof_controller.php");
$menuType = "viewAboutPof";
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
            <h3 class="box-title">About pof</h3>
          </div>
                <form role="form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                      <?php 
					  $edit = "";
					  $selectCategory = new dataInfo();
					  $selectCategoryData = $selectCategory->selectAll("aboutpof");
					  if(isset($_REQUEST['aboutId']))
					  {
						$notesDteailData = $selectCategory->getDataById("aboutpof","aboutId",$_REQUEST['aboutId']);
						$edit = true;
					  }
					?>
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php if( $edit) echo $notesDteailData->title; ?>"  required />
                      <?php if( $edit){?>
                      <input type="hidden" class="form-control" id="aboutId" name="aboutId" placeholder="Category name" value="<?php echo $notesDteailData->aboutId ?>" required />
                      <?php }?>
                    </div>
                <div class="box-body pad">
                <label>Description</label>
                    <textarea id="editor1" name="description" rows="10" cols="80">
                       <?php if( $edit) echo $notesDteailData->description ?>                     
                    </textarea>
                </div>
                    <div class="form-group">
                      <label for="aboutFile">Upload</label>
                      <input type="file" class="form-control" id="aboutFile" name="aboutFile" placeholder=""  />
					<?php if( $edit){?>
					  <input type="hidden" class="form-control" id="oldFile" name="oldFile" placeholder="Category name" value="<?php  if( $edit) echo $notesDteailData->upload ?>" required />
                      <?php }?>
                    </div>
                    
                    <div class="form-group">
                      <label for="seoTitle">Seo title</label>
                      <input type="text" class="form-control" id="seoTitle" name="seoTitle" placeholder="Seo title"  value="<?php if( $edit) echo $notesDteailData->seoTitle; ?>" />
                    </div>
                    
                    <div class="form-group">
                      <label for="metaTag">Meta</label>
                      <input type="text" class="form-control" id="metaTag" name="metaTag" placeholder="Meta" value="<?php if($edit)  echo $notesDteailData->metaTag; ?>"  />
                    </div>
                    
                    <div class="form-group">
                      <label for="keyWord">Keyword</label>
                      <input type="text" class="form-control" id="keyWord" name="keyWord" placeholder="Keyword" value="<?php if($edit) echo  $notesDteailData->keyWord; ?>"   />
                    </div>
                    
                    <div class="form-group">
                      <label for="sort_order"> Sort order </label>
                      <input type="number" class="form-control" id="sort_order" name="sort_order" min="0" max="100" placeholder="Sort order" value="<?php if($edit) echo  $notesDteailData->sort_order; ?>"   />
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="updateAboutPof">Submit</button>
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