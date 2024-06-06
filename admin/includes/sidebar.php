<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <title>Side Navigation Bar</title>
  <link rel="stylesheet" href="css/sidebar.css" />
  <link rel="stylesheet" href="css/table.css">

</head>

<body>

    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="../headerimages/banklogo.jpeg" alt=""></i>Gandhi Cooperative Bank
      </div>

      <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <!-- <i class='bx bx-bell'></i> -->
        <!-- <img src="images/profile.jpg" alt="" class="profile" /> -->
      </div>
    </nav>

    <!-- sidebar -->
    <section class="master-container">
      <div class="master-sidebar"> 
        <nav class="sidebar">
          <div class="menu_content">
            <ul class="menu_items">
              <div class="menu_title menu_dahsboard"></div>
              <!-- start -->
              <a href="./index.php"><li class="item">
                <div class="nav_link submenu_item">
                  <span class="navlink_icon">
                    <i class="bx bx-home-alt"></i>
                  </span>
                  <span class="navlink">Home Page</span>
                  <!-- <i class="bx bx-chevron-right arrow-left"></i> -->
                </div>

                <!-- <ul class="menu_items submenu">
                  <a href="#" class="nav_link sublink">Banners</a>
                  <a href="#" class="nav_link sublink">Aboutus content</a>
                  <a href="#" class="nav_link sublink">loans</a>
                  <a href="#" class="nav_link sublink">services</a>

                </ul> -->
              </li></a>
              <!-- end -->

              <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
              <!-- start -->
              <a href="./view_loanhome.php"><li class="item">
                <div class="nav_link submenu_item">
                  <span class="navlink_icon">
                    <i class="bx bx-grid-alt"></i>
                  </span>
                  <span class="navlink">Loans Home Page</span>
                  <!-- <i class="bx bx-chevron-right arrow-left"></i> -->
                </div>
<!-- 
                <ul class="menu_items submenu">
                  <a href="#" class="nav_link sublink">Services home page</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                </ul> -->
              </li></a>
              <a href="./view_downloads.php"><li class="item">
                <div class="nav_link submenu_item">
                  <span class="navlink_icon">
                    <i class="bx bx-filter"></i>
                  </span>
                  <span class="navlink">Downloads Page</span>
                  <!-- <i class="bx bx-chevron-right arrow-left"></i> -->
                </div>

                <!-- <ul class="menu_items submenu">
                  <a href="#" class="nav_link sublink">Services home page</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                </ul> -->
              </li></a>
              <a href="./view_auctions.php"><li class="item">
                <div class="nav_link submenu_item">
                  <span class="navlink_icon">
                    <i class="bx bx-loader-circle"></i>
                  </span>
                  <span class="navlink">Auctions Page</span>
                  <!-- <i class="bx bx-chevron-right arrow-left"></i> -->
                </div>

                <!-- <ul class="menu_items submenu">
                  <a href="#" class="nav_link sublink">Services home page</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                </ul> -->
              </li></a>
              <a href="./view_career.php"><li class="item">
                <div href="#" class="nav_link submenu_item">
                  <span class="navlink_icon">
                    <i class="bx bxs-magic-wand"></i>
                  </span>
                  <span class="navlink">Career Page</span>
                  <!-- <i class="bx bx-chevron-right arrow-left"></i> -->
                </div>

                <!-- <ul class="menu_items submenu">
                  <a href="#" class="nav_link sublink">Services home page</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                </ul> -->
              </li></a>
              <a href="./view_contact.php"><li class="item">
                <div  class="nav_link submenu_item">
                  <span class="navlink_icon">
                    <i class="bx bx-cloud-upload"></i>
                  </span>
                  <span class="navlink">Contact Page</span>
                  <!-- <i class="bx bx-chevron-right arrow-left"></i> -->
                </div>

                <!-- <ul class="menu_items submenu">
                  <a href="#" class="nav_link sublink">Services home page</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                  <a href="#" class="nav_link sublink">Nav Sub Link</a>
                </ul> -->
              </li></a>
              <!-- end -->
            </ul>


            <ul class="menu_items">
              <div class="menu_title menu_setting"></div>
              <!-- <li class="item">
                <a href="#" class="nav_link">
                  <span class="navlink_icon">
                    <i class="bx bx-flag"></i>
                  </span>
                  <span class="navlink">Notice board</span>
                </a>
              </li>

              <li class="item">
                <a href="#" class="nav_link">
                  <span class="navlink_icon">
                    <i class="bx bx-cog"></i>
                  </span>
                  <span class="navlink">Setting</span>
                </a>
              </li> -->
              <li class="item">
                <a href="#" class="nav_link">
                  <span class="navlink_icon">
                    <i class="bx bx-layer"></i>
                  </span>
                  <span class="navlink">Rigester User</span>
                </a>
              </li>
            </ul>

            <!-- Sidebar Open / Close -->
            <div class="bottom_content">
              <div class="bottom expand_sidebar">
                <span> Expand</span>
                <i class='bx bx-log-in'></i>
              </div>
              <div class="bottom collapse_sidebar">
                <span> Collapse</span>
                <i class='bx bx-log-out'></i>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <div class="master-table">
   