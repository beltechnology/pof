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
            <div class="col-md-12">
              <div class="nav-tabs-custom">       
                <div class="tab-content">
                  <div id="settings" class="tab-pane active">
                    <form class="form-horizontal" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
 <div class="row">                   
 <div class="col-md-6">
                       <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputName">Name</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Name" id="name" name="name" class="form-control" required value="<?php if($edit) echo $registrationData->studentName; ?> ">
                          <?php
						  if($edit){?>
                          	<input type="hidden" placeholder="Name" id="studentId" name="studentId" class="form-control" required value="<?php if($edit) echo $registrationData->studentId; ?> ">
							<?php  }
						  ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="fatherName">Father name</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Father name" id="fatherName" name="fatherName" class="form-control" required value="<?php if($edit) echo $registrationData->fatherName; ?> ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="motherName">Mother name</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Mother name" id="motherName" name="motherName" class="form-control" required value="<?php if($edit) echo $registrationData->motherName; ?> ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="dob">Date of Brith</label>
                        <div class="col-sm-10">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control"  name="dob" id="dob" required placeholder="dd/mm/yyyy" value="<?php if($edit) echo $registrationData->dob; ?> " />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="subject">Subject</label>
                        <div class="col-sm-10">
                          <select id="subject" name="subject" class="form-control"  required >
                          	<option value="">Select subject</option>
                            <?php
							foreach($subjectData as $subject)
							{
								if($edit && $subject == $registrationData->subject)
								{
								?>
								<option value="<?php echo $subject; ?>" selected="selected"><?php echo $subject; ?></option>
							<?php 
								}
								else
								{
								?>
								<option value="<?php echo $subject; ?>"><?php echo $subject; ?></option>
							<?php 
								}
							}
							?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="class">Class</label>
                        <div class="col-sm-10">
                          <select id="studentClass" name="studentClass" class="form-control"  required >
                          	<option value="">Select class</option>
                            <?php
                            foreach($classData as $classess)
                            {
								if($edit && $classess == $registrationData->studentClass)
								{
								?>
								<option value="<?php echo $classess; ?>" selected="selected"><?php echo $classess; ?></option>
							<?php 
								}
								else
								{
								?>
								<option value="<?php echo $classess; ?>"><?php echo $classess; ?></option>
							<?php 
								}
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="address">Address</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Address" id="address" name="address" class="form-control"  required value="<?php if($edit) echo $registrationData->address; ?> ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="mobile">Mobile</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Mobile" id="mobile" name="mobile" class="form-control" required value="<?php if($edit) echo $registrationData->mobile; ?> " >
                        </div>
                      </div>
   </div>
 <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="email">Email</label>
                        <div class="col-sm-10">
                          <input type="email" placeholder="Email" id="email" name="email" class="form-control"  required value="<?php if($edit) echo $registrationData->email; ?> " >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="city">City</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="City" id="city" name="city" class="form-control"  required value="<?php if($edit) echo $registrationData->city; ?> " >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="state">State</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="State" id="addressState" name="addressState" class="form-control" required value="<?php if($edit) echo $registrationData->addressState; ?> " >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="pinCode">Pin code</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Pin code" id="pinCode" name="pinCode" class="form-control"  required value="<?php if($edit) echo $registrationData->pinCode; ?> " >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="schoolName">School Name</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="School Name" id="schoolName" name="schoolName" class="form-control"  required value="<?php if($edit) echo $registrationData->schoolName; ?> " >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="schoolCode">School Code</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="School Code" id="schoolCode" name="schoolCode" class="form-control" value="<?php if($edit) echo $registrationData->schoolCode; ?> ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="princpleName">Principal Name</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Principal Name" id="principalName" name="principalName" class="form-control" value="<?php if($edit) echo $registrationData->principalName; ?> ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="princpleMobile">Principal Mobile</label>
                        <div class="col-sm-10">
                          <input type="tel" placeholder="Principal Mobile" id="principalMobile" name="principalMobile" class="form-control"  maxlength="10" value="<?php if($edit) echo $registrationData->principalMobile; ?> ">
                        </div>
                      </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                          <button class="btn btn-default" type="reset">Reset</button>
                          <button class="btn btn-success col-sm-offset-1" type="submit" name="submitRegistration" id="submitRegistration">Submit</button>
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