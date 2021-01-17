<!doctype html>
<html>
<head>
<title>Decorators</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link href="../stylesheets/vendor_sheet.css" rel="stylesheet" type="text/css">
<?php include '../dropdowns/dropdown.php';?>
<div class="title" style="background-image:url('../images/venue_decore.jpg');">
<h1>Decorations </h1>
</div> <hr>
<div class="container"> <!second and on page movement dropdown>
<ul style="height:60px;background-color:white;color:black;">
<li ><a href="#info" style="color:black;">About</a></li>
<li><a href="#services" style="color:black;">Services</a></li>
<li><a href="#portfolio" style="color:black;">Portfolio</a></li>
</ul>
</div>
</head>
<?php include '../connection.php';
$query="SELECT * FROM decor_demo";
$result=mysqli_query($con,$query);
?>
<body>
<div id="info">
<hr>
<h1 style="margin-left:30px;text-align:center;font-style:oblique;">Best Decor Services in Pakistan</h1> <hr>
<p style="margin-left:40px;text-align:justify;margin-right:40px;font-size:20px;">
Events culture in Pakistan has taken a 360° turn in the past decade or so. The events are now more colorful and extravagant than they were a couple of years ago. This means that people now actually put a lot of thought, money, and planning into the overall theme their events would follow. This helped pave way for the event décor companies that helped execute all the ideas and use their own creativity to blow life into the event. From  hall decoration to  stage decoration, the decoration packages seem to cover it all and that too at reasonable rates. Go through our comprehensive and thorough list of Stage Decoration Services - Hall Decor Rentals Packages to help you make a decision which will impact all theguests that make it be a part of your happiness. They listen to what you want and use their experience to give the whole venue a revamped look.
</p>

</div>

<div id="services"><hr>
<h1 style="margin-left:30px;text-align:center;font-style:oblique;">Services</h1> <hr>
<br>
<table width="100%" >
       <tr>
         <td >Stage Decore</td>
         <td >Entrance Decore</td>
         <td>Business Meetings/Events</td>
       </tr>
       <tr>
       	<td>Wedding Hall Decore</td>
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
<img src="vendors/imgs/<?php echo $select_row['decor_images_front']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_two']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_three']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_four']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_five']; ?>" width="150px" height="100px"/>
<img src="vendors/imgs/<?php echo $select_row['image_six']; ?>" width="150px" height="100px"/>
</div>
<?php } ?>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include 'footer.php';?>
</body>
</html>