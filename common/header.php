<?php 
 $path = $_SERVER['DOCUMENT_ROOT']."/vibhor/pof/";
 $pathCss = "/vibhor/pof/";

include($path."class/constant.php");
include($path."admin/common/conn.php");
include($path."admin/class/datainfo.php");
include($path."class/htmlFactory.php");
include($path."helper/header_helper.php");
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
 $contactData = $htmlFactory->getContactData();
 

if(isset($_REQUEST['pageId']))
{
$pageId = $_REQUEST['pageId'];
$pageData = $htmlFactory->getPageDetailByPageId($pageId);
//var_dump($pageData);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo BaseUrl;?>style3.css">
<link rel="stylesheet" type="text/css" href="<?php echo BaseUrl;?>responsive.css">
<link rel="stylesheet" href="<?php echo BaseUrl;?>font-awesome/css/font-awesome.min.css">
<!-- Bootstrap -->
<link href="<?php echo BaseUrl;?>css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="https://mainlinetest.vismc.com/gladstone/portal/bloom/vitals/scripts/css/bootstrap-datetimepicker.min.css">
</head>
<body class="body">
<div class="content">
<div class="header">
  <div class="top-header">
    <div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-md-12">
      <ul class="nav nav-justified">
        <li>
          <p> &nbsp; <i class="fa fa-envelope-square envevlope"></i> <?php echo  $contactData->email ;?></p>
        </li>
        <li>
          <p class="welcome">Welcome <?php if($studentLogin){echo $studentInfo->studentName; }else{echo "Visitor !";}?></p>
        </li>
        <?php if($studentLogin){?>
        <li>
          <p><a class ="myCart" href="<?php echo BaseUrl;?>admin/dashboard.php">My Account</a></p>
        </li>
        <li>
          <p><a class ="myCart" href="<?php echo BaseUrl;?>admin/logout.php">Logout</a></p>
        </li>
       <?php }  ?>
        <li>
          <p><i class="fa fa-phone-square phone"></i> + 91 <?php echo  $contactData->mobile ;?></p>
        </li>
      </ul>
	 </div>
	 </div>
    </div>
    <!--end of container.fluid--> 
  </div>
  <!--end of top-header-->
  <div class="medium-header">
    <nav class="navbar navbar-default same-border">
      <div class="container-fluid"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="row">
          <div class="col-md-2 col-lg-2">
            <div class="row">
              <div class="col-lg-3 col-md-3">&nbsp;</div>
              <div class="col-lg-6 col-md-6 col-lg-offset-1 col-md-offset-1">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  <a class="navbar-brand" href="<?php echo BaseUrl;?>"><img class="" src="<?php echo BaseUrl?>img/logo.png"></a> </div>
              </div>
              <div class="col-lg-2 col-md-2">&nbsp;</div>
            </div>
            <!--end of row--> 
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="col-md-5 col-md-offset-2 col-lg-5 col-lg-offset-2">
              <ul class="nav navbar-nav navigation pull-right">
                <li class="home"><a href="<?php echo BaseUrl;?>">Home | <span class="sr-only">(current)</span></a></li>
                <li><a href="#">About Us |</a></li>
                <li><a href="#">What We Do |</a></li>
                <li><a href="#">Contact Us |</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-lg-3">
              <form class="navbar-form" role="search">
                <div class="form-group">
                  <div class="form-group has-default has-feedback">
                    <input type="text" class="form-control pull-left" id="inputSuccess2" aria-describedby="inputSuccess2Status"
		  placeholder="Search For ......">
                    <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess2Status" class="sr-only">(success)</span> </div>
                </div>
              </form>
            </div>
            <!-- /.navbar-collapse --> 
          </div>
        </div>
        <!--end of row--> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
  </div>
  <!--end of medium-header-->
  <div class="bottom-header">
    <div class="container-fluid">
      <div class="col-lg-7 col-md-7">
        <div id="carousel-example-generic" class="carousel slide align-up" data-ride="carousel"> 
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php echo $htmlFactory->getIndicators(0,4)?>
          </ol>
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox"> <?php echo $htmlFactory->getHeaderCarousel(0,4)?> </div>
          
          <!-- Controls --> 
          <a class="" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon  carousel-sign" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon  carousel-sign" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
        <!--end of id="carousel-example-generic" class="carousel slide" data-ride="carousel"--> 
      </div>
      <!--end of col-lg-7 col-md-7-->
      <div class="col-lg-4 col-md-4">
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div class="white">
          <div>&nbsp;</div>
          <div class="row">
            <div class="col-md-1 col-lg-1">&nbsp;</div>
            <div class="col-md-10 col-lg-10">
              <div class="register">
               <a class="brown tab" data="registered">
               	<span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  REGISTER </span>
               </a>
                 <span class="straight-line">&nbsp; | </span> <a class="grey tab" data="logged"><span>&nbsp; LOGIN</span></a> </div>
            </div>
            <div class="col-md-1 col-lg-1">&nbsp;</div>
          </div>
          <!--end of row-->
          <div class="row hideToggle registered">
            <div class="col-md-1 col-lg-1">&nbsp;</div>
            <div class="col-md-10 col-lg-10">
              <div class="register">
                <h3>REGISTER HERE FOR FREE</h3>
              </div>
            </div>
            <div class="col-md-1 col-lg-1">&nbsp;</div>
          </div>
          <div class="row hideToggle logged" style="display:none;">
            <div class="col-md-1 col-lg-1">&nbsp;</div>
            <div class="col-md-10 col-lg-10">
              <!--<div class="register">
                <h3>Student Login </h3>*/
              </div>-->
            </div>
            <div class="col-md-1 col-lg-1">&nbsp;</div>
          </div>
          <!--end of row-->
          <div>&nbsp;</div>
          <form class="form hideToggle registered" method="post">
            <div class="row">
              <div class="col-md-1 col-lg-1">&nbsp;</div>
              <div class="col-md-5 col-lg-5">
                <input class="group-form" type="text" class="form-control" name="name" placeholder="Name" required>
              </div>
              <div class="col-md-5 col-lg-5">
                <input class="group-form" type="text" class="form-control" name="phone" placeholder="Phone" required>
              </div>
              <div class="col-md-1 col-lg-1">&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
              <div class="col-md-1 col-lg-1">&nbsp;</div>
              <div class="col-md-5 col-lg-5">
                <input class="group-form" type="email" class="form-control" name="email" placeholder="Email" required>
              </div>
              <div class="col-md-5 col-lg-5">
                <input class="group-form" type="text" class="form-control" placeholder="City" name="city" required>
              </div>
              <div class="col-md-1 col-lg-1">&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
              <div class="col-md-1 col-lg-1">&nbsp;</div>
              <div class="col-md-5 col-lg-5">
                <input class="group-form" type="text" class="form-control" placeholder="state" name="state" required>
              </div>
              <div class="col-md-5 col-lg-5">
                <input class="group-form" type="text" class="form-control" placeholder="School Name"  name="schoolName" required>
              </div>
              <div class="col-md-1 col-lg-1">&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div>&nbsp;</div>
            <button class="btn btn-default center-block" name="register" type="submit">Register</button>
            <div>&nbsp;</div>
            <div>&nbsp;</div>
          </form>

         
          <form class="form hideToggle logged" style="display:none" action="<?php echo BaseUrl;?>admin/index.php" method="post">
            <div class="row">
              <div class="col-md-1 col-lg-1">&nbsp;</div>
              <div class="col-md-10 col-lg-10">
			  <label for="exampleInputText">User Name</label>
                <input class="group-form" type="text" class="form-control" name="userName" placeholder=" " required>
              </div>
			  <div class="col-md-1 col-lg-1">&nbsp;</div>
			</div>
			<div>&nbsp;</div>
			<div class="row">
			  <div class="col-md-1 col-lg-1">&nbsp;</div>
              <div class="col-md-10 col-lg-10">
	           <label for="exampleInputPassword">Password</label>  
                <input class="group-form " type="password" class="form-control" name="password" placeholder="" required>
              </div>
              <div class="col-md-1 col-lg-1">&nbsp;</div>
            </div>
            <div>&nbsp;</div><div>&nbsp;</div>
            <button class="btn btn-default center-block" name="login" type="submit">Login</button>
            <div>&nbsp;</div>
            <div>&nbsp;</div>
          </form>

        </div>
        <!--end of white--> 
      </div>
      <!--end of col-lg-4 col-md-4-->
      <div class="col-lg-1 col-md-1">&nbsp;</div>
    </div>
    <!--end of container-fluid--> 
  </div>
  <!--end of bottom-header--> 
</div>
<!--end of header--><div>&nbsp;</div>
<div class="container-fluid">
  <div class="main-content">
    <div class="row container-fluid"> <?php echo $htmlFactory->aboutPof();?> </div>
    <!--end of row--> 
  </div>
  <!--end of container-fluid--> 
</div>
<!--end of main-content--><div>&nbsp;</div> 
