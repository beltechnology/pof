<?php
if(isset($_POST['updateContactus']))
{
	try {
			if(isset($_POST['title']))
			{
				$contactData = new stdClass();
				$contactData->title = $_POST['title'];
				$contactData->description = $_POST['description'];				
				$contactData->email = $_POST['email'];
				$contactData->mobile = $_POST['mobile'];
				$contactData->twitter = $_POST['twitter'];
				$contactData->facebook = $_POST['facebook'];	
				$contactData->google = $_POST['google'];
				$contactData->pin = $_POST['pin'];
				$contactData->address = $_POST['address'];				
				if(isset($_POST['contactId']))
				{
					$contactData->state = 2;
					$contactData->contactId = $_POST['contactId'];
				}
				else
				{
					throw new Exception("fill required field.");
				}
				$registrationInfo = new dataInfo();
				$response = $registrationInfo->updateContactus($contactData);
				$succesMsg = $response;
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