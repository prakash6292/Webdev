<?php
require_once 'include/connection.php';
require_once 'add_header_db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Category</title>
    <?php require_once 'include/headerscript.php'; ?>
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <!-- Navbar -->
    <?php require_once 'include/header.php'; ?>
    <!-- /.navbar -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Add Header</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item">Header</li>
                  <li class="breadcrumb-item active">Add</li>
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
                    <h3 class="card-title">Add Header</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="post" id="category_form" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="image" value="<?php if(!empty($_GET['image'])){echo "$_GET['user_id']"; } ?>"> 
                    <div class="card-body">
                    <?php if (!empty($_GET['image'])) { ?>
                    <div class="form-group row">
                        <label for="id_proof" class="col-sm-3 col-form-label">Header Image</label>
                        <div class="col-sm-9">
                          <div class="custom-file">
                            <input type="file" name="header_image" class="custom-file-input" id="header_image">
                            <label class="custom-file-label" for="customFile">Choose File</label>
                          </div>
                        </div>
                      </div>
                      <?php } else { ?>
                      <div class="form-group row">
                        <label for="page_name" class="col-sm-3 col-form-label">Page Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="page_name" id="page_name" placeholder="Enter Page Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="page_link" class="col-sm-3 col-form-label">Save Page Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="save_page_name" id="page_name" placeholder="Enter Save Page Name">
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="add" class="btn btn-secondary float-right ml-3">Add</button>
                      <button type="button" onClick="document.location.href='display_page.php'" class="btn btn-default float-right">Cancel</button>
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
        <?php require_once 'include/footer.php'; ?>
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- Footer Script -->
    <?php require_once 'include/footerscript.php'; ?>
    <!-- Page Footer Script -->
  </body>
</html>
