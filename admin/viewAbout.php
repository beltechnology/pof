<?php
include("controller/testimonial_controller.php");
$menuType = "viewAbout";
?>
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
          <h1>&nbsp;          </h1>
          <ol class="breadcrumb">
            <li><b><a href="about.php">Add About</a> </b></li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">About Us</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						$pagination = new pagination();
						$selectCategory = new dataInfo();

						$tbl_name = "about";
						$targetpage = "viewAbout.php";
						$aboutData = $pagination->selectAll($tbl_name);
						$sr= 1;
						if($aboutData)
						{
                     foreach($aboutData as $abouts)
					  {
						?>
                      <tr>
                        <td><?php echo $sr++;?> </td>
                        
                        <td><?php  echo $abouts->name ;?></td>
                        <td><?php  echo $abouts->phone ;?></td>
                        <td><?php  echo $abouts->description ;?></td>
                        <td><img src="upload/<?php  echo $abouts->uploads ;?>" width="50" /></td>
                        <td> <a href="#" class="delete" data="aboutId=<?php  echo $abouts->aboutId;?>=about">Delete <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span></a></td>
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
