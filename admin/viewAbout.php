<?php
include("controller/about_controller.php");
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
  <?php /*              <form  action="" method="post">
                <div class="box-body pad">
                <?php
					  $aboutdesc = new dataInfo();
					  $aboutdescData = $aboutdesc->selectAll("aboutdesc");
					  foreach($aboutdescData as $aboutdes);
				?>
                <label>Description</label>
                <input type="hidden" name="aboutdescId" value="<?php echo $aboutdes->aboutdescId;?> " />
                    <textarea id="editor1" name="aboutDes" rows="10" cols="80" required>
                    <?php echo $aboutdes->text;?>
                                            
                    </textarea>
                </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary" style="margin-bottom:10px;" name="updateAboutDesc">Submit</button>
                  </div>
                               </form>
                */?>
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Name</th>
                        <th>Phone</th>
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

						if($aboutData)
						{
                     foreach($aboutData as $abouts)
					  {
						?>
                      <tr>
                        <td><?php echo $sr++;?> </td>
                        
                        <td><?php  echo $abouts->name ;?></td>
                        <td><?php  echo $abouts->phone ;?></td>
                        <td><img src="<?php echo BaseUrl?>upload/<?php  echo $abouts->uploads ;?>" width="50" /></td>
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
<script>
CKEDITOR.replace('editor1', {
"filebrowserImageUploadUrl": "<?php echo BaseUrl;?>admin/plugins/ckeditor/plugins/imgupload.php",
"filebrowserBrowseUrl": "<?php echo BaseUrl;?>admin/plugins/ckeditor/plugins/imgupload.php",
"filebrowserUploadUrl": "<?php echo BaseUrl;?>admin/plugins/ckeditor/plugins/imgupload.php"
});
    </script>