
<html>

<head><title>Confirm Buy | Asteroid Learning</title>

<?php include("../includes/headerforpages.php");?>
<!-- TRAINING-->
</head>

<body>
<div class="topbar"></div><div class="midbar"></div>
<div id="wrapper">
<div class="selectedtab3"></div><!--I made it for free-->
<link rel="stylesheet" type="text/css" href="../css/aboutus.css" /><!--same css for pages and about us-->

<!-- New start from here-->
<?php include("../includes/tabsforpages.php")?>

<div class="aboutus" style="color:#000000;">Confirm Buy</div>
<div class="textbody"  style="color:#000000;"> </div>
<div class="bodycolumn1"  style="color:#000000;"> <br><br><br><br><br><!--Start from here-->




<span style="font-size:44; color:#7B7C7C;"> Thank You <?php if(isset($_GET['candidate'])){ echo $_GET['candidate'];}?></span><br><br> For buying at Asteroid Learning.<br><br>
    <fieldset class="row2" style="
	float:left;
	background-color:
	  background : -moz-linear-gradient(50% 0% -90deg,rgba(0, 34, 55, 0.5) 0%,rgba(0, 6, 30, 1) 100%);
  background : -webkit-linear-gradient(-90deg, rgba(0, 34, 55, 0.5) 0%, rgba(0, 6, 30, 1) 100%);
  background : -webkit-gradient(linear,50% 0% ,50% 100% ,color-stop(0,rgba(0, 34, 55, 0.5) ),color-stop(1,rgba(0, 6, 30, 1) ));
  background : -o-linear-gradient(-90deg, rgba(0, 34, 55, 0.5) 0%, rgba(0, 6, 30, 1) 100%);
  background : -ms-linear-gradient(-90deg, rgba(0, 34, 55, 0.5) 0%, rgba(0, 6, 30, 1) 100%);
  -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#002237', endColorstr='#00061E' ,GradientType=0)";
  background : linear-gradient(180deg, rgba(0, 34, 55, 0.5) 0%, rgba(0, 6, 30, 1) 100%);
 "><span style="  color:#ffffff;">
We have recorded your orders and will contact you regarding payments procedure.
We are still working with our payment gateways after which you will be able to pay online for all your orders.
</span>

</fieldset>

  

</div>



<?php include("../includes/footerforpages.php");?>

</body>
</html>
