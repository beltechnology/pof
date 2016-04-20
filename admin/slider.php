<?php
include("controller/slider_controller.php");
$menuType = "slider";
?>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <section class="content">
    <div class="row"> 
      <!-- left column -->
      <div class="col-md-12"> 
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Slider</h3>
          </div>
          <!-- /.box-header --> 
          <!-- form start -->
			<?php 
            $sliderInfo = new dataInfo();
            $sliderInfoData = $sliderInfo->selectAll("slider");
            $mSliderHeading = $sliderInfo->selectAll("msliderhead");
			foreach($mSliderHeading as $mSliderHeadingData);
     //       var_dump($sliderInfoData);
            ?>
          <table width="100%" border="1" align="center">
          <tbody>
            <tr>
            <td colspan="5"><h1 align="center"> Main Slider</h1></td>
          </tr>
            <tr>
              <th scope="col">Sr. no</th>
              <!--<th scope="col">Text</th>-->
              <th scope="col">Image</th>
              <th scope="col">&nbsp;</th>
              <th scope="col">&nbsp;</th>
            </tr>
            <?php
			$srno = 0;
		foreach($sliderInfoData as $slider)
		{$srno++;
			if($srno == 6)
			{?>
            <tr>
            <td colspan="4"><h1 align="center"> Middle Slider</h1></td>
          </tr>
            <tr>
            <form role="form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
            <td>Heading</td>
            <td colspan="2">
            <input type="text" class="form-control" required name="title" value="<?php echo  $mSliderHeadingData->title;?>" />
            <input type="hidden" class="form-control" name="mSliderHeadId" value="<?php echo  $mSliderHeadingData->mSliderHeadId;?>" />
            </td>
            <td><input type="submit" value="update" name="sliderUpdate" class="form-control btn-primary" /></td>
            </form>
          </tr>
			<?php }
			?>
          <form role="form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
            <tr>
            <td><?php echo $srno;?>
              <input type="hidden" class="form-control" name="sliderId" value="<?php echo $slider->sliderId; ?>" /></td>
            <!--<td>--><input type="hidden" class="form-control" name="text"  value="<?php echo $slider->text; ?>" /><!-- </td>-->
            <td>
            <input type="file" class="form-control" name="sliderImage" /> 
            <input type="hidden" class="form-control" name="oldSliderImage" value="<?php echo $slider->sliderImage; ?>" />
            </td>
            <td align="center">
             <img src="<?php echo BaseUrl?>upload/<?php echo $slider->sliderImage; ?>" width="50" height="50" />
            </td>
            <td><input type="submit" value="update" name="sliderUpdate" class="form-control btn-primary" /></td>
          </tr>
          </form>
       <?php } ?>
          <tr>
            </tbody>
            </table>
        </div>
        <!-- /.box --> 
        
      </div>
      <!--/.col (left) --> 
      
    </div>
    <!-- /.row --> 
  </section>
</div>
<!-- /.content-wrapper -->
<?php include("common/adminFooter.php");?>
<script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>