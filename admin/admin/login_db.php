<?php
  // ----------login----------
  if(isset($_POST['login'])){
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // $sel_emp_qry    = "select * from employee_master where email='$email' and password='$password'";
    // $sel_emp        = mysqli_query($con,$sel_emp_qry);
    // $emp_rows       = mysqli_num_rows($sel_emp);

    $sel_admin_qry  = "select * from admin where email='$email' and password='$password'";
    $sel_admin      = mysqli_query($con,$sel_admin_qry);
    $rows           = mysqli_num_rows($sel_admin);

    if($rows){
      $fetch_row              = mysqli_fetch_array($sel_admin);
      $_SESSION['role']       = 'admin';
      $_SESSION['user_id']    = $fetch_row['id'];
      $_SESSION['first_name'] = $fetch_row['first_name']; 
      $_SESSION['user_email'] = $fetch_row['email'];
      
      header("location:dashboard.php");
      die; 
    }else{
      $_SESSION['error_msg']  = 'Wrong Email Or Password';
        
      header("location:index.php");
      die; 
    }
  }
?>