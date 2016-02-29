<?php
include("controller/olympaidInformation_controller.php");
$menuType = "ViewEmail";
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
                  <h3 class="box-title">Email Subscribe</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Email</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						$pagination = new pagination();
						$selectCategory = new dataInfo();

						$tbl_name = "emailsubscribe";
						$targetpage = "viewOlympaidInformation.php";
						$selectCategoryData = $pagination->selectAll($tbl_name);
						$sr= 1;
						if($selectCategoryData)
						{
                     foreach($selectCategoryData as $category)
					  {
						?>
                      <tr>
                        <td><?php echo $sr++;?> </td>
                        <td><?php  echo $category->email ;?></td>
                        <td>
                        <a href="#" class="delete" data="emailId=<?php  echo $category->emailId;?>=emailsubscribe">Delete
                         <span aria-hidden="true" class="glyphicon glyphicon-trash"></span>
                         </a></td>
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
