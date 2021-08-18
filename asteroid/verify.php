<?php
session_start();
require("../../of_course/constants.php");// -->on server, not-standalone, redirection to same directory
//require("../includes/constants.php");//-->on local machine, not-standalone, redirection to same directory
?>
<html>

<head><title>Verified | Asteroid Learning</title>
	
	<?php include("../asteroid/includes/header.php");?>
	
 <link rel="stylesheet" type="text/css" href="../css/form.css"/>

</head>

<body>
<div class="topbar"></div>
<div class="midbarlight"></div>
<div id="wrapper">
<link rel="stylesheet" type="text/css" href="../css/asteroidlearning.css" />

<!-- New start from here-->
<?php 
if(isset($_GET['confirm'])){
$gtx_connection=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$gtx_connection)
{
	die(" Database Connection Failed".mysql_error());
}

$gtx_select=mysql_select_db(DB_NAME,$gtx_connection);
if(!$gtx_select)
{	die("Database Selection Failed ".mysql_error());
}

$gtx_query="SELECT * from gtx_registration";
$gtx_query.=" WHERE gtx_email='".$_GET['mail']."' AND gtx_asteroid='".$_GET['confirm']."'";
$gtx_result=mysql_query($gtx_query,$gtx_connection);
if(mysql_num_rows($gtx_result)==1 )
{$sampu="Your Email ID has been verified";
$gtx_query="UPDATE gtx_registration SET gtx_asteroid='1' WHERE gtx_email='".$_GET['mail']."'";
$gtx_result=mysql_query($gtx_query,$gtx_connection);}

else if(mysql_num_rows($gtx_result)==0)
{$sampu="Either your Email has already been verified or you're falsly redirected<br>&nbsp;Please login to your profile if you're completely registered";
}
else{$sampu="False redirection, try to relogin";}
}
else{$sampu="False redirection, try to relogin";}
 mysql_close($gtx_connection);
?>


<div class="gallarybody" style=" background-image:url(../asteroid/images/123.png); background-repeat:repeat-x;" >
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span style="color:#000000;font-size:1.3em;">&nbsp;<?php echo $sampu;?>
		<form action="login.php">
<button class="button" type="submit" name="submit">Lets Begin &raquo;</button>
</form>
</div>
 

<!-- Asteroid LEARNING Content-->
	

 <div class="logo"><br><a href="../asteroidlearning.php"><img src="../images/asteroidlogo.png" height="168px"></a></div>
<?php include("../asteroid/includes/tabs.php"); ?>
 
<!--registration bar-->
<div class="Greyboxback"></div>

<!--registration bar ends -->


<div class="textbody"> </div>

<div class="bodycolumn1"> <br><br><br><br>


  </div>

 <div class="subjectheadingreg" style=" font-size : 54px;color : #000000;  font-family : Museo;">Verification </div>

<?php include("../asteroid/includes/footer.php"); ?>

</body>
</html>