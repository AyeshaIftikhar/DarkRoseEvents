<!doctype html>
<html>
<head>
<title>Photography</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link href="../stylesheets/vendor_sheet.css" rel="stylesheet" type="text/css">
<?php include '../dropdowns/dropdown.php';?>
<div class="title" style="background-image:url('../images/photograph.jpg');">
<h1>Photography</h1>
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
$query="SELECT * FROM photography_demo";
$result=mysqli_query($con,$query);
?>
<body>
<div id="info">
<hr>
<h1 style="margin-left:30px;text-align:center;font-style:oblique;">About Dark Rose Events Photography</h1> <hr><br>
<p style="margin-left:40px;text-align:justify;margin-right:40px;font-size:20px;">
Dark Rose Events presents you variety of unique styles for wedding photography, bridal shoots and your other shoots by providing you best photographers all around the Pakistan.
</p>
<br>
</div>

<div id="services"><hr>
<h1 style="margin-left:30px;text-align:center;font-style:oblique;">Services</h1> <hr>
<br>
<table width="100%" >
       <tr>
         <td >Wedding shoots</td>
         <td >Birthday shoots</td>
         <td>Bridal Shoots</td>
       </tr>
       <tr>
       	<td>Profolio's Shoot</td>
        <td>Events Coverage</td>
        <td >Videography</td>
       </tr>
</table><br>
</div>

<div id="questions"> <hr>
<h1 style="margin-left:30px;text-align:center;font-style:oblique;">FAQs</h1> <hr>
<table width="100%" >
       <tr>
         <td style="width:50%;" ><strong>What is your Delivery Policy of photos?</strong><br>
         <p style="font-size:17px;margin-left:5px;">Delivery Provided, Cost Included</p>
         </td>
         <td style="width:50%;">
         <strong>Recommended advance booking time for shoots?</strong>
         <p style="font-size:17px;margin-left:5px;">2-3 weeks</p>
         </td>
       </tr>
       <tr>
       	<td>
        	<strong>Do you provide instant developing service?</strong>
            <p style="font-size:17px;margin-left:5px;">Yes</p>
        </td>
        <td>
        	<strong>Minimum pictures quantity provided in hard print?</strong>
            <p style="font-size:17px;margin-left:5px;">50</p>
        </td>
       </tr>
              <tr>
       	<td>
        	<strong>Do you provide edited pictures?</strong>
            <p style="font-size:17px;margin-left:5px;">Yes, 30 pictures</p>
        </td>
        <td>
        	<strong>How you provide developed pictures?</strong>
            <p style="font-size:17px;margin-left:5px;">In a album</p>
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
<img src="vendors/imgs/<?php echo $select_row['image_five']; ?>" width="150px" height="120px"/>
<img src="vendors/imgs/<?php echo $select_row['image_six']; ?>" width="150px" height="120px"/>
</div>

<?php } ?>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include 'footer.php';?>
</body>
</html>