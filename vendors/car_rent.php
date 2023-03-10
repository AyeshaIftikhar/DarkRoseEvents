<!doctype html>
<html>
<head>
<title>Cars Rental</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link href="../stylesheets/vendor_sheet.css" rel="stylesheet" type="text/css">
<?php include '../dropdowns/dropdown.php';?>
<div class="title" style="background-image:url('../images/car.jpg');">
<h1>Cars Rental </h1>
</div> <hr>
<div class="container"> <!second and on page movement dropdown>
<ul style="height:60px;background-color:white;color:black;">
<li><a href="#services" style="color:black;">Services</a></li>
<li><a href="#portfolio" style="color:black;">Portfolio</a></li>
</ul>
</div>
</head>
<?php include '../connection.php';
$query="SELECT * FROM car_rental_demo";
$result=mysqli_query($con,$query);
?>
<body>

<div id="services"><hr>
<h1 style="margin-left:30px;text-align:center;font-style:oblique;">Services</h1> <hr>
<br>
<table width="100%" >
       <tr>
         <td >Furnished Cars</td>
         <td >Car Decore</td>
         <td>Pick and Drop Services</td>
       </tr>
       <tr>
       	<td>No Extra Charges</td>
        <td>Corporate Events</td>
        <td >Free Consultancy</td>
       </tr>
</table><br>
</div>


<div style="" id="portfolio"><hr>
<h1 style="text-align:center;font-style:oblique;padding:5px;">Portfolio</h1>
<hr><br>
<div class="divisionImages">
<?php while($select_row=mysqli_fetch_array($result)){ ?>
<div class="subDivImages" >
<img src="vendors/imgs/<?php echo $select_row['image_one']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_two']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_three']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_four']; ?>" width="150px" height="100px"/>
</div>

<?php } ?>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include 'footer.php';?>
</body>
</html>