<?php
  // ----------update designation----------
  if(isset($_POST['update'])){
    $id                 = $_POST['editid'];
    $parent_category_id = $_POST['parent_category_id'];
    $category_name      = $_POST['category_name'];
    $qry                = "update category set parent_category_id='$parent_category_id',category_name='$category_name' where id='$id'";

    if(mysqli_query($con,$qry)){
      $_SESSION['success_msg']= 'Category Updated'; 
    } else{
      $_SESSION['error_msg']  = 'Category Not Updated';
    }

    header("location:display_category.php");
    die;
  }
?>