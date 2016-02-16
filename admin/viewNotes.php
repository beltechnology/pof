<?php
include("controller/category_controller.php");
$menuType = "viewNotes";
?>
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
          <h1>&nbsp;          </h1>
          <ol class="breadcrumb">
            <li><b><a href="notesDetail.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Note Detail</a></b></li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Notes detail</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Notes category</th>
                        <th>Notes title</th>
                        <th>Notes description</th>
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
                        <td><?php  echo $category->notesDescription ;?></td>
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
