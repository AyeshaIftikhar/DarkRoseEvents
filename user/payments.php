<?php 
include 'Session.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';
?>
<div class="container">
    <div class="card card-login mx-auto mt-5">
    <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a  href='#' style="color:#C03;">DashBoard</a>
          </li>
          <li class="breadcrumb-item active">Payment Details</li>
        </ol>
        
      <div class="card-header">Search For Viewing your Payment</div>
      <div class="card-body">
      	<div class="text-center mb-4">
        	<p>Enter your Email and function Date and type to view payments.</p>
        </div>
      		<?php
			if(isset($_POST['view'])){
					$email=$_REQUEST['email'];
					$date=$_REQUEST['function_date'];
				
				$query="SELECT deal_type FROM event_registration 
					WHERE Email='$email' AND date='$date'";
				$res=mysqli_query($con,$query);
				if($res){
				$res_row=mysqli_fetch_array($res);
				$deal=$res_row['deal_type']; 
				$deal_query="SELECT * FROM deals WHERE deal_name='$deal'";
				$deal_result=mysqli_query($con,$deal_query);
				$deal_row=mysqli_fetch_array($deal_result);
				}
			}
		?>
        <form action="#" method="POST" id="Add_info" name="addinfo">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="date" name="function_date" class="form-control" placeholder="Date"  maxlength="10" required>
                  <label for="date">Date(YYYY-MM-DD)</label>
                </div>
              </div>
            </div>
          </div>

          <button class="btn btn-primary btn-block" name="view" 
          	style="background-color:#C03;border-color:#C03;">View</button>
        </form>
        </div>
      </div>
</div>
<div class="container">    
    <div class="card card-login mx-auto mt-5">
    <div class="card-header">Due Payment</div>
      <div class="card-body">
        <form >
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                  <input type="text" id="deal_name" name="Name" class="form-control" 
                  	value="<?php echo $deal_row['deal_name']; ?>"
                   readonly>
              </div>
              <div class="col-md-6">
                
                  <input type="text" id="payment" name="payment" class="form-control" 		
                  	value="<?php echo $deal_row['deal_payment'];?>"
                  readonly>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>    
</div>

<?php 
include 'includes/scripts.php';
include 'includes/footer.php';
?>