<?php 
include 'vendorSession.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';
?>

<div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#" style="color:#C03;">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Add your address!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="add_address.php">
                <span class="float-left">Click Here</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          
            <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Work Demo</div>
              </div>
              <?php 
			  	$work=$row['Work_Type'];
				if($work=="Decor" || $work=="Photography" || 
					$work=="Invitation" ){
			  ?>
              <a class="card-footer text-white clearfix small z-1" href="add_work_demo.php">
                <span class="float-left">Add Work</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
              <?php }else if($work=="Car Rental"){?>
              <a class="card-footer text-white clearfix small z-1" 
              	href="car_work.php">
                <span class="float-left">Add Work</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
              <?php }else if($work=="Venues Arrangement"){?>
              <a class="card-footer text-white clearfix small z-1" 
              	href="venue_work.php">
                <span class="float-left">Add Work</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
              <?php } ?>
            </div>
          </div>
          
          
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">Tasks!</div>
              </div>

               <?php if($work=="Invitation" || $work=="Car Rental"){ ?>
              <a class="card-footer text-white clearfix small z-1"
               href="view_orders_one.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
              <?php }else if($work=="Photography"){
				  	$name=$row['First_Name']."".$row['Last_Name'];
				  if($name=="Mohsin Irfan"){?>
              <a class="card-footer text-white clearfix small z-1"
               href="view_orders_two.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
              <?php }else{ ?>
				 <a class="card-footer text-white clearfix small z-1"
               href="view_orders.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a> 
			  <?php }}else{?>
              <a class="card-footer text-white clearfix small z-1"
               href="view_orders.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
              <?php } ?>
            </div>
          </div>  
        </div>

        
	</div>
</div>
      <!-- /.container-fluid -->

<?php 
include 'includes/scripts.php';
include 'includes/footer.php';
?>