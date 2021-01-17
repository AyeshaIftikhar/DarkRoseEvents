<!doctype html>
<html>
<head>
<title>Invitations</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link href="../stylesheets/vendor_sheet.css" rel="stylesheet" type="text/css">
<?php include '../dropdowns/dropdown.php';?>
<div class="title" style="background-image:url('../images/invitation_card.jpg');color:#000;">
<h1>Invitations </h1>
</div> <hr>
<div class="container"> <!second and on page movement dropdown>
<ul style="height:60px;background-color:white;color:black;">
<li ><a href="#info" style="color:black;">About</a></li>
<li><a href="#services" style="color:black;">Services</a></li>
<li ><a href="#questions" style="color:black;">FAQs</a></li>
<li><a href="#portfolio" style="color:black;">Portfolio</a></li>
</ul>
</div>
</head>
<?php include '../connection.php';
$query="SELECT * FROM invitation_demo";
$result=mysqli_query($con,$query);
?>
<body>
<div id="info">
<hr>
<h1 style="margin-left:30px;text-align:center;font-style:oblique;">About Dark Rose Events Customization</h1> <hr><br>
<p style="margin-left:40px;text-align:center;margin-right:40px;font-size:20px;">
Dark Rose Events presents you variety of unique styles for wedding invites, Nikkah Nima, Wedding Planners and many more of your own choice too.
</p>
<br>
</div>

<div id="services"><hr>
<h1 style="margin-left:30px;text-align:center;font-style:oblique;">Services</h1> <hr>
<br>
<table width="100%" >
       <tr>
         <td >Wedding Cards</td>
         <td >Birthday Cards</td>
         <td>Digital E Cards</td>
       </tr>
       <tr>
       	<td>Modern Invites</td>
        <td>Traditional Invites</td>
        <td >Funky Invites</td>
       </tr>
       <tr>
       		<td>Boxed Cards</td>
            <td> Unboxed Cards</td>
       </tr>
</table><br>
</div>

<div id="questions"> <hr>
<h1 style="margin-left:30px;text-align:center;font-style:oblique;">FAQs</h1> <hr>
<table width="100%" >
       <tr>
         <td style="width:50%;" ><strong>What is your Delivery Policy?</strong><br>
         <p style="font-size:17px;margin-left:5px;">Delivery Provided, Cost Included</p>
         </td>
         <td style="width:50%;">
         <strong>Recommended advance booking time for Wedding Cards?</strong>
         <p style="font-size:17px;margin-left:5px;">2-3 weeks</p>
         </td>
       </tr>
       <tr>
       	<td>
        	<strong>Do you provide instant printing service?</strong>
            <p style="font-size:17px;margin-left:5px;">Yes</p>
        </td>
        <td>
        	<strong>Minimum order quantity for wedding cards?</strong>
            <p style="font-size:17px;margin-left:5px;">50</p>
        </td>
       </tr>
</table> <br>
</div>

<div style="" id="portfolio"><hr>
<h1 style="text-align:center;font-style:oblique;padding:5px;">Portfolio</h1>
<hr><br>
<div class="divisionImages">
<?php while($select_row=mysqli_fetch_array($result)){ ?>
<div class="subDivImages" >
<img src="vendors/imgs/<?php echo $select_row['invitation_front_image']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_two']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_three']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_four']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_five']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_six']; ?>" width="150px" height="100px"/>
</div>
<?php } ?>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include 'footer.php';?>
</body>
</html>