
<html>

<head><title>Galileo | Asteroid Learning</title>

<?php include("../includes/headerforpages.php");?>
<!-- TRAINING-->
</head>

<body>
<div class="topbar"></div><div class="midbar"></div>
<div id="wrapper">
																															<div class="selectedtab3"></div><!--gotcha-->
<link rel="stylesheet" type="text/css" href="../css/aboutus.css" /><!--same css for pages and about us-->

<!-- New start from here-->
<?php include("../includes/tabsforpages.php")?>
<div class="aboutus" style="color:#000000;">Intel's Galileo Board</div>
<div class="textbody"  style="color:#000000;"> </div>
<div class="bodycolumn1"  style="color:#000000;">
<br><br><br><br><br><!--Start from here-->Intel Galileo is the first in a line of Arduino-certified
 development boards based on Intel x86 architecture and is designed for the maker and education communities.

Intel Galileo combines Intel technology with support for Arduino ready-made
 hardware expansion cards (called "shields") and the Arduino software development
 environment and libraries. The development board runs an open source Linux
 operating system with the Arduino software libraries, enabling re-use of
 existing software, called "sketches". Intel Galileo can be programmed
 through OS X, Microsoft Windows and Linux host operating software.
 The board is also designed to be hardware and software compatible
 with the Arduino shield ecosystem.
<br><br><img src="../images/electronics/g2.jpg" style="border-radius:10px;" /><br><br>
<?php $fir="../images/electronics/g2.jpg";?>
Intel Galileo features the Intel Quark SoC X1000, the first product
 from the Intel Quark technology family of low-power, small-core products.
 Intel Quark represents Intel's attempt to compete within markets such as 
 the Internet of Things and wearable computing. Designed in Ireland
 , the Quark SoC X1000 is a 32-bit, single core, single-thread, Pentium
 (P54C/i586) instruction set architecture (ISA)-compatible CPU, operating
 at speeds up to 400 MHz.<br><br>
 
<b>Brand : Intel</b><br>
Item Height:	14.7 Centimeters<br>
Item Width:	7 Centimeters<br>
Item Weight:	249 g<br>
Product Dimensions:	10.6 x 7 x 14.7 cm<br>
Item model number:	GALILEO2<br>


<form action="buynow.php?product_name=<?php echo urlencode("Intel Galileo Board");?>&&price_entity=<?php echo urlencode("₹ 10090");?>
&&fir=<?php echo urlencode("$fir");?>" method="POST">

<br><br><input type="submit" value="Buy Now"  name="submit" style="border-radius:4px; background-color:#0DA9D3; width:150px; height:30px; "></form> </div>



<?php include("../includes/footerforpages.php");?>

</body>
</html>