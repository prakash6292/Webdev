<?php
  require_once 'include/connection.php';
  require_once 'forgot_password.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
     <?php 
        require_once 'include/headerscript.php'; 
      ?>
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
          <b>Forgot</b> Password
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

          <form action="forgot_password_db.php" method="post" id="forgot_password">
            <div class="input-group mb-3">
              <input name="email" type="email" class="form-control" placeholder="user@gmail.com">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button name="forgot_password" type="submit" class="btn btn-primary btn-block">Request new password</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
    <?php 
      require_once 'include/footerscript.php'; 
    ?>
  </body>
</html>
