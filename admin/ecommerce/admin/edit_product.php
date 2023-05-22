<?php
  require_once 'include/connection.php';
  require_once 'edit_product_db.php';

  if(isset($_GET['edit_id'])){
    $edit_id = $_GET['edit_id'];
    $qry1   = "select * from product where id='$edit_id'";
    $res1   = mysqli_query($con,$qry1);
    $row1   = mysqli_fetch_array($res1);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Product</title>
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
                <h1>Edit Product</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item">Product</li>
                  <li class="breadcrumb-item active">Edit</li>
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
                    <h3 class="card-title">Edit Product</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="post" id="product_form" class="form-horizontal">
                    <input type="hidden" name="editid" value="<?php echo $row1['id']; ?>">
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="product_name" class="form-control" value="<?php echo $row1['product_name']; ?>" placeholder="Enter Product Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Price</label>
                        <div class="col-sm-9">
                          <input type="text" name="product_price" class="form-control price" value="<?php echo $row1['product_price']; ?>" placeholder="Enter Price">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Select Category</label>
                        <div class="col-sm-9">
                          <select name="parent_category_id" class="form-control">
                            <option value="">Select Category</option>
                            <?php
                              $parent_category_id = $row1['parent_category_id'];
                              $qry2 = "select * from category";
                              $res2 = mysqli_query($con,$qry2);
                              while($row2 = mysqli_fetch_array($res2)){
                            ?>
                            <option class="dropdown-item" value="<?php echo $row2['id']; ?>" <?php if($parent_category_id == $row2['id']){echo "selected"; } ?>><?php echo $row2['category_name']; ?>
                            </option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <textarea name="description" id="address" class="form-control ckeditor"><?php echo $row1['description']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Is Active</label>
                          <div class="col-sm-9">
                            <input type="radio" name="is_active" id="exampleRadios1" value="1" class="mr-2" <?php if($row1["is_active"] == "1"){echo "checked";} ?>/>Yes
                            <input type="radio" name="is_active" id="exampleRadios1" value="0" class="ml-2 mr-2" <?php if($row1["is_active"] == "0"){echo "checked"; } ?>/>No
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Show When</label>
                        <div class="col-sm-9">
                          <input type="text" name="show_when" id="show_when" value="<?php echo $row1['show_when']; ?>" class="form-control price" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="update" class="btn btn-secondary float-right ml-3">Edit</button>
                      <button type="button" onClick="document.location.href='display_category.php'" class="btn btn-default float-right">Cancel</button>
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
