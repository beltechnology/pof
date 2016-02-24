<?php
include("controller/category_controller.php");
$menuType = "viewCategory";
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
                  <h3 class="box-title">Category</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Parent category</label>
                      <?php 
					  $selectCategory = new dataInfo();
					  $selectCategoryData = $selectCategory->selectAll("category");
					?>
                      <select class="form-control" name="parentCategory" id="parentCategory">
                      <option value="0">Select parent category</option>
                      <?php
					  $edit = "";
					  $seletedCategoryid = "";
					  if($selectCategoryData)
					  {
						foreach($selectCategoryData as $categoryData)
						{
						  if(isset($_REQUEST['categoryid'])&& ( $_REQUEST['categoryid'] == $categoryData->category_id))
						  {
							$edit = true;
							$seletedCategoryid = $_REQUEST['categoryid'];
							 $category = $categoryData;
							 $parentId = $categoryData->parentid;

						  }
							$parent = $categoryData->parentid;
							$title = $categoryData->title;
							$category_id = $categoryData->category_id;
							$ele = "";
							$dropDown = $selectCategory->genrateCategory($category_id,$title,$parent,$seletedCategoryid,$ele);
							echo $dropDown;
						}
					  }
					?>
                      </select>
                       <div class="form-group"><label><input type="checkbox" name="top" id="top" onClick="isTop(this)" /> Is top</label></div>
                    </div>
                    <div class="form-group">
                      <label for="categoryName">Category name</label>
                      <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Category name" value="<?php if( $edit) echo $category->title; ?>"  required />
                      <?php if( $edit){?>
                      <input type="hidden" class="form-control" id="category_id" name="category_id" placeholder="Category name" value="<?php echo $category->category_id ?>" required />
                      <?php }?>
                    </div>
                    
                    <div class="form-group">
                      <label for="categoryName">Seo title</label>
                      <input type="text" class="form-control" id="seoTitle" name="seoTitle" placeholder="Seo title"  value="<?php if( $edit) echo $category->seoTitle; ?>" />
                    </div>
                    
                    <div class="form-group">
                      <label for="categoryName">Meta</label>
                      <input type="text" class="form-control" id="meta" name="meta" placeholder="Meta" value="<?php if($edit)  echo $category->meta; ?>"  />
                    </div>
                    
                    <div class="form-group">
                      <label for="categoryName">Keyword</label>
                      <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Keyword" value="<?php if($edit) echo  $category->keyword; ?>"   />
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
                    <button type="submit" class="btn btn-primary" name="addCategory">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->



            </div><!--/.col (left) -->

          </div>   <!-- /.row -->
        </section>      
      </div>
      <!-- /.content-wrapper -->
<?php include("common/adminFooter.php");?>