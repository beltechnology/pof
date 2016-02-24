<?php
include("controller/contactus_controller.php");
$menuType = "contactus";
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Contact us	
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
<?php
  	$contactInfo = new dataInfo();
	$contactDatas = $contactInfo->selectAll("contactus");
	$edit = true;
	//var_dump($contactDatas);
	foreach($contactDatas as $contactData);
?>
            <div class="col-md-12">
              <div class="nav-tabs-custom">       
                <div class="tab-content">
                  <div id="settings" class="tab-pane active">
                    <form class="form-horizontal" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
 <div class="row">                   
 <div class="col-md-6">
                       <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputName">Title</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Title" id="title" name="title" class="form-control" required value="<?php if($edit) echo $contactData->title; ?> ">
                          <?php
						  if($edit){?>
                          	<input type="hidden" placeholder="Name" id="contactId" name="contactId" class="form-control" required value="<?php if($edit) echo $contactData->contactId; ?> ">
							<?php  }
						  ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="description">Description</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Father name" id="description" name="description" class="form-control" required value="<?php if($edit) echo $contactData->description; ?> ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="email">Email</label>
                        <div class="col-sm-10">
                          <input type="email" placeholder="Email" id="email" name="email" class="form-control" required value="<?php if($edit) echo $contactData->email; ?> ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="mobile">Mobile</label>
                        <div class="col-sm-10">
                    <input type='text' class="form-control"  name="mobile" id="mobile" required placeholder="Mobile" value="<?php if($edit) echo $contactData->mobile; ?> " />
                        </div>
                      </div>

   </div>
 <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="twitter">Twitter</label>
                        <div class="col-sm-10">
                          <input type="url" placeholder="Twitter" id="twitter" name="twitter" class="form-control"  required value="<?php if($edit) echo $contactData->twitter; ?> " >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="facebook">Facebook</label>
                        <div class="col-sm-10">
                          <input type="url" placeholder="Facebook" id="facebook" name="facebook" class="form-control"  required value="<?php if($edit) echo $contactData->facebook; ?> " >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="google">Google</label>
                        <div class="col-sm-10">
                          <input type="url" placeholder="Google" id="google" name="google" class="form-control" required value="<?php if($edit) echo $contactData->google; ?> " >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="pin">Pintrist</label>
                        <div class="col-sm-10">
                          <input type="url" placeholder="Pintrist code" id="pin" name="pin" class="form-control"  required value="<?php if($edit) echo $contactData->pin; ?> " >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="address">Address</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Address" id="address" name="address" class="form-control"  required value="<?php if($edit) echo $contactData->address; ?> " >
                        </div>
                      </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                          <button class="btn btn-default" type="reset">Reset</button>
                          <button class="btn btn-success col-sm-offset-1" type="submit" name="updateContactus" id="updateContactus">Submit</button>
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