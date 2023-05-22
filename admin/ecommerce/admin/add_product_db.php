<?php
  // ----------add Category--------
  if(isset($_POST['add'])){
    $product_name        = $_POST['product_name'];
    $product_price       = $_POST['product_price'];
    $parent_category_id  = $_POST['parent_category_id'];
    $description         = $_POST['description'];
    $is_active           = $_POST['is_active'];
    $show_when           = $_POST['show_when'];
    
    $qry                 = "insert into product(product_name,product_price,parent_category_id,description,is_active,show_when)values('$product_name','$product_price','$parent_category_id','$description','$is_active','$show_when')";
    if(mysqli_query($con,$qry)){ 
      $_SESSION['success_msg']  = 'Product Added';
    }else{
      $_SESSION['error_msg']    = 'Product Not Added';
    }

    header("location:display_product.php");
    die;
  }
?>