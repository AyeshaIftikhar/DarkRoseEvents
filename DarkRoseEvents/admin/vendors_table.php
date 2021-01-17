<?php 
include 'AdminSession.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';
$query="Select * from vendors";
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
          <li class="breadcrumb-item active">Vendors</li>
        </ol>
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           		Vendors/Employees
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" 
              cellspacing="0">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Work_type/Speciality</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Work_type/Speciality</th>
                  </tr>
                </tfoot>
                <tbody>
                	<?php while($data=mysqli_fetch_array($res)){ ?>
                	<tr>
                    	
                    	<td> <?php echo $data['First_Name']; ?></td>
                        <td> <?php echo $data['Last_Name']; ?></td>
                        <td> <?php echo $data['Email']; ?></td>
                        <td> <?php echo $data['PhoneNo']; ?></td>
                        <td> <?php echo $data['Work_Type']; ?></td>
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