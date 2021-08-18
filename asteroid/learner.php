<?php
session_start();
if(!isset($_SESSION['city']))
{header("Location:login.php");}

?>
<!DOCTYPE html>
<html>
<head><title><?php echo $_SESSION['learner_name'];?> | Asteroid Learning</title>
<?php include("../asteroid/includes/headerwithoutsession.php"); ?>
<script src="../js/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#nb1").delay(500).slideToggle("fast");
$(".ajaxright").html("<br><br><br><br><br><center><img src=\"images/loadinganimwhite.gif\"/></center>");
$(".ajaxright").load("create_new_class.php");
    $("#bn1").click(function(){
        $("#nb1").slideToggle("fast");
	
    });
	 $("#bn2").click(function(){
        $("#nb2").slideToggle("fast");

    });
	 $("#bn5").click(function(){
        $("#nb5").slideToggle("fast");

    });
	 $("#class_nav_1").click(function(){
$(".ajaxright").html("<br><br><br><br><br><center><img src=\"images/loadinganimwhite.gif\"/></center>");
        $(".ajaxright").load("create_new_class.php");
    });	
	 $("#class_nav_2").click(function(){
$(".ajaxright").html("<br><br><br><br><br><center><img src=\"images/loadinganimwhite.gif\"/></center>");
        $(".ajaxright").load("manage_class.php");
    });	
	 $("#learn_nav_1").click(function(){
$(".ajaxright").html("<br><br><br><br><br><center><img src=\"images/loadinganimwhite.gif\"/></center>");
        $(".ajaxright").load("learner_search_nearme.php");
    });	
		 $("#learn_nav_2").click(function(){
$(".ajaxright").html("<br><br><br><br><br><center><img src=\"images/loadinganimwhite.gif\"/></center>");
        $(".ajaxright").load("learner_search_same_interest.php");
    });	
		 $("#learn_nav_3").click(function(){
$(".ajaxright").html("<br><br><br><br><br><center><img src=\"images/loadinganimwhite.gif\"/></center>");
        $(".ajaxright").load("learner_search_nearme_same_interest.php");
    });	
		 $("#learn_nav_4").click(function(){
$(".ajaxright").html("<br><br><br><br><br><center><img src=\"images/loadinganimwhite.gif\"/></center>");
		$(".ajaxright").load("learner_search_everyone.php");
    });	
		 $("#learn_nav_5").click(function(){
$(".ajaxright").html("<br><br><br><br><br><center><img src=\"images/loadinganimwhite.gif\"/></center>");
        $(".ajaxright").load("learner_invitations.php");
    });	
	 $("#class_nav_4").click(function(){
$(".ajaxright").html("<br><br><br><br><br><center><img src=\"images/loadinganimwhite.gif\"/></center>");
        $(".ajaxright").load("my_learners.php");
    });	
	 $("#learn_nav_4").click(function(){
$(".ajaxright").html("<br><br><br><br><br><center><img src=\"images/loadinganimwhite.gif\"/></center>");
        $(".ajaxright").load("Doc1.htm");
    });	
		 $("#bn7").click(function(){
$(".ajaxright").html("<br><br><br><br><br><center><img src=\"images/loadinganimwhite.gif\"/></center>");
        $(".ajaxright").load("feedback.php");
    });	

	$(".notify").mouseenter(function(){
    $(".notifybox").fadeIn();
});
	$(".notify").mouseleave(function(){
    $(".notifybox").fadeOut();
});
});
</script>

<?php  if(isset($_GET['class_redundant']))
			  {echo"<script>$(document).ready(function(){ $(\"#nb1\").slideToggle(\"fast\");
			    $(\".ajaxright\").load(\"create_new_class.php?class_redundant=1\");
				});</script>";}
				
		if(isset($_GET['success_classroom']))
			  {echo"<script>$(document).ready(function(){ $(\"#nb1\").slideToggle(\"fast\");
			    $(\".ajaxright\").load(\"manage_class.php?success_classroom=1\");
				});</script>";}	
				
				if(isset($_GET['success_feedback']))
			  {echo"<script>$(document).ready(function(){ 
			    $(\".ajaxright\").load(\"feedback.php?success_feedback=1\");
				});</script>";}	
				
				?>

  <link rel="stylesheet" type="text/css" href="../css/form.css" />
