<?php
if(isset($_POST['submitRegistration']))
{
	try {
			if(isset($_POST['name']))
			{
				$registrationData = new stdClass();
				$registrationData->	studentName = $_POST['name'];
				$registrationData->fatherName = $_POST['fatherName'];				
				$registrationData->motherName = $_POST['motherName'];
				$registrationData->dob = $_POST['dob'];
				
				
$subjectArray = "";
$comma = "";
$shift=$_POST['subject'];

if ($shift)
{
    foreach ($shift as $value)
    {
        $subjectArray .= $comma.$value;
		$comma = ",";
    }
}				
				$registrationData->subject = $subjectArray;
				$registrationData->studentClass = $_POST['studentClass'];	
				$registrationData->address = $_POST['address'];
				$registrationData->mobile = $_POST['mobile'];
				$registrationData->email = $_POST['email'];				
				$registrationData->city = $_POST['city'];				
				$registrationData->addressState = $_POST['addressState'];
				$registrationData->pinCode = $_POST['pinCode'];
				$registrationData->schoolName = $_POST['schoolName'];
				$registrationData->schoolCode = $_POST['schoolCode'];
				$registrationData->principalName = $_POST['principalName'];
				$registrationData->principalMobile = $_POST['principalMobile'];
				if(isset($_POST['studentId']))
				{
					$registrationData->state = 2;
					$registrationData->studentId = $_POST['studentId'];
				}
				else
				{
					$registrationData->state = 1;
				}
				$registrationInfo = new dataInfo();
				$response = $registrationInfo ->addstudent($registrationData);
				$succesMsg = $response;
				
				//var_dump($succesMsg);
				header("location:viewRegistration.php?msg=".$succesMsg);
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