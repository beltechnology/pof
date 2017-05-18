<?php
include("controller/gallerySession_controller.php");
$menuType = "viewGallerySession";
?>
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
          <h1>&nbsp;          </h1>
          <ol class="breadcrumb">
            <li><b><a href="addGallerySession.php"> Add Gallery Sesssion </a> </b></li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Gallery Sesssion</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						$pagination = new pagination();
						$selectCategory = new dataInfo();

						$tbl_name = "tb_gallerysession";
						$targetpage = "viewGallerySession.php";
						$testimonial = $pagination->selectAll($tbl_name);
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
						if($testimonial)
						{
                     foreach($testimonial as $testimonials)
					  {
						?>
                      <tr>
                        <td><?php echo $sr++;?> </td>
                        
                        <td><?php  echo $testimonials->title ;?></td>
                        <td><img src="<?php echo BaseUrl;?>upload/<?php  echo $testimonials->upload ;?>" width="50" /></td>
                        <td> <a href="#" class="delete" data="gallerysessionId=<?php  echo $testimonials->gallerysessionId;?>=tb_gallerysession">Delete <span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a></td>
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
