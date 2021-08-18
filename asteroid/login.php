<?php
session_start();
if(isset($_SESSION['city']))
{header("Location:learner.php");}

?>
<!DOCTYPE html>
<html>

<head><title>Learner's Login | Asteroid Learning</title>

	<meta http-equiv="content-type" content="text/html"; charset="UTF-8">
	<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

	<meta name="description" content="Learn Anything Anywhere | Asteroid Learning" />
		<meta name="keywords" content="electronics, projects, bluelotus, training, lab, final year projects, allahabad, robotics,
										big data, web development, graphic designing, game development, CAD, AutoCAD, automation,
										adobe photoshop, adobe illustrator, hadoop, map reduce, scoop, flume, pig, hive, yarn, 
										3D 2D game development, unity, cloud computing, distributed systems" />
		<meta name="author" content="Nitesh" />
		
		<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />
		<script src="../js/modernizr.custom.js"></script>

				<!--tooltip-->
			<link rel="stylesheet" type="text/css" href="../css/default.css" />
		<link rel="stylesheet" type="text/css" href="../css/component_tooltip.css" />
		<script src="../js/modernizr.custom.js"></script>
		
		<link rel="icon" href="../asteroid/images/astico.ico" type="image/x-icon"/>
	<SCRIPT LANGUAGE="JavaScript">


var rand1 = 0;
var useRand = 0;

images = new Array;
images[1] = new Image();
images[1].src = "images/login/1.jpg";
images[2] = new Image();
images[2].src = "images/login/2.jpg";
images[3] = new Image();
images[3].src = "images/login/3.jpg";
images[4] = new Image();
images[4].src = "images/login/4.jpg";
images[5] = new Image();
images[5].src = "images/login/5.jpg";
images[6] = new Image();
images[6].src = "images/login/6.jpg";

function swapPic() {
var imgnum = images.length - 1;
do {
var randnum = Math.random();
rand1 = Math.round((imgnum - 1) * randnum) + 1;
} while (rand1 == useRand);
useRand = rand1;
document.randimg.src = images[useRand].src;
}

</script>

</head>

<body onLoad="swapPic();">
<div class="topbar"></div>
<div class="midbar"></div>
<div id="wrapper">
<link rel="stylesheet" type="text/css" href="../css/form.css" />
<link rel="stylesheet" type="text/css" href="../css/asteroidlearning.css" />
<link rel="stylesheet" type="text/css" href="../css/login.css" />

<!-- New start from here-->

 
<?php include("../asteroid/includes/tabs.php"); ?>

<img name="randimg" src="images/login/0.jpg" width="999" class="login_background"  height="610" border="0" alt=""> 
<div class="logo_login"></div>
<div class="login_box"><br><br><br>
        <form action="loginprocess.php" class="register" method="POST" name="login">
    <p>
                    <label style="color:#ffffff; font-size:20px;">Email 
                    </label>
                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required style="background:#ffffff; height:25px; width:250px;" placeholder="    Your Email" name="email" autocomplete="off" title="Enter a valid email ID"/>
                </p>
                <p>
                    <label style="color:#ffffff; font-size:20px;">Password &nbsp;
                    </label>
                    <input type="password" required style="background:#ffffff; height:25px; width:250px;" id="password" placeholder="    Your Password" name="password_confirm" autocomplete="off"/>
</p>
<p><center><button class="login_submit" type="submit" name="submit" >Login</button></p></center>
</form><center>
<span style="font-size:10px;color:#ffffff;">Not yet registered | <a href="register_asteroid.php" class="linky"style="color:#cccccc;">Register Now</a></span>
<?php if(isset($_GET['authentication_error']))
{
echo"<center><span style=\"font-size:10px;color:#ffffff;\">Oops, seems you entered an incorrect Email or Password | </span>
<span style=\"font-size:10px;\" class=\"linky\"><a href=\"recover_account.php\" style=\"color:#3399FF;\">Forgot Password</a></span><center>";

}?>

</center>
</div>
<div class="laa"><br><br><img src="images/login/laa.png"/></div>

 <div class="textbody"> </div>
<div class="bodycolumn1"  style="color:#000000;">  

<img src="images/loginwhy.png">

</div>



<?php include("../asteroid/includes/footer.php"); ?>

</body>
</html>