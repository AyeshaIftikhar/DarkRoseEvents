<?php 
include 'AdminSession.php';
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
          <li class="breadcrumb-item active">Add Details</li>
        </ol>
    
      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add an Event</div>
      <div class="card-body">
      	
        <form action="#" method="POST" id="Add_event" name="addEvent">
          <div class="form-group">
                <div class="form-label-group">
                    <select aria-label="Fuction Type" name="function_type" id="ftype" 
                        class="form-control" >
                        <option value="" disabled selected >Function Type</option>
                        <option value="Birthday"> Birthday</option>
                        <option value="Engagment"> Engagment</option>
                        <option value="Party">Party</option>
                        <option value="Nikkah"> Nikkah</option>
                        <option value="Mehndi"> Mehndi</option>
                        <option value="Walima"> Walima</option>
                        <option value="Barat_Deals"> Barat</option>
                        <option value="Business Meeting">Business Meeting</option>
                        <option value="Photoshoot">PhotoShoot</option>
                    </select>
                </div>
              </div>
            <div class="form-group">
                <div class="form-label-group">
					<input type="text" id="f_date" name="function_date" 
                    	class="form-control" 
                        placeholder="Function Date" maxlength="10"
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
                            <input type="text" id="c_name" name="client_name" 
                          	class="form-control" placeholder="Client Name" required>
                          <label for="c_name">Client Name</label>
                          </div>
                      </div>
                  <div class="col-md-6">
                      <div class="form-label-group">
                          <input type="tel" id="c_contact" name="client_contact" 
                          	class="form-control" placeholder="Client Contact No." 
                            pattern="[0]{1}[3]{1}[0-9]{2}[0-9]{7}" maxlength="11"
                            required>
                          <label for="c_contact">Client Contact No.(03XX XXXXXXX)</label>
                      </div>
                  </div>
              </div>
          </div>  
            
          <div class="form-group">
            <div class="form-label-group">
				<input type="number" id="guestNo" name="guests" 
                     class="form-control" placeholder="Number of Guests"
                     required>
               <label for="guestNo">Number of Guests</label>
            </div>
          </div>
          
          <div class="form-group">
                <div class="form-row">
          		<div class="col-md-6"> 
                    <select aria-label="Fuction Status" name="function_status" id="fstatus" 
                            class="form-control">
                        <option value="" disabled selected >Function Status</option>
                        <option value="Completed"> Completed</option>
                        <option value="Delayed"> Delayed</option>
                        <option value="Canceled">Canceled</option>
                    </select>
                    </div>
                    <div class="col-md-6"> 
                    <select aria-label="Deal" name="deal" id="deal" 
                        class="form-control" >
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
		<div class="form-group">
         <div class="form-row">
          <div class="col-md-4"> 
         		 <button class="btn btn-primary btn-block" name="add" 
          			style="background-color:#C03;border-color:#C03;">Add Event</button>
            </div>
            <div class="col-md-4"> 
            	<a class="btn btn-primary btn-block" 
                style="background-color:#C03;border-color:#C03;"
                href="order_details.php" >
                	View Events
                </a>
            </div>
            <div class="col-md-4"> 
            	<a class="btn btn-primary btn-block" 
                style="background-color:#C03;border-color:#C03;"
                href="new_orders.php" >
                	New Orders
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
if(isset($_POST['add'])){
	$ftype=$_REQUEST['function_type'];
	$fdate=$_REQUEST['function_date'];
	$ftime=$_REQUEST['function_time'];
	$c_name=$_REQUEST['client_name'];
	$c_contact=$_REQUEST['client_contact'];
	$guest=$_REQUEST['guests'];
	$fstatus=$_REQUEST['function_status'];
	$fdeal=$_REQUEST['deal'];
	
	$query="INSERT INTO order_details
	(function_type,Date,function_time,client_name,client_contact,
		Num_of_Guests,status_of_event,deal_type)
	values('$ftype','$fdate','$ftime','$c_name',
		'$c_contact','$guest','$fstatus','$fdeal')";
	$res=mysqli_query($con,$query);
	if($res){
		echo '<script type="text/javascript">';
		echo ' alert("Order Information Added Successfully!")'; 
		echo '</script>'; 
	}
	else{
		echo '<script type="text/javascript">';
		echo ' alert("Something Wrong, Try Again Later!")'; 
		echo '</script>'; 
	}
}
?>