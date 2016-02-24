<?php
ob_start();
if(!empty($_POST['userName']) || !empty($_POST['password']))
{
	include "../class/constant.php";	
	include "common/conn.php";	
	$login = new userAuth ();
	$login->userLogin($_POST['userName'],$_POST['password'],"");
	
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
  <body class="hold-transition skin-blue sidebar-mini">
         <div class="">
		  <div>&nbsp;</div>
		  <div class="container">
          <div class="row">
              <!-- Horizontal Form -->
			  <div class="col-lg-6 col-md-6">
              <div class="box box-info" style="background:#e5dfdf;  border-radius:5px;">
              <div class="mainDiv">
                <div class="box-header with-border">
                  <h3 class="box-title">Login</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post">
				 <fieldset class="fieldset">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="userName" class="col-lg-3 col-md-3 control-label">User Name</label>
                      <div class="col-lg-9 col-md-9">
                        <input type="text" class="form-control" name="userName" id="userName" placeholder="User Name" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-3 col-md-3 control-label">Password &nbsp;</label>
                      <div class="col-lg-9 col-md-9">
                        <input type="password" class="form-control" id="password"  name="password" placeholder="Password" required>
                      </div>
                    </div>
                    
                  </div><!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-lg-6 col-md-6">&nbsp;</div>
                    <button type="reset" class="btn btn-default col-lg-3 col-md-3">Cancel</button>
                    <button type="submit" class="btn btn-info col-lg-3 col-md-3 pull-right">Sign in</button>
                     <?php if(isset($_REQUEST['msg'])){?><br/><br/>
					 
					 <div class="col-lg-12 col-md-12">
					<div class="alert alert-warning" style="margin-top:10px; margin-left:18px; margin-right:-15px;"><?php  echo $_REQUEST['msg']; ?></div><?php } ?>
					</div>
                  </div><!-- /.box-footer -->
				  </fieldset>
                </form>
                </div>
              </div>
            <!--/.col (right) -->
			</div><!--end of col-lg-6 col-md-6-->
			 <div class="col-lg-6 col-md-6">
              <div class="box box-info" style="background:#e5dfdf;  border-radius:5px;">
              <div class="mainDiv">
                <div class="box-header with-border">
                  <h3 class="box-title">Login</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post">
				 <fieldset class="fieldset">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="userName" class="col-lg-3 col-md-3 control-label">User Name</label>
                      <div class="col-lg-9 col-md-9">
                        <input type="text" class="form-control" name="userName" id="userName" placeholder="User Name" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-3 col-md-3 control-label">Password &nbsp;</label>
                      <div class="col-lg-9 col-md-9">
                        <input type="password" class="form-control" id="password"  name="password" placeholder="Password" required>
                      </div>
                    </div>
                    
                  </div><!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-lg-6 col-md-6">&nbsp;</div>
                    <button type="reset" class="btn btn-default col-lg-3 col-md-3">Cancel</button>
                    <button type="submit" class="btn btn-info col-lg-3 col-md-3 pull-right">Sign in</button>
                     <?php if(isset($_REQUEST['msg'])){?><br/><br/>
					 
					 <div class="col-lg-12 col-md-12">
					<div class="alert alert-warning" style="margin-top:10px; margin-left:18px; margin-right:-15px;"><?php  echo $_REQUEST['msg']; ?></div><?php } ?>
					</div>
                  </div><!-- /.box-footer -->
				  </fieldset>
                </form>
                </div>
              </div>
            <!--/.col (right) -->
			</div><!--end of col-lg-6 col-md-6-->
          </div>   <!-- /.row -->
		  </div><!--end of container-->
		 </div><!--end of jumbotron-->

  </body>
</html>
<style>
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: auto; 
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
.mainDiv {
    padding: 0 20px 10px 20px;
}
</style> 
<?php
 ob_flush();
?>