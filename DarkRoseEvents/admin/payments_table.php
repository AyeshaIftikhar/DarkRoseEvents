<?php
include 'AdminSession.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';
$squery="SELECT * FROM deals ";
$s_result=mysqli_query($con,$squery);
?>
<div id="content-wrapper">
	<div class="container-fluid">
<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#" style="color:#C03;">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Deals & Payments </li>
        </ol>
        
                 <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           		Deals and Prices
            </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" 
              cellspacing="0">
                <thead>
                  <tr>
                  	<th>Serial No.</th>
                    <th>Deal Name</th>
                    <th>Deal Payment</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                 	<th>Serial No.</th>
                    <th>Deal Name</th>
                    <th>Deal Payment</th>
                  </tr>
                </tfoot>
                <tbody>
                	<?php while($data=mysqli_fetch_array($s_result)){ ?>
                	<tr>
                    	<td> <?php echo $data['deal_id']; ?> </td>
                        <td> <?php echo $data['deal_name']; ?></td>
                        <td> <?php echo $data['deal_payment']; ?></td>
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