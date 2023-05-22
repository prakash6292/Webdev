<?php
  require_once 'include/connection.php';
  require_once 'edit_category_db.php';

  if(isset($_GET['edit_id'])){
    $edit_id = $_GET['edit_id'];
    $qry     = "select * from category where id='$edit_id'";
    $res     = mysqli_query($con,$qry);
    $row     = mysqli_fetch_array($res);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Category</title>
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
                <h1>Edit Category</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item">Category</li>
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
                    <h3 class="card-title">Edit Category</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="post" id="category_form" class="form-horizontal">
                  <input type="hidden" name="editid" value="<?php echo $row['id']; ?>">
                   <div class="card-body">                       
                      <div class="form-group row">
                        <label for="category" class="col-sm-3 col-form-label">Parent Category</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="parent_category_id" id="category">
                            <option value="">Select</option>
                            <?php
                              $parent_id = $row['parent_category_id'];
                              $qry1 = "select * from category";
                              $res1 = mysqli_query($con,$qry1);
                              if($parent_id == "0"){
                            ?>
                            <option value="0" selected>Parent Category</option>
                            <?php 
                               while($row1 = mysqli_fetch_array($res1)){
                            ?>
                            <option value="<?php echo $row1['id']; ?>">
                              <?php 
                                echo $row1['category_name'];  
                              ?>
                            </option>
                            <?php
                              }
                            }else{
                               while($row1 = mysqli_fetch_array($res1)){
                              ?>
                            <option value="<?php echo $row1['id']; ?>" <?php if($parent_id == $row1['id']){ echo "selected"; } ?>>
                              <?php 
                                echo $row1['category_name'];  
                              ?>
                            </option>
                            <?php
                                }
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="category_name" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="category_name" id="category_name" value="<?php echo $row['category_name']; ?>" placeholder="Enter Category Name">
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
