<?php 
include 'Session.php';
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
          <li class="breadcrumb-item active">Add Order</li>
        </ol>
    
      <div class="card card-register mx-auto mt-5">
      <?php
		if(isset($_POST['add'])){
			$ftype=$_REQUEST['function_type'];
			$fdate=$_REQUEST['function_date'];
			$ftime=$_REQUEST['function_time'];
			$c_name=$_REQUEST['name'];
			$c_contact=$_REQUEST['contact'];
			$email=$_REQUEST['email'];
			$guest=$_REQUEST['guests'];
			$fdeal=$_REQUEST['deal'];
			$query="INSERT INTO event_registration	(Function_type,date,Function_Time,Name,PhoneNo,Email,Num_of_guests,deal_type)
		values('$ftype','$fdate','$ftime','$c_name','$c_contact','$email','$guest','$fdeal')";
			$res=mysqli_query($con,$query);
			if($res){
				echo '<script type="text/javascript">';
				echo ' alert("Order Placed Successfully!")'; 
				echo '</script>';
			}
			else{
				echo '<script type="text/javascript">';
				echo ' alert("Something wrong! Try again Later!")'; 
				echo '</script>';
			}
		}
	  ?>
      <div class="card-header">Add an Order</div>
      <div class="card-body">
      	
        <form action="#" method="POST" id="Add_event" name="addEvent">
          <div class="form-group">
                <div class="form-label-group">
                    <select aria-label="Fuction Type" name="function_type" id="ftype" 
                        class="form-control" required>
                        <option value="" disabled selected >Function Type</option>
                        <option value="Birthday"> Birthday</option>
                        <option value="Engagment"> Engagment</option>
                        <option value="Party">Party</option>
                        <option value="Nikkah"> Nikkah</option>
                        <option value="Mehndi"> Mehndi</option>
                        <option value="Walima"> Walima</option>
                        <option value="Barat"> Barat</option>
                        <option value="Business Meeting">Business Meeting</option>
                        <option value="Photoshoot">PhotoShoot</option>
                    </select>
                </div>
              </div>
            <div class="form-group">
                <div class="form-label-group">
					<input type="text" id="f_date" name="function_date" 
                    	class="form-control" maxLength="10"
                        placeholder="Function Date"
                    	required>
                    <label for="f_date">Function Date i.e. YYYY-MM-DD</label>
                </div>
            </div>
            
            <div class="form-group">
                <div class="form-label-group">
                	<span><b>Function Time:</b></span><br>
                	<input type="radio" id="lunch" name="function_time" value="Lunch"
                    	class="" > Lunch<br>
                    <input type="radio" id="dinner" name="function_time" value="Dinner"
                    	class="" > Dinner 
                </div>
            </div>
          <div class="form-group">
              <div class="form-row">
                      <div class="col-md-6">
                          <div class="form-label-group">
                            <input type="text" id="c_name" name="name" 
                          	class="form-control" placeholder="Name" required>
                          <label for="c_name">Enter Your Name</label>
                          </div>
                      </div>
                  <div class="col-md-6">
                      <div class="form-label-group">
                          <input type="tel" id="c_contact" name="contact" 
                          	class="form-control" placeholder=" Contact No." 
                            pattern="[0]{1}[3]{1}[0-9]{2}[0-9]{7}"
                            maxLength="11" required>
                          <label for="c_contact">Your Contact No.(03XX XXXXXXX)</label>
                      </div>
                  </div>
              </div>
          </div>  
           
                     
           <div class="form-group">
              <div class="form-row">
                      <div class="col-md-6">
                          <div class="form-label-group">
                            <input type="text" id="email" name="email" 
                          	class="form-control" placeholder="Email" required>
                          <label for="email">Enter Your Email</label>
                          </div>
                      </div>
                  <div class="col-md-6">
                      <div class="form-label-group">
                          <input type="number" id="guests" name="guests" 
                          	class="form-control" placeholder=" Number of Guests" 
                            required>
                          <label for="guests">Number of Guests</label>
                      </div>
                  </div>
              </div>
          </div>  

          <div class="form-group">
           <div class="form-row">
          <div class="col-md-6">
		  <div class="form-label-group">
          	<select aria-label="Deal" name="deal" id="deal" 
                        class="form-control" required>
                <option value="" disabled selected >Select a Deal</option>
                <option value="Parties Package"> Birthday</option>
                <option value="Engagment Package"> Engagment</option>
                <option value="Parties Package">Party</option>
                <option value="Engagment Package"> Nikkah</option>
                <option value="Engagment Package"> Mehndi</option>
                <option value="Walima Package"> Walima</option>
                <option value="Barat Package"> Barat</option>
               	<option value="Business Meeting Package">Business Meeting</option>
               	<option value="Pre Event Shoot">Pre Event Shoot</option>
               	<option value="Infocus By Mohsin">Shoot By Mohsin</option>
               	<option value="special pacage">Special Package</option>
           </select>
          </div>
          </div> 
		</div>
		</div>
              
		<div class="form-group">
         <div class="form-row">
          <div class="col-md-4"> 
         		 <button class="btn btn-primary btn-block" name="add" 
          		style="background-color:#C03;border-color:#C03;">Add Order</button>
            </div>
            <div class="col-md-4"> 
            	<a class="btn btn-primary btn-block" 
                style="background-color:#C03;border-color:#C03;"
                href="view_orders.php" >
                	Previous Orders
                </a>
            </div>
            <div class="col-md-4"> 
            	<a class="btn btn-primary btn-block" 
                style="background-color:#C03;border-color:#C03;"
                href="payment_details.php?deal=<?php echo $fdeal; ?>" >
                	Payment Details
                </a>
            </div>
          </div>
       	</div>
        
    </form>
</div>
</div>
</div> 
    </div>
</div>

<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>