<?php
include("controller/testimonial_controller.php");
$menuType = "viewSchool";
?>
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
          <h1>&nbsp;          </h1>
          <ol class="breadcrumb">
            <li><b><a href="addSchool.php">Add School </a> </b></li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">School</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>School Name</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						$pagination = new pagination();
						$selectCategory = new dataInfo();

						$tbl_name = "school";
						$targetpage = "viewSchool.php";
						$testimonial = $pagination->selectAll($tbl_name);
						if(isset($_GET['page']))
						{
							if($_GET['page'] > 1)
							{
							$sr= $_GET['page']*LIMIT-1;
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

						if($testimonial)
						{
                     foreach($testimonial as $testimonials)
					  {
						?>
                      <tr>
                        <td><?php echo $sr++;?> </td>
                        
                        <td><?php  echo $testimonials->name ;?></td>
                        <td> <a href="#" class="delete" data="schoolId=<?php  echo $testimonials->schoolId;?>=school">Delete <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span></a></td>
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
