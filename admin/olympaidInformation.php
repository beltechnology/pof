<?php
include("controller/olympaidInformation_controller.php");
$menuType = "olympaidInformation";
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
            <h3 class="box-title">Olympaid Information</h3>
          </div>
                <form role="form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                      <?php 
					  $edit = "";
					  $updateOlympaidInfo = new dataInfo();
					  if(isset($_REQUEST['olympaidInformationId']))
					  {
						$updateOlympaidData = $updateOlympaidInfo->getDataById("olympaidinformation","olympaidInformationId",$_REQUEST['olympaidInformationId']);
						$edit = true;
					  }
					?>
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php if( $edit) echo $updateOlympaidData->title; ?>"  required />
                      <?php if( $edit){?>
                      <input type="hidden" class="form-control" id="olympaidInformationId" name="olympaidInformationId" placeholder="Category name" value="<?php echo $updateOlympaidData->olympaidInformationId ?>" required />
                      <?php }?>
                    </div>
                <div class="box-body pad">
                <label>Description</label>
                    <textarea id="editor1" name="description" rows="10" cols="80">
                       <?php if( $edit) echo $updateOlympaidData->description ?>                     
                    </textarea>
                </div>
                    <div class="form-group">
                      <label for="olympaidInformationInfoFile">Upload</label>
                      <input type="file" class="form-control" id="olympaidInformationInfoFile" name="olympaidInformationInfoFile" placeholder=""  />
					<?php if( $edit){?>
					  <input type="hidden" class="form-control" id="oldFile" name="oldFile" placeholder="Category name" value="<?php  if( $edit) echo $updateOlympaidData->upload ?>" required />
                      <?php }?>
                    </div>
                    
                    <div class="form-group">
                      <label for="link">Link</label>
                      <input type="url" class="form-control" id="link" name="link" placeholder="Link"  value="<?php if( $edit) echo $updateOlympaidData->link; ?>" />
                    </div>
                    
                    <div class="form-group">
                      <label for="seoTitle">Seo title</label>
                      <input type="text" class="form-control" id="seoTitle" name="seoTitle" placeholder="Seo title"  value="<?php if( $edit) echo $updateOlympaidData->seoTitle; ?>" />
                    </div>
                    
                    <div class="form-group">
                      <label for="metaTag">Meta</label>
                      <input type="text" class="form-control" id="metaTag" name="metaTag" placeholder="Meta" value="<?php if($edit)  echo $updateOlympaidData->metaTag; ?>"  />
                    </div>
                    
                    <div class="form-group">
                      <label for="keyWord">Keyword</label>
                      <input type="text" class="form-control" id="keyWord" name="keyWord" placeholder="Keyword" value="<?php if($edit) echo  $updateOlympaidData->keyWord; ?>"   />
                    </div>
                    
                    <div class="form-group">
                      <label for="sort_order"> Sort order </label>
                      <input type="number" class="form-control" id="sort_order" name="sort_order" min="0" max="100" placeholder="Sort order" value="<?php if($edit) echo  $updateOlympaidData->sort_order; ?>"   />
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="updateOlympaidInformation">Submit</button>
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
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>