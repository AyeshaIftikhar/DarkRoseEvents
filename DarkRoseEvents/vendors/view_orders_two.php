<?php
include 'vendorSession.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';
$infocus="Infocus By Mohsin";
$squery="SELECT  * FROM event_registration WHERE deal_type='$infocus'";
$s_result=mysqli_query($con,$squery);
$data=mysqli_fetch_array($s_result);
?>
<div id="content-wrapper">
	<div class="container-fluid">
<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#" style="color:#C03;">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Orders </li>
        </ol>
        
<!-- DataTables Example -->
        <div class="card mb-3">
          
          <div class="card-header">
            <i class="fas fa-table"></i>
           		All Orders
            </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" 
              cellspacing="0">
                <thead>
                  <tr>
                  	<th>Serial No.</th>
                    <th>Function Type</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>No. of Guests</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                 	<th>Serial No.</th>
                    <th>Function Type</th>
                    <th>Date</th>
                    <th>Time</th> 
                    <th>No. of Guests</th>
                  </tr>
                </tfoot>
                <tbody>
                	<?php
						while($data=mysqli_fetch_array($s_result)){ ?>
                	<tr>
                    	<td> <?php echo $data['event_id']; ?> </td>
                    	<td> <?php echo $data['Function_type']; ?></td>
                        <td> <?php echo $data['date']; ?></td>
                        <td> <?php echo $data['Function_Time']; ?></td>
                        <td> <?php echo $data['Num_of_guests']; ?> </td>
                        
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