<?php 
include 'AdminSession.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';
$squery="SELECT * FROM order_details";
$s_result=mysqli_query($con,$squery);
?>
<div id="content-wrapper">
	<div class="container-fluid">
<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#" style="color:#C03;">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Order Details</li>
        </ol>
        
         <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="text-center">
            <p>
            	It is the detail of all the previous events completed by your organization.
            </p>
          </div>
            <div class="text-center">
            	Add Event Details:
            <a class="btn btn-primary" style="background-color:#C03;border-color:#C03;"
            	href="add_event.php">Add</a>
            </div>
            <br>
          <div class="card-header">
            <i class="fas fa-table"></i>
           		Completed Events 
            </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" 
              cellspacing="0">
                <thead>
                  <tr>
                  	<th>Serial No.</th>
                    <th>Function Type</th>
                    <th>Selected Deal</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>No. of Guests</th>
                    <th>Client Name</th>
                    <th>Client Contact</th>
                     <th>Status of Event</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  	<th>Serial No.</th>
                    <th>Function Type</th>
                     <th>Selected Deal</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>No. of Guests</th>
                    <th>Client Name</th>
                    <th>Client Contact</th>
                     <th>Status of Event</th>
                  </tr>
                </tfoot>
                <tbody>
                	<?php while($data=mysqli_fetch_array($s_result)){ ?>
                	<tr>
                    	<td> <?php echo $data['order_id']; ?> </td>
                    	<td> <?php echo $data['function_type']; ?></td>
                        <td> <?php echo $data['deal_type']; ?></td>
                        <td> <?php echo $data['Date']; ?></td>
                        <td> <?php echo $data['function_time']; ?></td>
                        <td> <?php echo $data['Num_of_Guests']; ?> </td>
                    	<td> <?php echo $data['client_name']; ?></td>
                        <td> <?php echo $data['client_contact']; ?></td>
                        <td> <?php echo $data['status_of_event']; ?></td>
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