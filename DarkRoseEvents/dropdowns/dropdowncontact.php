<?php session_start(); ?>
<link href="../stylesheets/d_sheet.css" rel="stylesheet" type="text/css">
<hr>
	<div >  <!dropdown>
    	<ul>
        	<li><img src="../images/logo4.png" height="100px" style="margin-left:70px;margin-top:5px;"/></li>
        	<li><a href="index.php" style="margin-left:10px;margin-top:30px">Home</a></li>
           <li class="dropdown">
            	<a href="Deals.php" target="_blank">Deals</a>
                <div class="dropdown-content">
                	<a href="deals/parties_pack.php" target="_blank">Parties Deals</a>
                      <a href="deals/meeting_pack.php" target="_blank">Business Meetings</a>
                      <a href="deals/engagement_pack.php" target="_blank">Engagment Deals</a>
                      <a href="deals/barat_pack.php" target="_blank">Barat Deals</a>
                      <a href="deals/walima_pack.php" target="_blank">Walima Deals </a>
                      <a href="deals/sp_pack.php" target="_blank">Special Deals</a>
                </div>
            </li>
            
            <li class="dropdown">
            	<a href="vendors.php" target="_blank">Vendors</a>
                <div class="dropdown-content">
                	<a href="vendors/venue.php" target="_blank">Venues</a>
                    <a href="vendors/photographer.php" target="_blank">Photographer</a>
                    <a href="vendors/decorator.php" target="_blank">Decorators</a>
                    <a href="vendors/car_rent.php" target="_blank">Car Rental</a>
                    <a href="vendors/invitation.php" target="_blank">Invitations</a>
                </div>
            </li>
            
            <li><a href="dark_events.php" target="_blank" style="margin-top:30px">Events</a></li>
            <li><a href="aboutUs.php" style="margin-top:30px">About Us</a></li>
            <?php if(empty($_SESSION['user_email']) && empty($_SESSION['vendor_email'])
				&& empty($_SESSION['admin_email'])){ 
				?>
            <li style="float:right;margin-top:30px"><a href="user/user_login.php">Login</a>					
             </li>
			<?php }else if(!empty($_SESSION['user_email'])) { ?>
            <li style="float:right;margin-top:30px"><a href="user/logout.php">Logout</a>					
             </li>
            <?php }else if(!empty($_SESSION['vendor_email'])) { ?>
            <li style="float:right;margin-top:30px;"><a href="vendors/logout.php">Logout</a>					
             </li>
             <?php }else if(!empty($_SESSION['admin_email'])) { ?>
            <li style="float:right;margin-top:30px;"><a href="admin/logout.php">Logout</a>					
             </li>
            <?php } ?>
            
        </ul>
    <hr>
    </div>