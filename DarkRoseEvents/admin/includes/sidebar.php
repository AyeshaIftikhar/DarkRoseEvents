<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav" style="background-color:#333;">
      <li class="nav-item active">
        <a class="nav-link" href="index_page.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="add_image.php">
          <i class="fas fa-fw fa-image"></i>
          <span style="color:#fff;">Add Image</span></a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="../MainPage.php">
          <i class="fas fa-fw fa-image"></i>
          <span style="color:#fff;">Home Page</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span style="color:#fff;">Charts</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span style="color:#fff;">Work of Vendors </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header" style="color:#C02;">Data Tables:</h6>
          <a class="dropdown-item" href="venue_table.php">Venues</a>
          <a class="dropdown-item" href="cars_table.php">Cars </a>
        </div>
      </li>
      
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span style="color:#fff;">Users</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header" style="color:#C02;">Clinets/Employees:</h6>
          <a class="dropdown-item" href="client_table.php">Clients</a>
          <a class="dropdown-item" href="vendors_table.php">Vendors</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header" style="color:#C02;">Other Users:</h6>
          <a class="dropdown-item" href="admin_table.php">Admins</a>
          
        </div>
      </li>
      
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span style="color:#fff;">Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header" style="color:#C02;">Login Screens:</h6>
          <a class="dropdown-item" href="admin_login.php">Login</a>
          <a class="dropdown-item" href="register.php">Register</a>
          <a class="dropdown-item" href="forget_password.php">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header" style="color:#C02;">Other Pages:</h6>
          <!--<a class="dropdown-item" href="404.html">404 Page</a> -->
          <a class="dropdown-item" href="order_details.php">Order Details</a>
        </div>
      </li>
      
        <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#DeleteAccountModal">
          <i class="fas fa-fw fa-folder"></i>
          <span style="color:#fff;">Delete Account</span></a>
      </li>
      
    </ul>
    
    <!-- Delete Account Model -->
     <div class="modal fade" id="DeleteAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Delete" below if you are ready to permanently delete your account.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="del_account.php?delid=<?php echo $row['ID'];?>" style="background-color:#C03;">Delete</a>
        </div>
      </div>
    </div>
  </div>