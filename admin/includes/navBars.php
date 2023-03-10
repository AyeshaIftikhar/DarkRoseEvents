
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top" 
  	>

    <a class="navbar-brand mr-1" href="index_page.php">Welcome</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
    
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    	<h2 style="color:#fff;font-style:italic;" 
        onMouseover="this.style.color='#C03'" onMouseOut="this.style.color='#fff'"
        
        	> Dark Rose Events</h2>
    </div>
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i>
        <img src="imgs/<?php echo $row['image'];?>" width="30px" height="35px" 
         />
        </i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="change_password.php">Change Password</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"
          	onMouseover="this.style.color='#C03'" onMouseOut="this.style.color='#333'"
            onmousemove="this.style.color='#C03'"
          >Logout</a>
        </div>
      </li>
    </ul>

  </nav>
    
     <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php" style="background-color:#C03;">Logout</a>
        </div>
      </div>
    </div>
  </div>