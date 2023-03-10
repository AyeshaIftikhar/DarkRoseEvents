<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav" style="background-color:#333;">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="imgs/<?php echo $row['vendor_pic']; ?>" target="_blank">
        	<img src="imgs/<?php echo $row['vendor_pic']; ?>" width="140px" height="150px" 
            	border='2px'  
                style="margin-left:18px;margin-right:18px;border-color:#C03;"/>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="add_image.php">
          <i class="fas fa-fw fa-image"></i>
          <span style="color:#fff;">Add Image</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="../decorator.php">
          <i class="fas fa-fw fa-image"></i>
          <span style="color:#fff;">Your Work</span></a>
      </li> 
        
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span style="color:#fff;">About Business</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header" style="color:#C02;">About Us:</h6>
          <a class="dropdown-item" href="../DarkEvents.php">Our Events</a>
          <a class="dropdown-item" href="../AboutUs.php">About US</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header" style="color:#C02;">Other:</h6>
          <a class="dropdown-item" href="../contact_us.php">Contact Us</a>
          
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