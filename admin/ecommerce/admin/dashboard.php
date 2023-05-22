<?php 
  require_once 'include/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
                <h1>Dashboard</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
                      
        <!-- Main content -->
       
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