</head>

<body>
<div class="topbarforprofile"><center><a href="../asteroidlearning.php" title="Back to Asteroid Home"><img src="images/ast_white.png" height="50px;"/></a></center></div>
<div class="midbar"></div>

<div id="wrapper">

<link rel="stylesheet" type="text/css" href="../css/asteroidlearning.css" />
<link rel="stylesheet" type="text/css" href="../css/login.css" />

<!-- New start from here-->

 
<?php include("../asteroid/includes/tabsprofile.php"); ?>

<img src="images/login/class.jpg" width="999" class="learner_background"  alt=""> 
<div class="notify"><img src="images/classicons/notification.png" height="25px"/></div>
<div class="notifybox" style="color:#fff;">Welcome to Asteroid</div>
<div class="notify_number" style="color:#fff;">1</div>
<div class="logo_login"></div>
<div class="login_box"><br><br><br>
   
                    <label style="color:#ffffff; font-size:20px;">Welcome <span Style="font-family:Museo; font-size:35;"><?php echo   $_SESSION['learner_name'];?></span>
					<br><span class="linky" Style=" font-size:15px; color:#FFF100;"><?php echo $_SESSION['city'];?></span><br/>
					
                    </label>

<span style="font-size:10px;color:#ffffff;">Done for now | <a href="logout.php?logout=1" style="color:#cccccc;">Logout</a></span></center>
</div>


<!--uploading display pic here---------------------------------------->
<?php include("../asteroid/includes/dp_complete_func.php"); ?>
<!--uploading display pic here----------------------------------------->


 <div class="textbody2"> </div>
<div class="bodycolumn2"  style="color:#000000;">  

<div class="subjectleft">
<div class="bluenav" id="bn1">Create a Class</div><img src="images/navicon/chair.png" class="bluenavpic"/>
<div  class="navbox" id="nb1">
<div class="navlink" id="class_nav_1">New One</div>
<div class="navlink" id="class_nav_2">Manage Classes</div>
<div class="navlink" id="class_nav_3">Buddies</div>
<div class="navlink" id="class_nav_4">My Learners</div>
<div class="navlink" id="class_nav_5">Message</div>
</div >
<div  class="bluenav" id="bn2">Learners</div ><img src="images/navicon/learner.png" class="bluenavpic"/>
<div  class="navbox" id="nb2">
<div class="navlink" id="learn_nav_1">Near Me</div>
<div class="navlink" id="learn_nav_2">Same Interests</div>
<div class="navlink" id="learn_nav_3">Near Me & Same Interest</div>
<div class="navlink" id="learn_nav_4">Everyone</div>
<div class="navlink" id="learn_nav_5">Invitations</div>

</div >
<div  class="bluenav" id="bn3">My Proficiency</div ><img src="images/navicon/skill.png" class="bluenavpic"/>
<div  class="bluenav" id="bn4">Learn Wishes</div ><img src="images/navicon/wish.png" class="bluenavpic"/>
<div  class="bluenav" id="bn5">Educators</div ><img src="images/navicon/educators.png" class="bluenavpic"/>
<div  class="navbox" id="nb5">
<div class="navlink" id="edu_nav_1">Most Popular</div>
<div class="navlink" id="edu_nav_2">For Me</div>
<div class="navlink" id="edu_nav_3">Everyone</div>
<div class="navlink" id="edu_nav_4">Feedback Your Class</div>
<div class="navlink" id="edu_nav_5">Be an Educator</div>
</div >
<div  class="bluenav" id="bn6">Settings</div ><img src="images/navicon/settings.png" class="bluenavpic"/>
<div  class="bluenav" id="bn7">Feedback</div ><img src="images/navicon/feed.png" class="bluenavpic"/>
</div>


<div class="ajaxright" id="style-4">

</div><!-- All AJAX requests goes here-->
</div>




</div><!--wrapper ends here-->
<?php include("../asteroid/includes/photoviewer.php"); ?>
<div class="copyleft">© 2015, <a href="../asteroidlearning.php" style="color:#ffffff;">Asteroid Learning</a> | India</div>
</body>
</html>