<?php
  require_once 'include/connection.php';
  require_once 'delete_category_db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Category</title>
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
                <h1>All Category <a href="add_product.php" class="btn btn-secondary">Add New</a></h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item">Category</li>
                  <li class="breadcrumb-item active">All</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content designation-all">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="product_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th class="no">No</th>
                          <td>Product Name </td>
                          <td>Product Price</td>
                          <td>Category Name</td>
                          <td>Description</td>
                          <td>Is Active</td>
                          <td>Show When</td>
                          <th class="action">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $count= 0;
                          $qry1 = "select * from product";
                          $res1 = mysqli_query($con,$qry1);
                          while($row1= mysqli_fetch_array($res1)){
                            $count  = $count + 1;
                        ?>
                        <tr>
                          <td align="center"><?php echo $count; ?></td>
                          <td><?php echo $row1['product_name']; ?></td>
                          <td><?php echo $row1['product_price']; ?></td>
                          <td>
                            <?php 
                              $category_parent_name =$row1['parent_category_id']; 
                              $qry2 = "select * from category where id='$category_parent_name'";
                              $res2 = mysqli_query($con,$qry2);
                                while($row2 = mysqli_fetch_array($res2)){
                                  echo $row2['category_name'];
                                }
                            ?>
                          </td>
                          <td><?php echo $row1['description']; ?></td>
                          <td><?php if($row1['is_active'] == "0"){echo "Hide";}else{ echo "Show"; }  ?></td>
                          <td><?php echo $row1['show_when'] ?></td>
                          <td align="center">
                            <a href="edit_product.php?edit_id=<?php echo $row1['id']; ?>" class="btn btn-primary">
                              <i class="nav-icon fa fa-edit"></i>
                            </a>
                            <a onclick="return checkdelete()" href="display_product.php?delete_id=<?php echo $row1['id']; ?>" class="btn btn-danger ml-3">
                              <i class="nav-icon fa fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                        <?php
                         }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
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
