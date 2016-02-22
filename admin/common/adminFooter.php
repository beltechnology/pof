      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="http://bel-technology.com" target="_blank">bel-technology</a>.</strong> All rights reserved.
      </footer>


      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  </body>
</html>
<script>
              <?php
				  if(!$studentLogin)
				  {?>

$("ul.treeview-menu li").removeClass("active");
$("li.<?php echo $menuType; ?>").addClass("active");
<?php
				  }?>
$("a.delete").click(function()
{
	var response = confirm("Do you relly want delete.");
	if(response)
	{
		var url = $(this).attr("data").split("=");
		var ele = $(this).parent().parent();
		var fieldName = url[0];
		var value = url[1];
		var tableName = url[2];
					$.ajax({
					url: "delete.php",
					data:"tableName="+tableName+"&value="+value+"&fieldName="+fieldName,
					type:"POST",
					success: function(result){
						if(result !="")
						{
							location.reload();
						}
						else
						{
							$(ele).hide();
						}
    				}
						
					});
	}
	
});

function isTop(elem)
{
    if (elem.checked)
    {
    $("#parentCategory").attr("disabled","disabled");

    }
    else
    {
    $("#parentCategory").removeAttr("disabled");
    }
}
</script>

<?php if($msg){?>
<script>
alert("<?php echo $msg?>");
</script>
<?php
}
 if($edit ==true){?>
<script>
var parent = "<?php echo $parentId;?>";
console.log( parent );
if(parent > 0)
{
console.log( parent );
$("#parentCategory").val(parent);
}
else
{
	$("#parentCategory").attr("disabled","disabled");
	document.getElementById("top").checked = true;
}
</script>
<?php
}
?>
<?php ob_end_flush(); ?>