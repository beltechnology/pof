<?php
class  objectInfo 
{
 	function getClass()
	{
		$classInfo = new stdClass();
		$obj = "";
		for($i=1;$i<=12;$i++)
		{
			$obj[]= $classInfo->classes = "Class ".$i;
			
		}
		
	return $obj;
		
	}	
	
 	function getSubject()
	{

		$subjectArray = array();
		$subjectArray[0] = "Maths";
		$subjectArray[1] = "Science";
		$subjectArray[2] = "English";
		return $subjectArray;
		
	}	
	
	
	
	
}

?>