<?php
  require_once 'include/connection.php';
  require_once 'change_pwd_db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Password</title>
    <?php 
      require_once 'include/headerscript.php'; 
    ?>
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <?php 
        require_once 'include/header.php'; 
      ?>
      <!-- /.navbar -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Change Password</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item active">Change Password</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- /.card -->
                <!-- Horizontal Form -->
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Change Password</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="post" id="changepwd_form" class="form-horizontal">
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="oldpassword" class="col-sm-3 col-form-label">Old Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="old_pwd" id="old_pwd" placeholder="Old Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="newpassword" class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="new_pwd" class="form-control" id="new_pwd" placeholder="New Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="repassword" class="col-sm-3 col-form-label">Retype Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="re_pwd" class="form-control" id="re_pwd" placeholder="Retype Password">
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="change" class="btn btn-secondary float-right ml-3">Change</button>
                      <button type="reset" class="btn btn-default float-right">Cancel</button>
                    </div>
                    <!-- /.card-footer -->
                  </form>
                </div>
                <!-- /.card -->

              </div>
              <!--/.col (left) -->
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <?php 
          require_once "include/footer.php"; 
        ?>
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- Footer Script -->
    <?php 
      require_once 'include/footerscript.php'; 
    ?>
    <!-- Page Footer Script -->
  </body>
</html>
