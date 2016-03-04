<?php
include("controller/notesCategory_controller.php");
$menuType = "viewNotesCategory";
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
                  <h3 class="box-title">Notes Subject</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Parent Subject</label>
                      <?php 
					  $selectCategory = new dataInfo();
					  $selectCategoryData = $selectCategory->selectAll("notescategory");
					  $edit = "";
					  $seletedCategoryid = "";
					?>
                      <select class="form-control" name="parentCategory" id="parentCategory">
                      <option value="0">Select parent Subject</option>
                      <?php
					  if($selectCategoryData)
					  {
						foreach($selectCategoryData as $categoryData)
						{
						  if(isset($_REQUEST['notesCategoryId'])&& ( $_REQUEST['notesCategoryId'] == $categoryData->notesCategoryId))
						  {
							$edit = true;
							$seletedCategoryid = $_REQUEST['notesCategoryId'];
							 $category = $categoryData;
							 $parentId = $categoryData->parentId;

						  }
							$parent = $categoryData->parentId;
							$title = $categoryData->CategoryName;
							$category_id = $categoryData->notesCategoryId;
							$ele = "";
							$dropDown = $selectCategory->genrateNotesCategory($category_id,$title,$parent,$seletedCategoryid,$ele);
							echo $dropDown;
						}
					  }
					?>
                      </select>
                       <div class="form-group"><label><input type="checkbox" name="top" id="top" onClick="isTop(this)" /> Is top</label></div>
                    </div>
                    <div class="form-group">
                      <label for="categoryName">Subject name</label>
                      <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Subject name" value="<?php if( $edit) echo $category->CategoryName; ?>"  required />
                      <?php if( $edit){?>
                      <input type="hidden" class="form-control" id="notesCategoryId" name="notesCategoryId" placeholder="Category name" value="<?php echo $category->notesCategoryId ?>" required />
                      <?php }?>
                    </div>
                <div class="box-body pad">
                <label>Subject description</label>
                    <textarea id="editor1" name="categoryDescription" rows="10" cols="80">
                       <?php if( $edit) echo $category->categoryDescription ?>                     
                    </textarea>
                </div>
                    <div class="form-group">
                      <label for="categoryName">Seo title</label>
                      <input type="text" class="form-control" id="seoTitle" name="seoTitle" placeholder="Seo title"  value="<?php if( $edit) echo $category->seoTitle; ?>" />
                    </div>
                    
                    <div class="form-group">
                      <label for="categoryName">Exam Date</label>
                    <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control"  name="examDate" id="dob" required placeholder="dd/mm/yyyy" value="<?php if($edit) echo $category->examDate; ?>" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>

                    </div>
                    
                    <div class="form-group">
                      <label for="categoryName">Meta</label>
                      <input type="text" class="form-control" id="metaTag" name="metaTag" placeholder="Meta" value="<?php if($edit)  echo $category->metaTag; ?>"  />
                    </div>
                    
                    <div class="form-group">
                      <label for="categoryName">Keyword</label>
                      <input type="text" class="form-control" id="keyWord" name="keyWord" placeholder="Keyword" value="<?php if($edit) echo  $category->keyWord; ?>"   />
                    </div>
                    
                    <div class="form-group">
                      <label for="categoryName"> Sort order </label>
                      <input type="number" class="form-control" id="sort_order" name="sort_order" min="0" max="100" placeholder="Sort order" value="<?php if($edit) echo  $category->sort_order; ?>"   />
                    </div>
					<div class="form-group">
                      <label>Status</label>
                      <select class="form-control" name="status">
                      <option value="0">Enabled</option>
                      <option value="1" <?php if($edit &&  $category->status == 1){?> selected="selected" <?php }?>>Disabled</option>
                      </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="addNotesCategory">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->



            </div><!--/.col (left) -->

          </div>   <!-- /.row -->
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
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
 <script type="text/javascript">
 $(document).ready(function(e) {
            $('#datetimepicker1').datepicker({
            format: 'dd/mm/yyyy',
			pickTime: false,
			startDate: new Date(),
        	autoclose: true
});

});
        </script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
$("#dob").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
</script>