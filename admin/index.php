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
          <div class="row">
              <!-- Horizontal Form -->
              <div class="box box-info " style="margin: 5% 25% 15% 25%;">
              <div class="mainDiv">
                <div class="box-header with-border">
                  <h3 class="box-title">Login</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="userName" class="col-sm-2 control-label">User Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="userName" id="userName" placeholder="User Name" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="password"  name="password" placeholder="Password" required>
                      </div>
                    </div>
                    
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                     <?php if(isset($_REQUEST['msg'])){?><br/><br/>
					<div class="alert alert-warning"><?php  echo $_REQUEST['msg']; ?></div><?php } ?>
                  </div><!-- /.box-footer -->
                </form>
                </div>
              </div>
            <!--/.col (right) -->
          </div>   <!-- /.row -->

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