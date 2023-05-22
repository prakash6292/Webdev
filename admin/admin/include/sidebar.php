<?php
  $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="" class="brand-link">
    <img src="asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Time Management</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION['first_name']; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2" id="toggle">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="dashboard.php" class="nav-link <?= ($activePage == 'dashboard') ? 'active':''; ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link <?php if($activePage == 'change_pwd'){ echo "active";} ?>">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Profile
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="change_pwd.php" class="nav-link <?= ($activePage == 'change_pwd') ? 'active':''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Change Password</p>
              </a>
            </li>
          </ul>
        </li> 

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>