<?php
include("controller/pages_controller.php");
$menuType = "viewPages";
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
                  <h3 class="box-title">Pages Detail</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Category</label>
                      <?php 
					  $edit = "";
					  $selectCategory = new dataInfo();
					  $selectCategoryData = $selectCategory->selectAll("category");
					  if(isset($_REQUEST['pageId']))
					  {
						$pagesDetail = $selectCategory->getDataById("pages","pageId",$_REQUEST['pageId']);
						$edit = true;
					  }
					?>
                      <select class="form-control" name="categoryId" id="categoryId" required>
                      <option value="0" >Select category</option>
                      <?php
					  if($selectCategoryData)
					  {
						foreach($selectCategoryData as $categoryData)
						{
							$seletedCategoryid = "";
						  if(isset($_REQUEST['pageId'])&& ($pagesDetail->categoryId == $categoryData->category_id))
						  {
							$seletedCategoryid = $categoryData->category_id ;
						  }
							$parent = $categoryData->parentid;
							$title = $categoryData->title;
							$category_id = $categoryData->category_id;
							$ele = "option";
							$dropDown = $selectCategory->genrateCategory($category_id,$title,$parent,$seletedCategoryid,$ele);
							echo $dropDown;
						}
					  }
					?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="pageTitle">Page title</label>
                      <input type="text" class="form-control" id="pageTitle" name="pageTitle" placeholder="Page title" value="<?php if( $edit) echo $pagesDetail->pageTitle; ?>"  required />
                      <?php if( $edit){?>
                      <input type="hidden" class="form-control" id="pageId" name="pageId"  value="<?php echo $pagesDetail->pageId ?>" required />
                      <?php }?>
                    </div>
                <div class="box-body pad">
                <label>Page description</label>
                    <textarea id="editor1" name="pageDescription" rows="10" cols="80">
                       <?php if( $edit) echo $pagesDetail->pageDescription ?>                     
                    </textarea>
                </div>
                    <div class="form-group">
                      <label for="specialNote">Special note</label>
                      <input type="text" class="form-control" id="specialNote" name="specialNote" placeholder="" value="<?php  if( $edit) echo $pagesDetail->specialNote ?>"  />
                    </div>
                    
                    <div class="form-group">
                      <label for="seoTitle">Seo title</label>
                      <input type="text" class="form-control" id="seoTitle" name="seoTitle" placeholder="Seo title"  value="<?php if( $edit) echo $pagesDetail->seoTitle; ?>" />
                    </div>
                    
                    <div class="form-group">
                      <label for="metaTag">Meta</label>
                      <input type="text" class="form-control" id="metaTag" name="metaTag" placeholder="Meta" value="<?php if($edit)  echo $pagesDetail->metaTag; ?>"  />
                    </div>
                    
                    <div class="form-group">
                      <label for="keyWord">Keyword</label>
                      <input type="text" class="form-control" id="keyWord" name="keyWord" placeholder="Keyword" value="<?php if($edit) echo  $pagesDetail->keyWord; ?>"   />
                    </div>
                    
                    <div class="form-group">
                      <label for="sort_order"> Sort order </label>
                      <input type="number" class="form-control" id="sort_order" name="sort_order" min="0" max="100" placeholder="Sort order" value="<?php if($edit) echo  $pagesDetail->sort_order; ?>"   />
                    </div>
					<div class="form-group">
                      <label>Status</label>
                      <select class="form-control" name="status">
                      <option value="0">Enabled </option>
                      <option value="1" <?php if($edit &&  $pagesDetail->status == 1){?> selected="selected" <?php }?>>Disabled</option>
                      </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="addPages">Submit</button>
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
