<?php 
ob_start();?>
<html>

<head><title>Apply Now | Asteroid Learning</title>

<?php include("../includes/headerforpages.php");?>
<?php 
 if(!isset($_SESSION['learner_name']))
{
	 header("Location:../index.php");
	}

	?>
 <script src="../js/jquery.min.js"></script>
<script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Passwords do not match.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>
<script type="text/javascript" src="../js/jquery.js"></script>
	<?php include("../asteroid/includes/include_city.php");?>
<!-- TRAINING-->
</head>

<body>
<div class="topbar"></div><div class="midbar"></div>
<div class="midbar"></div>
<div id="wrapper">
<div class="selectedtab1"></div><!--I made it for free-->
<link rel="stylesheet" type="text/css" href="../css/aboutus.css" /><!--same css for pages and about us-->

<!-- New start from here-->
<?php include("../includes/tabsforpages.php")?>
<div class="aboutus" style="color:#000000;">Apply Now</div>
<div class="textbody"  style="color:#000000;"> </div>
<div class="bodycolumn1"  style="color:#000000;"> <br><br><br><br>
       
            Dear <br><br>
			
		
			<span style="font-size:70;color:#7B7C7C;font-family:Museo;"><?php echo $_SESSION['learner_name']; ?></span><br><br>
			
		You're already registered with us.<br>
		<span style="color:#000000"><span style="font-size:10;">
		Please logout if someone else wants to register.</span></span>
		<br>	
		<form method="POST" action="../asteroid/logout.php?new_reg_req2=404&logout=1">
<button class="button" type="submit" name="new_reg_req2">Logout</button>
</form>

</div>



<?php include("../includes/footerforpages.php");?>

</body>
</html>