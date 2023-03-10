<!doctype html>
<html>
<head>
<title>Events|Dark Rose Events</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link href="stylesheets/sheet.css" rel="stylesheet" type="text/css" />
<link href="stylesheets/mainpage_css.css" rel="stylesheet" type="text/css" />
<?php include 'connection.php'; include 'dropdowns/dropdownVendors.php';?>
<div class="pageTitle" style="background-image:url(images/dark_events.jpg)">
<h1>Dark Rose Events</h1>
</div><hr>
</head>

<body>
    <div>
    	<h1 style="">Welcome to Dark Rose Events</h1>
        <p style="color:gray;text-align:center;font-size:22px;">Our ultimate goal is to make you event magical!</p>
    </div>
    
<div class="MainDiv">
<div class="maindiv1">
    <div style="margin-left:50px;margin-right:50px;">
     	<img src="images/events.jpg" alt="_blank" width="100%" height="570px"/>
    </div>
</div>
<div class="maindiv2">
    <div class="">
    	<h2 style="text-align:left;font-style:normal;font-size:33px;margin-left:20px;">At Dark Rose Events: </h2>
       <p style="margin-top:50px;margin-left:30px;margin-right:30px;text-align:justify;color:gray;font-size:24px;">
       We specialize in Planning Weddings, Parties, Corporate Events, Social gatherings etc. Our first priority is to understand our client’s needs and provide them the best possible arrangements, while staying within their budget. We coordinate your events according to your wishes and have a complete set up of event management, farm house booking, decorations and catering. We always follow latest trends and ensure that your event is as flawless as it is memorable. With every event, we come up with breakthrough ideas by adding creative touches to make it unique. Our services are tailored to specific needs. We do as much or as little as you desire.
       </p>
    </div>
</div>
</div>
    
        
    <div class="call">
    	<h1 style="padding-top:80px;color:#000;">CALL DARK ROSE EVENTS TO BOOK YOUR EVENT!</h1>
        <p class="callParagraph" style="#333;">+92 3xx xxxxxxx | +92 3xx xxxxxxx</p>
    </div>
    
    <div style="background-color:#E7E7E7;">
    <?php
		include 'connection.php';
		if(isset($_POST['login_demand'])){
			header('Location:user/user_login.php');
		}
		else if(isset($_POST['submit'])){
				$ftype=$_REQUEST['function_type'];
				$fdate=$_REQUEST['function_date'];
				$ftime=$_REQUEST['function_time'];
				$c_name=$_REQUEST['name'];
				$c_contact=$_REQUEST['contact'];
				$email=$_REQUEST['email'];
				$guest=$_REQUEST['guests'];
				$fdeal=$_REQUEST['deal'];
				$query="INSERT INTO event_registration	
					(Function_type,date,Function_Time,Name,
				PhoneNo,Email,Num_of_guests,deal_type)
					values('$ftype','$fdate','$ftime','$c_name',
				'$c_contact','$email','$guest','$fdeal')";
				$res=mysqli_query($con,$query);
				if($res){
					echo 'Ordered Successfully! Now view the Payment Details';
				}
				else{echo 'Something Wrong! Try Again Later';}
	}
	?>
    
    	<h2 style="padding-top:30px;padding-bottom:30px;">
        	Feel Free to Book Our Events!</h2>
    <form class="formStyle" name="BookEvents" id="EventBooking" action="#" method="post" >
       <h3 style="color:gray;">The only way to do great work is to love what you do!</h3>
          <input tyoe="text" id="uname" name="name" placeholder="your name*" required
             class="formInputs"/>
          <input type="email" id="uemail" name="email" placeholder="your email*" class="formInputs" required/><br>
          <input type="tel" id="phNum" name="contact" placeHolder="Phone Number(03XXXXXXXXX)" class="formInputs" pattern="[0]{1}[3]{1}[0-9]{2}[0-9]{7}" required/>
          <input type="number" id="guests" name="guests" class="formInputs" placeholder="Number of Guests" required/><br>
          <input type="text" id="fDate" name="function_date" class="formInputs" placeholder="Funtion Date (YYYY-MM-DD)" required/>

         <select aria-label="Function Type" name="function_type" id="ftype" 
         		class="formSelect" >
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
        </select> <br>
             
        <span style="margin-left:80px"><b>Function Time:</b></span>
        <input type="radio" id="lunch" name="function_time" value="Lunch" style="width:10px;margin-left:10px;"/>Lunch
   		<input type="radio" id="dinner" name="function_time" value="Dinner" style="width:10px;margin-left:10px"/>Dinner<br>	
        <select aria-label="Deal" name="deal" id="deal" class="formSelect" required>
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
      </select><br><br>
            <?php if(empty($_SESSION['user_email']) 
				&& empty($_SESSION['vendor_email']) &&
				 empty($_SESSION['admin_email'])){ ?>
             <button type="submit" id="submit" name="login_demand" class="formSubmit" >
             	Send Inquiry
             </button>
            <?php
			 }else{?>
            <button type="submit" id="submit" name="submit" class="formSubmit">
             	Send Inquiry
            </button>
            <?php }?>
      </form>
    </div>
<?php include "footer.php"; ?>
</body>
</html>