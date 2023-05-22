<?php
// ----------add Category--------
if (isset($_POST['add'])) {
    $parent_category_id = $_POST['parent_category_id'];
    $category_name = $_POST['category_name'];

    $qry = "insert into category(parent_category_id,category_name)values('$parent_category_id','$category_name')";

    if (mysqli_query($con, $qry)) {
        $_SESSION['success_msg'] = 'Category Added';
    } else {
        $_SESSION['error_msg'] = 'Category Not Added';
    }

    header('location:display_category.php');
    die();
}
?>
