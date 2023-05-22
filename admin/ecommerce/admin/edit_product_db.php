<?php
  // ----------update designation----------
  if(isset($_POST['update'])){
    $id              = $_POST['editid'];
    $product_name        = $_POST['product_name'];
    $product_price       = $_POST['product_price'];
    $parent_category_id  = $_POST['parent_category_id'];
    $description         = $_POST['description'];
    $is_active           = $_POST['is_active'];
    $show_when           = $_POST['show_when'];
    
    $qry                 = "update product set product_name='$product_name',product_price='$product_price',parent_category_id='$parent_category_id',description='$description',is_active='$is_active',show_when='$show_when' where id='$id'";

    if(mysqli_query($con,$qry)){
      $_SESSION['success_msg']= 'Product Updated'; 
    } else{
      $_SESSION['error_msg']  = 'Product Not Updated';
    }

    header("location:display_product.php");
    die;
  }
?>