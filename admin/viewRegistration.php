<?php
include("controller/category_controller.php");
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
                  <h3 class="box-title">Registration</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Name</th>
                        <th>User Name</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Date of Birth</th>
                        <th>Subject</th>
                        <th>Class</th>
                    <th>Address</th>
                        <th>Mobile</th>
                        <th>Email</th>
<!--                        <th>City</th>
                        <th>School Code</th>
                        <th>Pin code</th>
                        <th>School Name</th>
                    <th>School Code</th>
                        <th>Principal Name</th>
                        <th>Principal Mobile</th>
                        <th>Status</th>
-->                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						$pagination = new pagination();
						$registrationInfo = new dataInfo();

						$tbl_name = "studentregistration";
						$targetpage = "viewRegistration.php";
						$registrationData = $pagination->selectAll($tbl_name);
						$sr= 1;
						if($registrationData)
						{
                     foreach($registrationData as $registration)
					  {?>
                      <tr>
                        <td><?php echo $sr++;?> </td>
                        <td><?php  echo $registration->studentName	 ;?></td>
                        <td><?php  echo $registration->studentName.$registration->studentId;?></td>
                        <td><?php  echo $registration->fatherName ;?></td>
                        <td><?php  echo $registration->motherName ;?></td>
                        <td><?php echo $registration->dob ;?></td>
                        <td><?php $subjects = $htmlFactory->getSubjectById($registration->subject); $comma= ""; if($subjects != ""){foreach($subjects as $subject){ echo $comma.$subject->CategoryName; $comma= ","; }}?></td>
                        <td><?php echo $registration->studentClass ;?></td>
                        <td><?php echo $registration->address ;?></td>
                        <td><?php echo $registration->mobile ;?></td>
                        <td><?php echo $registration->email ;?></td>
<?php /*?>              <td><?php echo $registration->city ;?></td>
                        <td><?php echo $registration->schoolCode ;?></td>
                        <td><?php echo $registration->pinCode ;?></td>
                        <td><?php echo $registration->schoolName ;?></td>
                       <td><?php echo $registration->schoolCode ;?></td>
                        <td><?php echo $registration->principalName ;?></td>
                        <td><?php echo $registration->principalMobile ;?></td>
                        <td><?php if($registration->status == 0){echo "Enabled";} else{echo "Disabled";} ;?></td>
<?php */?>                        <td> <a href="registration.php?studentId=<?php  echo $registration->	studentId;?>" class="Edit">Edit <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span></a></td>
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
			$paginations = $pagination->paginations($tbl_name,$targetpage);
			echo $paginations;
			?>
            </div><!-- /.col -->
            
          </div><!-- /.row -->
          
          
        </section><!-- /.content -->
      </div>
<?php include("common/adminFooter.php");?>
