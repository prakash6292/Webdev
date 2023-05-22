<script src="asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="asset/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/dist/js/adminlte.js"></script>
<!-- Filterizr-->
<script src="asset/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/dist/js/demo.js"></script>
<!-- -----custom js--- -->
<script src="asset/js/script.js"></script>

<!-- DataTables  & Plugins -->
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

<!-- ----jquery validation---- -->
<script src="asset/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="asset/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- InputMask -->
<script src="asset/plugins/moment/moment.min.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.21.1/jquery.daterangepicker.min.js"></script>
<script src="asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Toastr -->
<script src="asset/plugins/toastr/toastr.min.js"></script>
<!-- ---------File Upload text-------- -->
<script src="asset/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- ----------ckeditor------------- -->
<script src="asset/ckeditor/ckeditor.js"></script>
<!------------ confirmation alert -------->
<script src="asset/plugins/jquery/jquery-confirm.min.js"></script>
<!-- date picker -->
<script src="asset/plugins/datepicker/popper.min.js"></script>
<script src="asset/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="asset/plugins/datepicker/select2.min.js"></script>
<script src="asset/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- ---------jquery lightbox-------- -->
<script type="text/javascript" src="asset/plugins/lightbox/jquery.fancybox.min.js"></script>
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