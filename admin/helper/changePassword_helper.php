<?php
if(isset($_POST['changePassword']))
{
	try {
			if(isset($_POST['password']) && isset($_POST['rPassword']))
			{
				if($_POST['password'] == $_POST['rPassword'])
				{
					$changePassword = new stdClass();
					$changePassword->password= md5($_POST['password']);
					$loggedUserInfo = $_SESSION['userInfo'];
					if($loggedUserInfo->userType == "admin")
					{
						$changePassword->userId=$loggedUserInfo->userId;
						$changePassInfo = new dataInfo();
						//var_dump($changePassword);
						$response = $changePassInfo->changePassword($changePassword);
						header("location:logout.php");
						
					}
					else
					{
						throw new Exception("invalid User.");
					}
				}
				else
				{
					throw new Exception("Passwords Don't Match.");
				}
				
			}
			else
			{
			throw new Exception("fill required field.");
			}
	}
	catch(Exception $e) {
	  $msg = $e->getMessage();
	}



}

?>