<?php
session_start();
$msg="";
$edit="";
$servername = "localhost";
$username = "sofAdmin";
$password = "admin@123";
$dbname = "sof";
error_reporting(E_ALL ^ E_DEPRECATED);
$conn = mysql_connect($servername, $username, $password)or die("Unable to connect to MySQL");
$selected = mysql_select_db($dbname,$conn)or die("Could not select examples");

class userAuth
{
	function userLoginAuth()
	{
	try{
		if(!empty($_SESSION['userInfo']))
		{
			 $userInfo = $_SESSION['userInfo'];
			 $loginType = "checkLogin";
			 $userName = $userInfo->userName;
			 $password = $userInfo->password;
			$this->userLogin($userName,$password,$loginType);
			
		}
		else{
			throw new Exception("Invalid username and password");			
		}
	}
	catch(Exception $e) {
  		$msg = $e->getMessage();
		header("location:index.php?msg=".$msg);
		}
	}
	function userLogin($userName,$password,$loginType)
	{
		if($loginType != "checkLogin"){$password = md5($password);}
	try{
			$query=mysql_query("select * from user where userName='".$userName."' and password='".$password."' and deleted = 0 and status = 0 ");
			$row=mysql_num_rows($query);
			if($row==1)
			{
				if($loginType != "checkLogin")
				{
					$obj=mysql_fetch_object($query);
					$_SESSION['userInfo']=$obj;
					header("location:dashboard.php");
					var_dump($_SESSION['userInfo']);
				}
				
			}
			else if($row > 1)
			{
				throw new Exception("Multiple record found");

			}
			else
			{
				throw new Exception("Invalid username and password");				

			}
		}
	catch(Exception $e) {
  		$msg = $e->getMessage();
		header("location:index.php?msg=".$msg);
		}

	}	
}

?> 