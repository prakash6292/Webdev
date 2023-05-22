<?php
  // ------------change password-----------

  if(isset($_POST['change'])) {
    $old_pwd  = $_POST['old_pwd'];
    $new_pwd  = $_POST['new_pwd'];
    $re_pwd   = $_POST['re_pwd'];
    $id       = $_SESSION['user_id'];

   $qry = "select * from admin where id='$id'";
   
    $sel    = mysqli_query($con,$qry);
    $fetch  = mysqli_fetch_array($sel);
    if($fetch['password'] == $old_pwd){

      if($new_pwd == $re_pwd){
        
        if($_SESSION['role'] == "admin"){
          $upd_qry  = "update admin set password='$new_pwd' where id='$id'";
        }else{
          $upd_qry  = "update employee_master set password='$new_pwd' where id='$id'";
        }
        $update = mysqli_query($con,$upd_qry);

        if($update){ 
          $_SESSION['success_msg']  = 'Password Changed Successfully';
        }else{
          $_SESSION['error_msg']    = 'Password Not Changed';
        }

        header("location:logout.php");
        die;
      }
    }else{
      $_SESSION['error_msg']  = 'Invalid Old Password';
        
      header("location:change_pwd.php");
      die;
    }
  }
?>