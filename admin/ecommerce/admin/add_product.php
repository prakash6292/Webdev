<?php
  require_once 'include/connection.php';
  require_once 'add_product_db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
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
                <h1>Add Product</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item">Product</li>
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
                    <h3 class="card-title">Add Product</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="post" id="product_form" class="form-horizontal">
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Price</label>
                        <div class="col-sm-9">
                          <input type="text" name="product_price" class="form-control price" placeholder="Enter Price">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Select Category</label>
                        <div class="col-sm-9">
                          <select name="parent_category_id" class="form-control">
                            <option value="">Select Category</option>
                            <?php
                              $qry = "select * from category";
                              $res = mysqli_query($con,$qry);
                              while($row = mysqli_fetch_array($res)){
                            ?>
                            <option class="dropdown-item" value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?>
                            </option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <textarea name="description" id="description" class="form-control ckeditor"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Is Active</label>
                        <div class="col-sm-9">
                          <input type="radio" name="is_active" id="exampleRadios1" value="1" class="mr-2" />Yes
                          <input type="radio" name="is_active" id="exampleRadios1" value="0" class="ml-2 mr-2" />No
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Show When</label>
                        <div class="col-sm-9">
                          <input type="text" name="show_when" id="show_when" value="<?php echo date('d-m-Y'); ?>" class="form-control price">
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="add" class="btn btn-secondary float-right ml-3">Add</button>
                      <button type="button" onClick="document.location.href='display_product.php'" class="btn btn-default float-right">Cancel</button>
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
