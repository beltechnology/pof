<?php
include("controller/category_controller.php");
$menuType = "viewAboutPof";
?>
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
          <h1>&nbsp;          </h1>
          <ol class="breadcrumb">
            <li><b></b></li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">About pof</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Seo title</th>
                        <th>Meta</th>
                        <th>Keyword</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						$pagination = new pagination();
						$selectCategory = new dataInfo();

						$tbl_name = "aboutpof";
						$targetpage = "viewAboutPof.php";
						$selectCategoryData = $pagination->selectAll($tbl_name);
						if(isset($_REQUEST['page']))
						{
							if($_REQUEST['page'] > 1)
							{
							$sr= $_REQUEST['page']*LIMIT-1;
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
						?>
                      <tr>
                        <td><?php echo $sr++;?> </td>
                        
                        <td><?php  echo $category->title ;?></td>
                        <td><img src="<?php echo BaseUrl?>upload/<?php  echo $category->upload ;?>" width="50" /></td>
                        <td><?php echo $category->seoTitle ;?></td>
                        <td><?php echo $category->metaTag ;?></td>
                        <td><?php echo $category->keyWord ;?></td>
                        <td> <a href="about_pof.php?aboutId=<?php  echo $category->aboutId;?>" class="Edit">Edit <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span></a></td>
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
