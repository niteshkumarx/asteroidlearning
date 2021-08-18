
<html>

<head><title>Edison | Asteroid Learning</title>

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
<div class="aboutus" style="color:#000000;">Intel's Edison Board</div>
<div class="textbody"  style="color:#000000;"> </div>
<div class="bodycolumn1"  style="color:#000000;"> 
<br><br><br><br><br><!--Start from here-->The Intel Edison is a tiny computer offered by Intel as a
 development system for wearable devices. The system was initially announced to be the same size
 and shape as an SD card and contain a dual-core Intel Quark x86 CPU at 400 MHz communicating via
 Bluetooth and Wi-Fi. A later announcement changed the CPU to a 22 nm Silvermont dual-core Intel
 Atom CPU.
<br><br><img src="../images/electronics/edisonsmall.jpg" style="border-radius:10px;" /><br><br>
<?php $fir="../images/electronics/edisonsmall.jpg";?>
The second version of the board was presented in September 2014.
 Its dimensions are 35.5 x 25 x 3.9 mm, with components on both sides.
 The board's main SoC is a 22 nm Intel Atom "Tangier" (Z34XX) that
 includes two Atom Silvermont cores running at 500 MHz and one Intel
 Quark core at 100 MHz (for executing RTOS ViperOS). The SoC has 1 GB
 RAM integrated on package. There is also 4 GB eMMC flash on board,
 Wi-Fi, Bluetooth 4 and USB controllers. The board has 70-pin dense
 connector (Hirose DF40) with USB, SD, UARTs, GPIOs.  It runs Yocto
 Linux with development support for Arduino IDE, Eclipse (C, C++, Python)
 , Intel XDK (NodeJS, HTML5), and Wolfram.<br><br>
 
<b>Brand : Intel</b><br>
Item Height:	45 Millimeters<br>
Item Width:	9 Centimeters<br>
Item Weight:	209 g<br>
Product Dimensions:	16 x 9 x 4.5 cm<br>
Item model number:	EDI1ARDUIN.AL.K<br>
Lithium battery Weight:	5 Grams<br>

<form action="buynow.php?product_name=<?php echo urlencode("Intel Edison Board");?>&&price_entity=<?php echo urlencode("₹ 7500");?>
&&fir=<?php echo urlencode("$fir");?>" method="POST">

<br><br><input type="submit" value="Buy Now" name="submit" style="border-radius:4px; background-color:#0DA9D3; width:150px; height:30px; "></form>
</div>



<?php include("../includes/footerforpages.php");?>

</body>
</html>