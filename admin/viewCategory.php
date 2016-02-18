<?php
include("controller/category_controller.php");
$menuType = "viewCategory";
?>
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
          <h1>&nbsp;          </h1>
          <ol class="breadcrumb">
            <li><b><a href="adminMenu.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Category</a></b></li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Category</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
<!--                        <th>Parent category</th>
-->                        <th>Category</th>
                        <th>Seo title</th>
                        <th>Meta</th>
                        <th>Keyword</th>
                        <th>Status</th>
                        <th>Featured</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						$pagination = new pagination();
						$selectCategory = new dataInfo();

						$tbl_name = "category";
						$targetpage = "viewCategory.php";
						$selectCategoryData = $pagination->selectAll($tbl_name);
						$sr= 1;
						if($selectCategoryData)
						{
					 foreach($selectCategoryData as $category)
					  {
						$seletedCategoryid = "";
						$parent = $category->parentid;
						$title = $category->title;
						$category_id = $category->category_id;
						$ele = "span";
						$dropDown = $selectCategory->genrateCategory($category_id,$title,$parent,$seletedCategoryid,$ele);
						?>
                      <tr>
                        <td><?php echo $sr++;?> </td>
                        <td><?php  echo $dropDown ;?></td>
<!--                        <td><?php // echo $category->title ;?></td>
-->                        <td><?php echo $category->seoTitle ;?></td>
                        <td><?php echo $category->meta ;?></td>
                        <td><?php echo $category->keyword ;?></td>
                        <td><?php if($category->status == 0){echo "Enabled ";} else{echo "Disabled";} ;?></td>
                        <td><input type="checkbox" name="featured" class="featured" value="<?php  echo $category->category_id;?>" <?php if($category->featured == 1){echo "checked";}?> /></td>
                        <td> <a href="adminMenu.php?categoryid=<?php  echo $category->category_id;?>" class="Edit">Edit <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span></a></td>
                        <td><a href="#" class="delete" data="category_id=<?php  echo $category->category_id;?>=category">Delete <span aria-hidden="true" class="glyphicon glyphicon-trash"></span></a></td>
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
$("input.featured").click(function()
{
		var val = $(this).val();
		var checkType = $(this).prop('checked');
		$.ajax({
			url: "delete.php",
			data:"category_id="+val+"&checkType="+checkType,
			type:"POST",
			success: function(result){
				if(result !="")
				{
				//location.reload();
				}
				else
				{
				$(ele).hide();
				}
			}
		
		});	
});

</script>