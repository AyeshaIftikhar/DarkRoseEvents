<!doctype html>
<html>
<head>
<title>Contact Us|Dark Rose Events</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link href="stylesheets/contact_sheet.css" rel="stylesheet" type="text/css">
<?php include 'dropdowns/dropdownVendors.php'?>
<div class="page" style="background-image:url('images/dark_events.jpg');">
    <h1>CONTACT US</h1>
</div><hr>    
</head>
<body>
<h1>DARK ROSE EVENTS CONTACT DETAILS</h1>
<div>
<div class="divAddress">
<img src="images/loc.png" height="70px" width="70px" >
<h3>OUR ADDRESS</h3>
<p style="font-size:20px;">40C, Main GulBerg,<br>Sahiwal56000, Pakistan</p>
</div>
<div class="divCall">
<img src="images/call.png" height="70px" width="70px" >
<h3>CALL US </h3>
<p style="font-size:20px;">(+92) 3xx xxxxxxx<br>(+92) 3xx xxxxxxx</p>
</div>
<div class="divEmail">
<img src="images/email.png" height="70px" width="70px" >
<h3>EMAIL US  </h3>
<p style="font-size:20px;">darkroseevents@gmail.com</p>
 </div>
</div>
 <div style="padding-top:100px;">
    <h1 >FEEL FREE TO CONTACT US!</h1>
    </div>
    
    <div>
    	<?php
			if(isset($_POST['send'])){
				$from=$_REQUEST['email'];
				$subject=$_REQUEST['subject'];
				$body=$_REQUEST['message'];
				$to="ayeshaiftikhar189@gmail.com";
				$headers="MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
				$headers .= "From: $from" . "\r\n";
				if(mail($to,$subject,$body,$headers)){
					echo "Email Sent.";
				}
				else{echo "Try again later.";}
				
				
			}
		?>
    	<form name="Message_Form" id="msg_form" action="#" method="POST">
        <input type="email" name="email" id="email" placeholder="Your Email Address" required/><br>
       <input type="text" name="subject" id="subjt" placeholder="Subject"/> <br>
       <textarea name="message" rows="7" cols="50" placeholder="Your Message Here..."></textarea><br>
        <button type="submit" name="send" class="inputSubmit" style="margin-left:0px;">Send Message</button>
        </form>
</div>
<?php include 'contact_footer.php'; ?>
</body>
</html>