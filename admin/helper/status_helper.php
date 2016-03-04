<?php
if(isset($_POST['changeStatus']) && isset($_POST['status']))
{
	foreach($_POST['status'] as $status)
	{
		$updateStatus = new dataInfo();
		$res = $updateStatus->updateStatus($status);
	}	


}

?>