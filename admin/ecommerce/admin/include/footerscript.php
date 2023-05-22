<script src="asset/plugins/jquery/jquery.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/dist/js/adminlte.js"></script>
<script src="asset/dist/js/demo.js"></script>
<!-- -----custom js--- -->
<script src="asset/js/script.js"></script>

<!-- ----jquery validation---- -->
<script src="asset/plugins/jquery-validation/jquery.validate.min.js"></script>
<!-- Toastr -->
<script src="asset/plugins/toastr/toastr.min.js"></script>
<!------------ confirmation alert -------->
<script src="asset/plugins/jquery/jquery-confirm.min.js"></script>
<!-- DataTables & Plugins -->
<script src="asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="asset/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="asset/plugins/jszip/jszip.min.js"></script>
<script src="asset/plugins/pdfmake/pdfmake.min.js"></script>
<script src="asset/plugins/pdfmake/vfs_fonts.js"></script>
<script src="asset/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="asset/plugins/datatables/dataTables.dateTime.min.js"></script>
<!-- ----------ckeditor------------- -->
<script src="asset/ckeditor/ckeditor.js"></script>

<!-- datepicker -->
<script src="asset/plugins/datepicker/jquery-ui.js"></script>
<!-- ----------toastr alert---------- -->
<script type="text/javascript">
// -----------success msg------------

<?php 
  if(!empty($_SESSION['success_msg'])){ 
?>
  toastr.success("<?php echo $_SESSION['success_msg']; ?>");
<?php 
  unset($_SESSION['success_msg']); 
?>
<?php 
  }
?>

// ------------error msg------------
<?php 
  if(!empty($_SESSION['error_msg'])){ 
?>
  toastr.error("<?php echo $_SESSION['error_msg']; ?>");
<?php 
  unset($_SESSION['error_msg']); 
?>
<?php 
  } 
?>
</script>