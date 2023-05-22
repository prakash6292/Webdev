<?php
require_once 'include/connection.php';
require_once 'delete_menu_db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Category</title>
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
                <h1>All Category <a href="header.php" class="btn btn-secondary">Add New</a></h1>
              </div><a href="header.php?image=<?php echo $_SESSION[
                  'user_id'
              ]; ?>" class="btn btn-secondary">Add New logo</a></h1>
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
                    <table id="category_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th class="no">No</th>
                          <th>Parent Category</th>
                          <th>Category Name</th>
                          <th class="action">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $count = 0;
                        $category_qry = 'select * from category';
                        $categories = mysqli_query($con, $category_qry);
                        while ($category = mysqli_fetch_array($categories)) {
                            $count = $count + 1; ?>
                        <tr>
                          <td align="center"><?php echo $count; ?></td>
                          <td>
                            <?php
                            $parent_category_id =
                                $category['parent_category_id'];
                            if ($parent_category_id != '0') {
                                $parent_qry = "SELECT * FROM category WHERE id = '$parent_category_id'";
                                $parents = mysqli_query($con, $parent_qry);
                                while ($parent = mysqli_fetch_array($parents)) {
                                    echo $parent['category_name'];
                                }
                            } else {
                                echo 'Parent Category';
                            }
                            ?>
                          </td>
                          <td><?php echo $category['category_name']; ?></td>
                          <td align="center">
                            <a href="edit_category.php?edit_id=<?php echo $category[
                                'id'
                            ]; ?>" class="btn btn-primary">
                              <i class="nav-icon fa fa-edit"></i>
                            </a>
                            <a onclick="return checkdelete()" href="display_category.php?delete_id=<?php echo $category[
                                'id'
                            ]; ?>" class="btn btn-danger ml-3">
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
        <?php require_once 'include/footer.php'; ?>
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- Footer Script -->
    <?php require_once 'include/footerscript.php'; ?>
    <!-- Page Footer Script -->
  </body>
</html>
