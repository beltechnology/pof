<?php
include("controller/category_controller.php");
$menuType = "viewNotes";
?>
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
          <h1>&nbsp;          </h1>
          
                        <?php
				  if(!$studentLogin)
				  {?>
                  <ol class="breadcrumb">
            <li><b><a href="notesDetail.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Note Detail</a></b></li>
            <?php
				  }
				  else
				  {?>
                  <ol class="breadcrumb-student">
                  <li ><b><?php echo $CategoryName ;?></b></li>
                  <?php
                  }
				  ?>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
				 <?php  if(!$studentLogin)
				  {?>
                  <h3 class="box-title">Notes detail</h3>
            <?php
				  }
				?>
                </div><!-- /.box-header -->
                <div class="box-body">
              <?php
				  if($studentLogin)
				  {?>
                  
<div class="row">
                      <?php 
						$pagination = new pagination();
						$selectCategory = new dataInfo();
						$notesData = new stdClass();
						$notesData->studentClass = $studentInfo->studentClass;
						$notesData->subject = $notesCategoryId;
						$tbl_name = "notesdetail";
						$targetpage = "viewNotes.php";
						$selectCategoryData = $pagination->showNotesByClass($notesData);
						//var_dump($selectCategoryData);
						$sr= 1;
						if($selectCategoryData)
						{
                     foreach($selectCategoryData as $category)
					  {
						$string = strip_tags($category->notesDescription);
						$stringCut = "";
						if (strlen($string) > 200) {
							
							$stringCut = substr($string, 0, 200);
							$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
						}
						?>
						 
							<div class="col-sm-4" >
							<div class="card card-block studentCard">
						  <h3 class="card-title"><?php  echo $category->notesTitle ;?></h3>
						  <p class="card-text"><?php   echo $string ;?></p>
						  <?php
						  if($stringCut)
						  {?>
						  <a href="<?php  echo BaseUrl."admin/readmore.php?notesCategoryId=".$category->notesCategoryId."&notesId=".$category->notesId;?>" class="btn btn-primary">Read More..</a>
						  <?php } ?>
						  <a download href="<?php  echo BaseUrl."admin/upload/".$category->uploads;?>" class="btn btn-primary pull-right">Download</a>
						</div>
						  </div>
                      <?php
						}
					}
					  ?>
                      </div>
             <?php
				  }
				  else
				  {?>
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Notes Subject</th>
                        <th>Notes title</th>
                        <!--<th>Notes description</th>-->
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

						$tbl_name = "notesdetail";
						$targetpage = "viewNotes.php";
						$selectCategoryData = $pagination->selectAll($tbl_name);
						$sr= 1;
						if($selectCategoryData)
						{
                     foreach($selectCategoryData as $category)
					  {
						$seletedCategoryid = "";
						$notesCategoryDesc = $selectCategory->getNotesCategoryDataByCategoryId($category->notesCategoryId);
						$parent = $notesCategoryDesc->parentId;
						$title = $notesCategoryDesc->CategoryName;
						$category_id = $notesCategoryDesc->notesCategoryId;
						$ele = "span";
						$dropDown = $selectCategory->genrateNotesCategory($category_id,$title,$parent,$seletedCategoryid,$ele);
						?>
                      <tr>
                        <td><?php echo $sr++;?> </td>
                        <td><?php  echo $dropDown ;?></td>
                        <td><?php  echo $category->	notesTitle ;?></td>
                        <?php /*?><td><?php  echo $category->notesDescription ;?></td><?php */?>
                        <td><?php echo $category->seoTitle ;?></td>
                        <td><?php echo $category->metaTag ;?></td>
                        <td><?php echo $category->keyWord ;?></td>
                        <td><?php if($category->status == 0){echo "Enabled";} else{echo "Disabled";} ;?></td>
                        <td> <a href="notesDetail.php?notesId=<?php  echo $category->notesId;?>" class="Edit">Edit <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span></a></td>
                        <td><a href="#" class="delete" data="notesId=<?php  echo $category->notesId;?>=notesdetail">Delete <span aria-hidden="true" class="glyphicon glyphicon-trash"></span></a></td>
                      </tr>
                      <?php
						}
					}
					  ?>
                    </tbody>
                    
                  </table>
                  <?php
				  }
                  ?>
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
