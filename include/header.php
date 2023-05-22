<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <?php 
      require_once "include/header_script.php";
    ?>

</head>

<body>
<!-- nav-menu-main -->
<nav class="nav-menu-main position-fixed start-0 end-0 top-0 z-3">
    <div class="container">
      <div
        class="align-items-start align-items-lg-center d-flex justify-content-between flex-lg-row flex-column position-relative">
        <a href="#" class="position-absolute top-0 end-0 py-2">
          <svg xmlns="http://www.w3.org/2000/svg" id="menu_icons" class="d-lg-none" width="32" height="32"
            fill="#000000" viewBox="0 0 256 256">
            <path
              d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
            </path>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" id="close_icons" class="d-none" width="32" height="32" fill="#000000"
            viewBox="0 0 256 256">
            <path
              d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z">
            </path>
          </svg>
        </a>
        <div class="logo">
          <img src="assate/images/Untitled-2 1.png" alt="" />
        </div>
        <ul class="align-items-start align-items-lg-center d-flex nav-bar flex-lg-row flex-column">
          <li class="nav-items">
            <a href="index.php">Home</a>
          </li>
          <li class="nav-items">
            <a href="Services.php">Services</a>
          </li>
          <li class="nav-items">
            <a href="Hiredevelopers.php">Hire Developers </a>
          </li>
          <li class="nav-items">
            <a href="Portfolio.php">Portfolio</a>
          </li>
          <li class="nav-items">
            <a href="#">About Us</a>
          </li>
          <li class="nav-items">
            <a href="#">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>