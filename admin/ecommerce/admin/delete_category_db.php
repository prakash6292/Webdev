<?php
  // ---------delete designation---------
  if(isset($_GET['delete_id'])){
    $id     = $_GET['delete_id'];

    $qry    = "delete from category where id='$id'";
    $res    = mysqli_query($con,$qry);

    if($res){
      $_SESSION['success_msg']  = 'Category Deleted'; 
    }else{
      $_SESSION['error_msg']    = 'Category Not Delete';
    }

    header("location:display_category.php");
    die;
  }
?>