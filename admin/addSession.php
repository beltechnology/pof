<?php
include("controller/session_controller.php");
$menuType = "viewSession";
?>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <section class="content">
    <div class="row"> 
      <!-- left column -->
      <div class="col-md-12"> 
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Session</h3>
          </div>
                <form role="form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
					
                    <div class="form-group">
                      <label for="sessionName">Session</label>
                      <input type="text" class="form-control" id="sessionName" name="sessionName" placeholder="Session" required />
                    </div>
               </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="addSession">Submit</button>
                  </div>
                </form>
        
      </div>
      <!--/.col (left) --> 
      
    </div>
    <!-- /.row --> 
  </section>
</div>
<!-- /.content-wrapper -->
<?php include("common/adminFooter.php");?>
