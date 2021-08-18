
<html>

<head><title>VHDL | Asteroid Learning</title>

<?php include("../includes/headerforpages.php");?>
<!-- TRAINING-->
</head>

<body>
<div class="topbar"></div><div class="midbar"></div>
<div id="wrapper">
<div class="selectedtab1"></div>
<link rel="stylesheet" type="text/css" href="../css/aboutus.css" /><!--same css for pages and about us-->

<!-- New start from here-->
<?php include("../includes/tabsforpages.php")?>
<div class="aboutus" style="color:#000000; font-size:47;">Hardware Description Language</div>
<div class="textbody"  style="color:#000000;"> </div>
<div class="bodycolumn1"  style="color:#000000;">

 <br><br><br><br><br><!--Start from here--> A hardware description language used in electronic
 design automation to describe digital and mixed-signal systems such as field-programmable gate
 arrays and integrated circuits. Commonly known as VHDL it can also be used as a general purpose parallel programming language.
 VHDL is commonly used to write text models that describe a logic circuit. Such a model is processed by a synthesis program, only
 if it is part of the logic design. A simulation program is used to test the logic design using simulation
 models to represent the logic circuits that interface to the design.
<br><br><img src="../images/electronics/vhdl.jpg" style="border-radius:10px;" height="300px"/><br>
<form action="../asteroid/register_asteroid.php?course_name=<?php echo urlencode("Implimenting VHDL ");?>&&yes=1" method="POST">

<br><br><input type="submit" value="Apply Now" name="submit" style="border-radius:4px; background-color:#0DA9D3; width:150px; height:30px; ">

</form>

 </div>



<?php include("../includes/footerforpages.php");?>

</body>
</html>