<!doctype html>
<html>
<head>
<title>Venues</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link href="../stylesheets/vendor_sheet.css" rel="stylesheet" type="text/css">
<?php include '../dropdowns/dropdown.php';?>
<div class="title" style="background-image:url('../images/venue.jpg');;">
<h1>Venues</h1>
</div> <hr>
<div class="container"> <!second and on page movement dropdown>
<ul style="height:60px;background-color:white;color:black;">
<li><a href="#services" style="color:black;">Services</a></li>
<li ><a href="#questions" style="color:black;">FAQs</a></li>
<li><a href="#portfolio" style="color:black;">Portfolio</a></li>
</ul>
</div>
</head>
<?php include '../connection.php';
$query="SELECT * FROM venues_demo";
$result=mysqli_query($con,$query);
?>
<body>

<div id="services"><hr>
<h1 style="margin-left:30px;text-align:center;font-style:oblique;">Services</h1> <hr>
<br>
<table width="100%" >
       <tr>
         <td >Marriage Hall</td>
         <td >Banquets</td>
         <td>Marquee's</td>
       </tr>
       <tr>
       	<td>All Arrangments are done by us</td>
       </tr>
</table><br>
</div>

<div id="questions"> <hr>
<h1 style="margin-left:30px;text-align:center;font-style:oblique;">FAQs</h1> <hr>
<table width="100%" >
       <tr>
         <td style="width:50%;">
         <strong>Recommended advance booking time for events?</strong>
         <p style="font-size:17px;margin-left:5px;">2-3 weeks</p>
         </td>
           <td>
        	<strong>Can customer tell you the location ?</strong>
            <p style="font-size:17px;margin-left:5px;">Yes</p>
        </td>
       </tr>
       <tr>
       	<td>
        	<strong>Do you provide decore and other arrangments?</strong>
            <p style="font-size:17px;margin-left:5px;">Yes</p>
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
<img src="vendors/imgs/<?php echo $select_row['front_image']; ?>" width="150px" height="120px"/>
<img src="vendors/imgs/<?php echo $select_row['image_two']; ?>" width="150px" height="120px"/>
<img src="vendors/imgs/<?php echo $select_row['image_three']; ?>" width="150px" height="120px"/>
<img src="vendors/imgs/<?php echo $select_row['image_four']; ?>" width="150px" height="120px"/>
<i
</div>mg src="vendors/imgs/<?php echo $select_row['image_five']; ?>" width="150px" height="120px"/>
<img src="vendors/imgs/<?php echo $select_row['image_six']; ?>" width="150px" height="120px"/>
<?php } ?>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include 'footer.php';?>
</body>
</html>