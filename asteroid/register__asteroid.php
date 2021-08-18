<?php 
ob_start();?>
<html>

<head><title>Register | Asteroid Learning</title>
	
	<?php include("../asteroid/includes/header.php");?>
	
	<?php  if(!isset($_SESSION['learner_name']))
{header("Location: register_asteroid.php");}
?>

 <link rel="stylesheet" type="text/css" href="../css/form.css"/>
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

<script>
$(document).ready(function(){

$("html, body").animate({scrollTop:622},500);

});
</script>
	<?php include("../asteroid/includes/include_city.php");?>
</head>

<body>
<div class="topbar"></div>
<div class="midbarlight"></div>
<div id="wrapper">
<link rel="stylesheet" type="text/css" href="../css/asteroidlearning.css" />

<!-- New start from here-->

<div class="gallarybody" style=" background-image:url(../asteroid/images/123.png); background-repeat:repeat-x;" ></div>
 

<!-- Asteroid LEARNING Content-->
		<div class="Green1"><a href="../asteroid/graphicdesign.php" style="color:#ffffff;">Graphics Design & Creativity</a></div>
		<div class="Green2"><a href="../asteroid/webdevelopment.php" style="color:#ffffff;">Web Development</a></div>
		<div class="Green3"><a href="../asteroid/bigdata.php" style="color:#ffffff;">Big Data Development</a></div>
		<div class="Green4"><a href="../asteroid/linux.php" style="color:#ffffff;">Linux Administration</a></div>
		<div class="Green5"><a href="../asteroid/motiongraphics.php" style="color:#ffffff;">Motion Graphics & After Effects</a></div>
		<div class="Green6"><a href="../asteroid/cad.php" style="color:#ffffff;">Computer Aided Designing</a></div>
		<div class="Green7"><a href="../asteroid/mechatronics.php" style="color:#ffffff;">Automation & Robotics</a></div>
		<div class="Green8"><a href="../asteroid/appdev.php" style="color:#ffffff;">App Development</a></div>
		<div class="Green9"><a href="../asteroid/gamepro.php" style="color:#ffffff;">Game Pro Developer</a></div>
	 
 	<div class="earn"></div>	
		<div class="learn" style="font-size:1.5em; font-family: 'Museo';"><b>Learn</b>  •  <b>Explore</b>  •  <b>Replicate</b></div>
  
<div class="logo"><br><a href="../asteroidlearning.php"><img src="../images/asteroidlogo.png" height="168px"></a></div>
<?php include("../asteroid/includes/tabs.php"); ?>
 
<!--registration bar-->
<div class="Greyboxback"></div>
<div class="Greybox1" style="background:linear-gradient(0deg, rgba(255, 255, 255, 1) 80.1%, rgba(204, 204, 204, 1) 100%);color:#000000;">Register Now</div>
<div class="Greybox2"><a href="../asteroid/help.php">Help</a></div>
<div class="Greybox3"><a href="../asteroid/reqworkshop.php">Request Workshops</a></div>
<div class="Greybox4"><a href="../asteroid/scheduledevents.php">Scheduled Events</a></div>
<div class="Greybox5"><a href="../asteroid/reviews_asteroid.php">Reviews</a></div>
<!--registration bar ends -->


<div class="textbody"> </div>

<div class="bodycolumn1"> <br><br><br><br>

            Dear <br><br>
			
		
			<span style="font-size:70;color:#7B7C7C;font-family:Museo;"><?php echo $_SESSION['learner_name']; ?></span><br><br>
			
		You're already registered with us.<br>
		<span style="color:#000000"><span style="font-size:10;">
		Please logout if someone else wants to register.</span></span>
		<br>	
		<form method="POST" action="logout.php?new_reg_req=404&logout=1">
<button class="button" type="submit" name="new_reg_req">Logout</button>
</form>



  
</div>

 <div class="subjectheadingreg" style=" font-size : 54px;color : #000000;  font-family : Museo;">Register </div>

<?php include("../asteroid/includes/footer.php"); ?>

</body>
</html>