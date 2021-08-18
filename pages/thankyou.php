
<html>

<head><title>Register | Asteroid Learning</title>
	
	<?php include("../asteroid/includes/header.php");?>
	
 <link rel="stylesheet" type="text/css" href="../css/form.css"/>

</head>

<body>
<div class="topbar"></div><div class="midbar"></div>
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
		<?php include("../asteroid/includes/bluedomain.php"); ?>
 <div class="logo"><br><a href="../asteroidlearning.php"><img src="../images/asteroidlogo.png" height="168px"></a></div>
<?php include("../asteroid/includes/tabs.php"); ?>
 
<!--registration bar-->
<div class="Greyboxback"></div>
<div class="Greybox1" style="background:linear-gradient(0deg, rgba(255, 255, 255, 1) 80.1%, rgba(204, 204, 204, 1) 100%);color:#000000;">Register Now</div>
<div class="Greybox2"><a href="../asteroid/trainingcenters_asteroid.php">Training Centres</a></div>
<div class="Greybox3"><a href="../asteroid/reqworkshop.php">Request Workshops</a></div>
<div class="Greybox4"><a href="../asteroid/scheduledevents.php">Scheduled Events</a></div>
<div class="Greybox5"><a href="../asteroid/gallary_asteroid.php">Gallery</a></div>
<!--registration bar ends -->


<div class="textbody"> </div>

<div class="bodycolumn1"> <br><br><br><br>


            Thank You <br><br>
			
			<?php if(isset($_GET['candidate']))
			{ $name=$_GET['candidate'];}
		else {
			$name="Guest";
			}
			?>
			<span style="font-size:70;color:#7B7C7C;font-family:Museo;"><?php echo $name; ?></span><br><br>
			
		For registering<br>
		<span style="font-size:10; color:#000000;">
				Lets start a new journey of learning awesome things with awesome people. Remember your password for future logins.</span></span>
		<br>	
		<form action="../asteroid/login.php">
<button class="button" type="submit" name="submit">Lets Begin &raquo;</button>
</form>


  </div>


  


 <div class="subjectheadingreg" style=" font-size : 54px;color : #000000;  font-family : Museo;">Register </div>

<?php include("../asteroid/includes/footer.php"); ?>

</body>
</html>