<link href="stylesheets/footerStyleSheet.css" rel="stylesheet" type="text/css">
<hr>
<footer>
	<div class="divisionClass">
        <h3 >About Dark Rose Events:</h3>
        <p style="color:#fff;">
        	Dark Rose Events allows users to find and book pre-qualified, trusted, and reviewed wedding vendors, get special prices, and find wedding inspirations to realize your dream wedding.
        
        </p>
        <h3>Contact Dark Rose Events:</h3>
        <p style="color:#fff;">
        	+92 3xx xxxxxxx<br>
            +92 3xx xxxxxxx
        </p>
    </div>
    
    <div class="divLinks">
    	<h3 style="margin-right:50px;">Useful Links</h3>
		<a href="Deals.php">Deals</a><br><br>
         <a href="vendors.php">Vendors</a> <br><br>
         <a href="dark_events.php">Events</a><br><br>
         <a href="contact.php">Contact Us</a><br><br> 
         <a href="aboutUs.php">About Us</a>
    </div>
    
     <div class="divCategories">
    	<h3 style="margin-right:80px;">Categories</h3>
		<a href="vendors/venue.php">Venues</a><br><br>
        <a href="vendors/photographer.php">Photographers</a> <br><br>
        <a href="vendors/decorator.php">Decorators</a><br><br>
        <a href="vendors/invitation.php">Invitations</a><br><br>
        <a href="vendors/car_rent.php">Car Rental</a> <br><br>
          
    </div>
    
     <div class="divJlinks" >
    	<h3 style="margin-right:100px;">Join Us</h3>
		 <?php if(empty($_SESSION['user_email']) && empty($_SESSION['vendor_email']) 
		&& empty($_SESSION['admin_email'])){?>
		<a href="user/user_login.php">User Login</a><br><br>
        <a href="user/register.php">User Signup</a> <br><br>
        <a href="vendors/vendor_login.php">Vendor Login</a><br><br>
        <a href="vendors/register.php">Vendor Signup</a> <br><br>
        <a href="admin/admin_login.php">Admin Login</a> 
	<?php }else{ ?>
		<a href="#" >User Login</a><br><br>
        <a href="#">User Signup</a> <br><br>
        <a href="#">Vendor Login</a><br><br>
        <a href="#" >Vendor Signup</a> <br><br>
        <a href="#" >Admin Login</a> 
    <?php }?>
    </div>
    
    <div class="divSLink">
    	<h3 style="margin-left:10px;">Follow Us:</h3>        	
            <!links>
            <a href="https://www.facebook.com "  target="_blank" style="margin-right:0px"> 
				<img src="images/facebook.png" alt="DK events" width="40px" height="40px">
			</a>
            
            <a href="https://www.instagram.com " target="_blank"> 
				<img src="images/instagram.png" alt="DK events" width="40px" height="40px">
			</a>
            
            <a href="https://www.twitter.com " target="_blank"> 
				<img src="images/twitter.png" alt="DK events" width="40px" height="40px">
			</a>
    </div>
</footer>
<hr>