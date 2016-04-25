<?php
include("controller/category_controller.php");
$menuType = "viewPages";
?>
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
          <h1>&nbsp;          </h1>
          <ol class="breadcrumb">
            <li><b><a href="pages.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add pages Detail</a></b></li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pages detail</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Category</th>
                        <th>Page title</th>
                        <th>Special Note</th>
                        <th>Seo title</th>
                        <th>Meta</th>
                        <th>Keyword</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						$pagination = new pagination();
						$selectCategory = new dataInfo();
						
						$tbl_name = "pages";
						$targetpage = "viewPages.php";
						$selectCategoryData = $pagination->selectAll($tbl_name);
						if(isset($_REQUEST['page']))
						{
							if($_REQUEST['page'] > 1)
							{
							$sr= $_REQUEST['page']*LIMIT;
							$sr= $sr - LIMIT+1;
							}
							else
							{
								$sr= 1;
							}
						}
						else
						{
							$sr= 1;
						}
						if($selectCategoryData)
						{
                     foreach($selectCategoryData as $category)
					  {
						 $dropDown = "";
						if($category->categoryId !=0)
						{
						$seletedCategoryid = "";
						$notesCategoryDesc = $selectCategory->getCategoryDataByCategoryId($category->categoryId);
						$parent = $notesCategoryDesc->parentid;
						$title = $notesCategoryDesc->title;
						$category_id = $notesCategoryDesc->category_id;
						$ele = "span";
						$dropDown = $selectCategory->genrateCategory($category_id,$title,$parent,$seletedCategoryid,$ele);
						}
						?>
                      <tr>
                        <td><?php echo $sr++;?> </td>
                        <td><?php  echo $dropDown ;?></td>
                        <td><?php  echo $category->	pageTitle ;?></td>
                        <td><?php  echo $category->specialNote ;?></td>
                        <td><?php echo $category->seoTitle ;?></td>
                        <td><?php echo $category->metaTag ;?></td>
                        <td><?php echo $category->keyWord ;?></td>
                        <td><?php if($category->status == 0){echo "Enabled";} else{echo "Disabled";} ;?></td>
                        <td> <a href="pages.php?pageId=<?php  echo $category->pageId;?>" class="Edit">Edit <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span></a></td>
                        <td><a href="#" class="delete" data="pageId=<?php  echo $category->pageId;?>=pages">Delete <span aria-hidden="true" class="glyphicon glyphicon-trash"></span></a></td>
                      </tr>
                      <?php
						}
					}
					  ?>
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
            <?php
			$paginations = $pagination->paginations($tbl_name,$targetpage);
			echo $paginations;
			?>
            </div><!-- /.col -->
            
          </div><!-- /.row -->
          
          
        </section><!-- /.content -->
      </div>
<?php include("common/adminFooter.php");?>
