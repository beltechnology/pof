<?php
include("controller/category_controller.php");
$menuType = "viewNotes";
?>
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
          
          
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
<?php
if(isset($_REQUEST['notesId']))
{
$notes = $htmlFactory->getPagesById($_REQUEST['notesId']);
foreach ($notes as $note);
?>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><b><?php echo $note->notesTitle;?></b></h3>
                  <a download href="<?php  echo BaseUrl."admin/upload/".$note->uploads;?>" class="btn btn-primary pull-right">Download</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                <?php echo $note->notesDescription; ?>
                </div><!-- /.box-body -->
<?php } ?>                
              </div><!-- /.box -->
            </div><!-- /.col -->
            
          </div><!-- /.row -->
          
          
        </section><!-- /.content -->
      </div>
<?php include("common/adminFooter.php");?>
