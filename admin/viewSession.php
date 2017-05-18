<?php
include("controller/session_controller.php");
$menuType = "viewSession";
?>
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
          <h1>&nbsp;          </h1>
          <ol class="breadcrumb">
            <li><b><a href="addSession.php">Add Session </a> </b></li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Session</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="category" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Session</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						$pagination = new pagination();
						$selectCategory = new dataInfo();

						$tbl_name = "tb_session";
						$targetpage = "viewSession.php";
						$session = $pagination->selectAll($tbl_name);
						if(isset($_GET['page']))
						{
							if($_GET['page'] > 1)
							{
							$sr= $_REQUEST['page']*LIMIT;
							$sr= $sr - LIMIT+1;
							}
							else
							{
								$sr= 1;
							}
						}
						else
						{
							$sr= 1;
						}
						if($session)
						{
							foreach($session as $sessions)
							{
							?>
							<tr>
							<td><?php echo $sr++;?> </td>
							<td><?php  echo $sessions->sessionName ;?></td>
							<td> <a href="#" class="delete" data="sessionId=<?php  echo $sessions->sessionId;?>=tb_session">Delete <span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a></td>
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
