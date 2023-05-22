<?php
  require_once 'include/connection.php';
  require_once 'login_db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <?php 
      require_once 'include/headerscript.php'; 
    ?>
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <b>Login</b>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <form id="login_form" method="post">
            <div class="input-group mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <p class="mb-1">
                  <a href="forgot_password.php">Forgot Password</a>
                </p>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <?php 
      require_once 'include/footerscript.php'; 
    ?>
  </body>
</html>
