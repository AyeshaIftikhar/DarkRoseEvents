<!doctype html >
<html>
<head>
<title>Dark Rose Events</title>
<meta charset=utf-8/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link href="stylesheets/mainpage_css.css" rel="stylesheet" type="text/css" />
<link href="stylesheets/sheet.css" rel="stylesheet" type="text/css" />
<?php 
include 'connection.php'; 
include 'dropdowns/dropdownVendors.php';
?>
<div class="pageTitle" style="background-image:url( 'images/dark_events.jpg');">	<!title of page>
<h1>Dark Rose Events</h1>
</div> 	<hr>
     <div class="container"> <!second and on page movement dropdown>
    	<ul style="height:60px;background-color:white;color:black;">
        	<li><a href="#home" style="color:black;">About Vendors</a></li>
            <li><a href="#services" style="color:black;">Services</a></li>
            <li><a href="#questions" style="color:black;">FAQs</a></li>
        </ul>
        <hr>
    </div>
</head>


<body > 
<div class="MainDiv " id="home">
<! to vertially adjust two divs>
<div class="maindiv1">
<div class="vendorInformation">	<!about vendors div>
<div class="vendorContact"> 	<!vendors contact div>
<h3 >Dark Rose Events</h3><p>+92 3xx xxxxxxx <br> +92 3xx xxxxxxx</p>
</div>
<div>
<h2 style="color:#C03;font-size:30px;">Dark Rose Events</h2>
<p style="font-size:18px;margin-bottom:10px;">
     If you are looking for a company to organize your event than there is no better name to go after than Dark Rose Event Managment company. The company is known for bringing finesse and thoroughness into everything they do. The Dark Rose events organizing & wedding planning company has now made its way to Pakistan. Be it a family event, a corporate gathering, a business get together or a promotional event the company is equipped with all the resources to make any event special. With their dedication and determination,they have never missed a deadline and are always paying attention to details to bring life to the even they are managing and this is what makes them one of the best event management companies in Sahiwal today. Their work is always about creativity and making sure that their customers are fully satisfied and happy with the work they have done. If you are looking to bring a unique touch to the event you are planning on hosting then you should get in contact with Dark Rose Events Planners Sahiwal.  Having served clients locally and internationally they have all that it takes to make your day special.
</p>
</div>
</div>
</div>
<div class="maindiv2">
    <div class="bookingform">
        <?php
            if(isset($_POST['login'])){
                header("Location:user/user_login.php");
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
    <form name="BookEvents" id="eventBooking" action="#" method="post">
            <h2>Book Dark Rose Events</h2>
            <!inputs>
            <input type="text" id="uname" name="name" placeholder="your name*" required/><br>
            <input type="email" id="uemail" name="email" placeholder="your email*" required/><br>
            <input type="tel" id="phNum" name="contact" placeHolder="Phone Number(03XXXXXXXXX)" pattern="[0]{1}[3]{1}[0-9]{2}[0-9]{7}" required/><br>
            <input type="number" id="guests" name="guests" placeholder="Number of Guests" required/><br>
            <input type="text" id="fDate" name="function_date" placeholder="Funtion Date (YYYY-MM-DD)" required/><br>
                 
                 <! SELECT TAG>
            <select aria-label="Fuction Type" name="function_type" id="ftype" required>
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
            <select aria-label="Deal" name="deal" id="deal" required>
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
              <br>
              <?php if(empty($_SESSION['user_email']) && empty($_SESSION['user_email'])
                    && empty($_SESSION['user_email'])){?>
             <button type="submit" id="submit" name="login" class="inputSubmit">
                Send Enquiry
             </button>
             <?php }else{ ?>
             <button type="submit" id="submit" name="submit" class="inputSubmit">
                Send Enquiry
             </button>
             <?php } ?>   
     </form>
     </div>
  </div>
</div>
<hr>
    
<div class="servicesClass" id="services">	<!SERVICES DIV>
    <h2><strong>Services</strong></h2> 	<hr>
      <table >
       <tr>
         <td >Celebrity Arrangments</td>
         <td > Wedding Events</td>
         <td>Business Meetings/Events</td>
       </tr>
       <tr>
         <td >Free Consultancy</td>
		 <td>Corporate Events</td>
       </tr>
     </table>
</div>			<hr> <!SERVICES DIV>
    
<div id="questions" class="questions">		<! div questions>
   <h2><strong>FAQs</strong></h2> <hr>
   <p class="paragraph">Fixed Price for Plannig</p>
   <p class="paragraph"><b>Do you Handle Vendors Payment Yourself?</b><br>Yes</p>
   <p class="paragraph"><b>How much advance payment required?</b><br>90%</p>
</div><!questions div closed>
  
<?php include 'footer.php'; ?>	
</body>
</html>
