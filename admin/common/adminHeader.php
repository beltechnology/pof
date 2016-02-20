<?php ob_start(); ?>
<?php
 include("conn.php");
 include("../class/constant.php");
 include("../class/htmlFactory.php");
 $login = new userAuth ();
 $login->userLoginAuth();
 
$htmlFactory = new htmlFactory();
$studentLogin = false;
 
if(isset($_SESSION['userInfo']))
{
	$userInfo = $_SESSION['userInfo'];
	$userType = $userInfo->userType;
	if($userType == "student")
	{
		$registrationId = $userInfo->registrationId;
		$studentLogin = true;
		$studentInfo = $htmlFactory->getStudentInfoById($registrationId);
		//var_dump($studentInfo);

	}
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
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <!-- jvectormap -->
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php 
				  $userInfo = $_SESSION['userInfo'];
				  if($studentLogin)
				  {
					echo $studentInfo->studentName;  
				  }
				  else
				  {
			 	  echo $userInfo->userName;
				  }
				  ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
           
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            <li class="active treeview">
              <?php
				  if($studentLogin)
				  {?>
                  <a href="<?php echo BaseUrl; ?>">
                    <i class="fa fa-dashboard"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
              <ul class="treeview-menu">
                <li class="active index"><a href="viewNotes.php"><span aria-hidden="true" class="glyphicon  glyphicon-download-alt"></span> Notes</a></li>
               </ul>
				 <?php
				  }
				  else
				  {
			  ?>
                  <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
              <ul class="treeview-menu">
                <li class="active index"><a href="dashboard.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                <li class="viewCategory" ><a href="viewCategory.php"><i class="fa fa-circle-o"></i> view Category</a></li>
                <li class="viewNotesCategory" ><a href="viewNotesCategory.php"><i class="fa fa-circle-o"></i> view Subject</a></li>
                <li class="viewNotes" ><a href="viewNotes.php"><i class="fa fa-circle-o"></i> view Notes</a></li>
                <li class="viewPages" ><a href="viewPages.php"><i class="fa fa-circle-o"></i> view pages</a></li>
                <li class="registration" ><a href="viewRegistration.php"><i class="fa fa-circle-o"></i> view registration</a></li>
                <li class="slider" ><a href="slider.php"><i class="fa fa-circle-o"></i> Update slider</a></li>
                <li class="viewAboutPof" ><a href="viewAboutPof.php"><i class="fa fa-circle-o"></i> View about pof Detail</a></li>
                <li class="viewTestimonial" ><a href="viewTestimonial.php"><i class="fa fa-circle-o"></i> View testimonial</a></li>
                <li class="viewmoreInformation" ><a href="viewMoreInformation.php"><i class="fa fa-circle-o"></i>View moreinformation</a></li>
                <li class="contactus" ><a href="contactus.php"><i class="fa fa-circle-o"></i>Update Contact us</a></li>
                <li class="olympaidInformation" ><a href="viewOlympaidInformation.php"><i class="fa fa-circle-o"></i>View Olympaid Information</a></li>
               <!-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> moreInformation v2</a></li>-->
               </ul>
               <?php
				  }
				  ?>
              
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
