<?php 
 $path = $_SERVER['DOCUMENT_ROOT']."/vibhor/pof/";
 $pathCss = "/vibhor/pof/";
 $menuType = "";
include($path."class/constant.php");
include($path."admin/common/conn.php");
include($path."admin/class/datainfo.php");
include($path."class/htmlFactory.php");
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
include($path."helper/header_helper.php");

if(isset($_REQUEST['pageId']))
{
$pageId = $_REQUEST['pageId'];
$pageData = $htmlFactory->getPageDetailByPageId($pageId);
//var_dump($pageData);
}
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Index</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Datepicker.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
   <!-- <link rel="shortcut icon" href="images/ico/favicon.ico">-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a  href="<?php echo  $contactData->facebook ;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a  href="<?php echo  $contactData->twitter ;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a  href="<?php echo  $contactData->google ;?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a  href="<?php echo  $contactData->pin ;?>" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
					</button>

                    <a class="navbar-brand" href="index.html">
                    	<h1><img src="images/logo.png" alt="logo"></h1>
                    </a> 
				</div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li class="#"><a href="aboutus.html">About US<!-- <i class="fa fa-angle-down"></i>--></a>
                           <!-- <ul role="menu" class="sub-menu">
                                <li><a href="aboutus.html">About</a></li>
                                <li><a href="aboutus2.html">About 2</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="contact2.html">Contact us 2</a></li>
                                <li><a href="404.html">404 error</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>-->
                        </li>                    
                        <li class="dropdown"><a href="#">What We Do<!--<i class="fa fa-angle-down"></i>--></a>
                            <!--<ul role="menu" class="sub-menu">
                                <li><a href="blog.html">Blog Default</a></li>
                                <li><a href="blogtwo.html">Timeline Blog</a></li>
                                <li><a href="blogone.html">2 Columns + Right Sidebar</a></li>
                                <li><a href="blogthree.html">1 Column + Left Sidebar</a></li>
                                <li><a href="blogfour.html">Blog Masonary</a></li>
                                <li><a href="blogdetails.html">Blog Details</a></li>
                            </ul>-->
                        </li>
                        <li class="dropdown"><a href="contact.html">Contact Us <!--<i class="fa fa-angle-down"></i>--></a>
                            <!--<ul role="menu" class="sub-menu">
                                <li><a href="portfolio.html">Portfolio Default</a></li>
                                <li><a href="portfoliofour.html">Isotope 3 Columns + Right Sidebar</a></li>
                                <li><a href="portfolioone.html">3 Columns + Right Sidebar</a></li>
                                <li><a href="portfoliotwo.html">3 Columns + Left Sidebar</a></li>
                                <li><a href="portfoliothree.html">2 Columns</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            </ul>-->
                        </li>                         
                        <!--<li><a href="shortcodes.html ">Shortcodes</a></li>-->                    
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                                                <script>
  (function() {
    var cx = '013359958246192933599:xzpzuvrang4';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
                        </div>
                    </form>
                </div>
            </div>
      </div>
    </header>
    <!--/#header-->
