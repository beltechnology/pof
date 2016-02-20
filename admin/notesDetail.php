<?php
include("controller/notesDetail_controller.php");
$menuType = "viewNotes";
  $objectInfoData = new objectInfo();
  $classData = $objectInfoData->getClass();

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
                  <h3 class="box-title">Notes Detail</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Notes Subject</label>
                      <?php 
					  $edit = "";
					  $selectCategory = new dataInfo();
					  $selectCategoryData = $selectCategory->selectAll("notescategory");
					  if(isset($_REQUEST['notesId']))
					  {
						$notesDteailData = $selectCategory->getDataById("notesdetail","notesId",$_REQUEST['notesId']);
						$edit = true;
					  }
					?>
                      <select class="form-control" name="notesCategoryId" id="notesCategoryId" required>
                      <option >Select notes Subject</option>
                      <?php
					  if($selectCategoryData)
					  {
						foreach($selectCategoryData as $categoryData)
						{
						$seletedCategoryid = "";
						  if(isset($_REQUEST['notesId'])&& ( $notesDteailData->notesCategoryId == $categoryData->notesCategoryId))
						  {
							$seletedCategoryid = $notesDteailData->notesCategoryId ;
						  }
							$parent = $categoryData->parentId;
							$title = $categoryData->CategoryName;
							$category_id = $categoryData->notesCategoryId;
							$ele = "option";
							$dropDown = $selectCategory->genrateNotesCategory($category_id,$title,$parent,$seletedCategoryid,$ele);
							echo $dropDown;
						}
					  }
					?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="categoryName">Class</label>
                          <select id="studentClass" name="studentClass" class="form-control"  required >
                          	<option value="">Select class</option>
                            <?php
                            foreach($classData as $classess)
                            {
								if($edit && $classess == $notesDteailData->studentClass)
								{
								?>
								<option value="<?php echo $classess; ?>" selected="selected"><?php echo $classess; ?></option>
							<?php 
								}
								else
								{
								?>
								<option value="<?php echo $classess; ?>"><?php echo $classess; ?></option>
							<?php 
								}
                            }
                            ?>
                          </select>

                    </div>
                    <div class="form-group">
                      <label for="categoryName">Notes title</label>
                      <input type="text" class="form-control" id="notesTitle" name="notesTitle" placeholder="Notes title" value="<?php if( $edit) echo $notesDteailData->notesTitle; ?>"  required />
                      <?php if( $edit){?>
                      <input type="hidden" class="form-control" id="notesId" name="notesId" placeholder="Category name" value="<?php echo $notesDteailData->notesId ?>" required />
                      <?php }?>
                    </div>
                <div class="box-body pad">
                <label>Notes description</label>
                    <textarea id="editor1" name="notesDescription" rows="10" cols="80">
                       <?php if( $edit) echo $notesDteailData->notesDescription ?>                     
                    </textarea>
                </div>
                    <div class="form-group">
                      <label for="categoryName">Upload</label>
                      <input type="file" class="form-control" id="notesFile" name="notesFile" placeholder=""  />
					<?php if( $edit){?>
					  <input type="hidden" class="form-control" id="oldFile" name="oldFile" placeholder="Category name" value="<?php  if( $edit) echo $notesDteailData->uploads ?>" required />
                      <?php }?>
                    </div>
                    
                    <div class="form-group">
                      <label for="categoryName">Seo title</label>
                      <input type="text" class="form-control" id="seoTitle" name="seoTitle" placeholder="Seo title"  value="<?php if( $edit) echo $notesDteailData->seoTitle; ?>" />
                    </div>
                    
                    <div class="form-group">
                      <label for="categoryName">Meta</label>
                      <input type="text" class="form-control" id="metaTag" name="metaTag" placeholder="Meta" value="<?php if($edit)  echo $notesDteailData->metaTag; ?>"  />
                    </div>
                    
                    <div class="form-group">
                      <label for="categoryName">Keyword</label>
                      <input type="text" class="form-control" id="keyWord" name="keyWord" placeholder="Keyword" value="<?php if($edit) echo  $notesDteailData->keyWord; ?>"   />
                    </div>
                    
                    <div class="form-group">
                      <label for="categoryName"> Sort order </label>
                      <input type="number" class="form-control" id="sort_order" name="sort_order" min="0" max="100" placeholder="Sort order" value="<?php if($edit) echo  $notesDteailData->sort_order; ?>"   />
                    </div>
					<div class="form-group">
                      <label>Status</label>
                      <select class="form-control" name="status">
                      <option value="0">Enbled</option>
                      <option value="1" <?php if($edit &&  $notesDteailData->status == 1){?> selected="selected" <?php }?>>disabled</option>
                      </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="addNotesDetail">Submit</button>
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
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>
