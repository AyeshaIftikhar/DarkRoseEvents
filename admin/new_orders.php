<?php
include 'AdminSession.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';
$squery="SELECT * FROM event_registration WHERE date>=CURDATE()";
$s_result=mysqli_query($con,$squery);
?>
<div id="content-wrapper">
	<div class="container-fluid">
<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#" style="color:#C03;">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">New Orders</li>
        </ol>
        
                 <!-- DataTables Example -->
        <div class="card mb-3">
        	<div class="text-center">
        	<p>
            	It is the detail of all the new events that are pending.
            </p>
            </div>
            <div>
            <a class="btn btn-primary" style="background-color:#C03;border-color:#C03;"
            	href="all_orders.php">View All</a>
            </div>
            <br>
          <div class="card-header">
            <i class="fas fa-table"></i>
           		New Oreders 
            </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" 
              cellspacing="0">
                <thead>
                  <tr>
                  	<th>Serial No.</th>
                    <th>Client Name</th>
                    <th>Client Phone No</th>
                    <th>Client Email </th>
                    <th>Function Type</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>No. of Guests</th>
                    <th>Selected Deal</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                 	<th>Serial No.</th>
                    <th>Client Name</th>
                    <th>Client Phone No</th>
                    <th>Client Email </th>
                    <th>Function Type</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>No. of Guests</th>
                    <th>Selected Deal</th>
                  </tr>
                </tfoot>
                <tbody>
                	<?php while($data=mysqli_fetch_array($s_result)){ ?>
                	<tr>
                    	<td> <?php echo $data['event_id']; ?> </td>
                        <td> <?php echo $data['Name']; ?></td>
                        <td> <?php echo $data['PhoneNo']; ?></td>
                        <td> <?php echo $data['Email']; ?></td>
                    	<td> <?php echo $data['Function_type']; ?></td>
                        <td> <?php echo $data['date']; ?></td>
                        <td> <?php echo $data['Function_Time']; ?></td>
                        <td> <?php echo $data['Num_of_guests']; ?> </td>
                        <td> <?php echo $data['deal_type']; ?></td>
                    </tr>
					<?php } ?>
                </tbody>
              </table>
            </div>
          </div>
 <!--  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
        </div> 

        
      </div>  
</div>

<?php 
include 'includes/scripts.php';
include 'includes/footer.php';
?>