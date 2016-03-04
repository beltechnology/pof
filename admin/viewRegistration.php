<?php
include("controller/studentRegistration_controller.php");
include("helper/status_helper.php");
$menuType = "registration";
?>
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
          <h1>&nbsp;          </h1>
          <ol class="breadcrumb">
            <li><b><a href="registration.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registration</a></b></li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                <div class="row">
                                  <div class="col-xs-1">

                  <h3 class="box-title">Registration</h3>
                  </div>
                  <form action="<?php echo  $_SERVER['REQUEST_URI']?>" method="get">
                  <div class="col-xs-10">
                    <h3 class="box-title" style="padding:0 5% 0 5%">
                    <select class="form-control" name="city" >
                        <option value="">Select City</option>
                        <?php
						$registrationInfo = new dataInfo();
						  $objectInfoData = new objectInfo();
						  $classData = $objectInfoData->getClass();
						
                        $cityData = $registrationInfo->selectAll("city");
                        foreach($cityData as $city)
                        {
                        if(isset($_REQUEST['city']) && $city->cityId == $_REQUEST['city'])
                        {
                        ?>
                        <option value="<?php echo $city->cityId; ?>" selected="selected"><?php echo $city->name; ?></option>
                        <?php 
                        }
                        else
                        {
                        ?>
                        <option value="<?php echo $city->cityId; ?>"><?php echo $city->name; ?></option>
                        <?php 
                        }
                    }
                    ?>
                    </select>
                    </h3>
                   

                  <h3 class="box-title" style="padding:0 5% 0 5%">
                  	<select class="form-control" name="school" >
                          
                          	<option value="">Select School</option>
                            <?php
							$schoolData = $registrationInfo->selectAll("school");
                            foreach($schoolData as $school)
                            {
								if(isset($_REQUEST['school']) && $school->schoolId == $_REQUEST['school'])
								{
								?>
								<option value="<?php echo $school->schoolId; ?>" selected="selected"><?php echo $school->name; ?></option>
							<?php 
								}
								else
								{
								?>
								<option value="<?php echo $school->schoolId; ?>"><?php echo $school->name; ?></option>
							<?php 
								}
                            }
                            ?>

                    </select>
                    <input type="hidden" name="page" value="1" />
                  </h3>

                  <h3 class="box-title" style="padding:0 5% 0 5%">
                  	<select class="form-control" name="class" ><option value="">Select Class</option>
                            <?php
                            foreach($classData as $classess)
                            {
								if(isset($_REQUEST['class']) && $classess == $_REQUEST['class'])
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
                  </h3>

                   <h3 class="box-title" style="padding:0 5% 0 5%">
                  <button class="btn btn-primary" name="filter"  type="submit">Go</button>
                  </h3>
                  </div>
                  </form>
                                    <div class="col-xs-1">

                  <h3 class="box-title pull-right">
                  <form method="post" id="status">
                  		<button class="btn btn-primary" name="changeStatus"  type="submit">Activate</button>
                  </form>
                  </h3>
                  </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>&nbsp;</th>
                        <th>Sr. no.</th>
                        <th>Name</th>
                        <th>User Name</th>
                        <th>Date of Birth</th>
                        <th>Subject</th>
                        <th>Class</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>School Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						$pagination = new pagination();
						$registrationInfo = new dataInfo();

						$tbl_name = "studentregistration";
						$targetpage = "viewRegistration.php";
						$registrationData = $pagination->selectAllStudent($tbl_name);
						$sr= 1;
						if($registrationData)
						{
                     foreach($registrationData as $registration)
					  {
						  
						if($registration->status == 0)
						{
							$trClass = "success";
						}
						if($registration->status == 1)
						{
							$trClass = "danger";
						}
						?>
                      <tr class="<?php echo $trClass;?>">
                        <td  ><input type="checkbox" class="changeStatus" value="<?php echo $registration->studentId;?>"  <?php if($registration->status == 0){echo "checked";}?> /> </td>
                        <td  ><?php echo $sr++;?> </td>
                        <td><?php  echo $registration->studentName	 ;?></td>
                        <td><?php  echo $registration->studentName.$registration->studentId;?></td>
                        <td><?php echo $registration->dob ;?></td>
                        <td><?php $subjects = $htmlFactory->getSubjectById($registration->subject); $comma= ""; if($subjects != ""){foreach($subjects as $subject){ echo $comma.$subject->CategoryName; $comma= ","; }}?></td>
                        <td><?php echo $registration->studentClass ;?></td>
                        <td><?php echo $registration->email ;?></td>
              			<td><?php echo $registrationInfo->getCityNameBycityId($registration->city) ;?></td>
                        <td><?php echo $registrationInfo->getSchoolNameByschoolId($registration->schoolName) ;?></td>
                        <td> <a href="registration.php?studentId=<?php  echo $registration->studentId;?>" class="Edit">Edit <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span></a></td>
                        <td><a href="#" class="delete" data="studentId=<?php  echo $registration->studentId;?>=studentregistration">Delete <span aria-hidden="true" class="glyphicon glyphicon-trash"></span></a></td>
                      </tr>
                      <?php
						}
					}
					  ?>
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
            <?php
			$paginations = $pagination->paginationsStudent($tbl_name,$targetpage);
			echo $paginations;
			?>
            </div><!-- /.col -->
            
          </div><!-- /.row -->
          
          
        </section><!-- /.content -->
      </div>
<?php include("common/adminFooter.php");?>
<script>
$(".changeStatus").click(function()
{
	var statusValue = $(this).val();
	var hiddenField = $("<input type='hidden' name='status[]' value='"+statusValue+"'/>");
	var length = $('#status input[value='+statusValue+']').length;

	if(length > 0)
	{
		$('#status input[value='+statusValue+']').remove();
	}
	else
	{
		$('#status').append(hiddenField);
	}
	
		
});


</script>