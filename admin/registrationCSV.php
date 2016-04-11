<?php
include("controller/studentRegistration_controller.php");
$menuType = "registration";
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Student Registration
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
<?php
  $registrationInfo = new dataInfo();
  $objectInfoData = new objectInfo();
  $classData = $objectInfoData->getClass();
  $subjectData = $objectInfoData->getSubject();
  if(isset($_REQUEST['studentId']))
  {
	$registrationData = $registrationInfo->getDataById("studentregistration","studentId",$_REQUEST['studentId']);
	$edit = true;
  }
?>
<?php
	if(isset($_POST["submitRegistrationCsv"]))
	{
		$file = $_FILES['excelFile']['tmp_name'];
		$handle = fopen($file, "r");
		$c = 0;
		while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
		{
			$studentName = $filesop[0];
			$fatherName = $filesop[1];
			$mobileNoStudent = $filesop[2];
			$mobileNoParent = $filesop[3];
			$mobileNoSchool = $filesop[4];
			$formNo = $filesop[5];
			$phoneNoStudent = $filesop[6];
			$phoneNoSchool = $filesop[7];
			$dateOfBirth = $filesop[8];
			$physicallyHandicapped = $filesop[9];
			$gender = $filesop[10];
			$class = $filesop[11];
			$cast = $filesop[12];
			$schoolName = $filesop[13];
			$schoolAddress = $filesop[14];
			$schoolEmailId = $filesop[15];
			$studentEmailId = $filesop[16];
			$photograph = $filesop[17];

			
			$sql = mysql_query("INSERT INTO studentregistrationcsv (studentName,fatherName,mobileNoStudent,mobileNoParent,mobileNoSchool,formNo,phoneNoStudent,phoneNoSchool,dateOfBirth,physicallyHandicapped,gender,stuClass,cast,schoolName,schoolAddress,schoolEmailId,studentEmailId,photograph)
			VALUES ('$studentName','$fatherName','$mobileNoStudent','$mobileNoParent','$mobileNoSchool','$formNo','$phoneNoStudent','$phoneNoSchool','$dateOfBirth','$physicallyHandicapped','$gender','$class','$cast','$schoolName','$schoolAddress','$schoolEmailId','$studentEmailId','$photograph')");
			$c = $c + 1;
		}
		var_dump($filesop);
			if($sql){
				echo "You database has imported successfully. You have inserted ". $c ." recoreds";
			}else{
				echo "Sorry! There is some problem.";
			}
			
	}
?>
  

            <div class="col-md-12">
              <div class="nav-tabs-custom">       
                <div class="tab-content">
                  <div id="settings" class="tab-pane active">
                    <form class="form-horizontal" method="post" action="<?php echo  $_SERVER['REQUEST_URI']?>"  enctype="multipart/form-data">
 <div class="row">                   
 <div class="col-md-12">
                       <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputName">Select File</label>
                        <div class="col-sm-10">
                          <input type="file"  name="excelFile" required id="excelFile">

                        </div>
                      </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                          <button class="btn btn-default" type="reset">Reset</button>
                          <button class="btn btn-success col-sm-offset-1" type="submit" name="submitRegistrationCsv" id="submitRegistration">Submit</button>
                      </div></div>
                    </form>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div>
<?php include("common/adminFooter.php");?>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
 <script type="text/javascript">
 $(document).ready(function(e) {
            $('#datetimepicker1').datepicker({
            format: 'dd/mm/yyyy',
			pickTime: false,
			 endDate: '+0d',
        	autoclose: true
		        });

});
        </script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
$("#dob").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
</script>