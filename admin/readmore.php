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
//var_dump($notes);
foreach ($notes as $note);
if($_REQUEST['notesId'] == $note->notesId)
{
?>
              <div class="box">
                <div class="box-header" style="height:50px;">
                  <h3 class="box-title"><b><?php echo $note->notesTitle;?></b></h3>
                  <a download href="<?php  echo BaseUrl."upload/".$note->uploads;?>" class="btn btn-primary pull-right">Download</a>
                 <!-- <a href="#" class="btn btn-primary pull-right btnPrint">Print</a>-->
                </div><!-- /.box-header -->
                <div class="box-body">
                <?php echo $note->notesDescription; ?>
                </div><!-- /.box-body -->
<?php } }?> 

<div class="box-body">
<div class="row" >
<h1>Related Notes</h1>
</div>
<div class="row" id='pagenationResult'>

                      <?php 
					  include("pagenationResult.php");
					  ?>
                      </div></div>
<a href="#" class="pull-right">Top</a>
               
              </div><!-- /.box -->
            </div><!-- /.col -->
            
          </div><!-- /.row -->
          
          
        </section><!-- /.content -->
      </div>
<?php include("common/adminFooter.php");?>
<script type="text/javascript">
$(".btnPrint").click(function () {
	var divContents = $(".box-body").html();
	var printWindow = window.open('', '', 'height=400,width=800');
	printWindow.document.write('<html><head><title>DIV Contents</title>');
	printWindow.document.write('</head><body >');
	printWindow.document.write(divContents);
	printWindow.document.write('</body></html>');
	printWindow.document.close();
	printWindow.print();
});
</script>