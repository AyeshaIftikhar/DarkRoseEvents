<?php 
include 'AdminSession.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';
$query="Select * from venues_demo";
$res=mysqli_query($con,$query);
?>

<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#" style="color:#C03">Dashboard</a>
          </li>
          <li class="breadcrumb-item ">Tables</li>
          <li class="breadcrumb-item active">Venues</li>
        </ol>
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           		Venues
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" 
              cellspacing="0">
                <thead>
                  <tr>
                  	<th>Serial No.</th>
                    <th>Vendor Name</th>
                    <th>Vendor Email</th>
                    <th>Venue  Name</th>
                    <th>Venue Address</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Serial No.</th>
                    <th>Vendor Name</th>
                    <th>Vendor Email</th>
                    <th>Venue  Name</th>
                    <th>Venue Address</th>
                  </tr>
                </tfoot>
                <tbody>
                	<?php while($data=mysqli_fetch_array($res)){ ?>
                	<tr>
                    	
                    	<td> <?php echo $data['venue_id']; ?></td>
                        <td> <?php echo $data['vendor_name']; ?></td>
                        <td> <?php echo $data['vendor_email']; ?></td>
                        <td> <?php echo $data['place_name']; ?></td>
                        <td> <?php echo $data['venue_address']; ?></td>
                    </tr>
					<?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div> 
     </div>
   </div>

<?php 
include 'includes/scripts.php';
include 'includes/footer.php';
?>