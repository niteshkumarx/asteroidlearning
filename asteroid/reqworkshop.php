
<html>

<head><title>Workshop | Asteroid Learning</title>

	<?php include("../asteroid/includes/header.php");?>
		
 <link rel="stylesheet" type="text/css" href="../css/form.css"/>

</head>

<body>
<div class="topbar"></div>
<div class="midbarlight"></div>
<div id="wrapper">
<link rel="stylesheet" type="text/css" href="../css/asteroidlearning.css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script>
$(document).ready(function(){

$("html, body").animate({scrollTop:622},500);

});
</script>

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
<div class="Greybox1"><a href="../asteroid/register_asteroid.php">Register Now</a></div>
<div class="Greybox2"><a href="../asteroid/help.php">Help</a></div>
<div class="Greybox3" style="background:linear-gradient(0deg, rgba(255, 255, 255, 1) 80.1%, rgba(204, 204, 204, 1) 100%);color:#000000;">Request Workshops</div>
<div class="Greybox4"><a href="../asteroid/scheduledevents.php">Scheduled Events</a></div>
<div class="Greybox5"><a href="../asteroid/reviews_asteroid.php">Reviews</a></div>
<!--registration bar ends -->


<div class="textbody"> </div>

<div class="bodycolumn1"> <br><br><br><br>

        <form action="gtx_workshop.php" class="register" method="POST" name="registration">
           	<span style="font-size:20; color:#7B7C7C;"> <br><br>Please enter details of Workshop<br></span>
            
            <fieldset class="row2">
                <legend>Coordinator's Details
                </legend>
                <p>
                    <label>Name  
                    </label>
                    <input type="text" class="long" name="name" required/>
                </p>
                <p>
                    <label>Phone  
                    </label>
                    <input type="text"  maxlength="10" name="contact"  pattern="[0-9]{10}" required title="Enter a valid Phone/Mobile number without 0" />
                </p>
                <p>
                    <label class="optional" >Institute/Org  
                    </label>
                    <input type="text" class="long" name="institute" required title="Enter the name of the University, Institute or Organization"/>
                </p>
                <p>
                    <label>City  
                    </label>
                    <input type="text" class="long" required name="city"/>
                </p>
         
                             <p>
                    <label>Course  
                    </label>
                    <select  name="course" class="row3" required style="width: 220px">
                        <option value="WEB">Web Developer
                        </option>
                        <option value="GRAPHIC">Graphics Design & Creativity
                        </option>
                          <option value="BIGDATA">Big Data Development
                        </option>
                        <option value="LINUX">Linux Administration
                        </option>
                          <option value="GAME">Game Pro Developer
                        </option>
                        <option value="MOTIONGRAPHICS">Motion Graphics & After Effects
                        </option>
                          <option value="CAD">Computer Aided Designing
                        </option>
                        <option value="ROBOTICS">Automation & Robotics
                        </option>
                          <option value="APP">App Development
                        </option>
                        <option value="WEBPLUS">Web Development Plus
                        </option>
						 <option value="STARTUP">The StartUp World
                        </option>
						 <option value="LIVEURLIFE">Live Your Life
                        </option>
						 <option value="CAREER">Make Big Difference in Short Life
                        </option>
                    </select>
                </p>
          
				
				<p>
                    <label>Min Participants
                    </label>
                    <select  name="minpart" class="row3" required style="width: 220px">
                      
						  <option value="30">Thirty
                        </option>
						  <option value="50">Fifty
                        </option>
						<option value="70">Seventy
                        </option>
						<option value="100">Hundred
                        </option>
							<option value="101">Above 100
                        </option>
						</select></p>
						   <p>
                    <label>Email  
                    </label>
                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" required title="Enter a valid email ID"/>
                </p>
                <p>&nbsp;</p>
            </fieldset>
          
                <div class="infobox"><h4>Read me</h4>
                    <p style="font-size:1.05em;">We will  contact you shortly  for the way you can get yourself 
					trained. We will be glad to organize our technical sessions in your 
					organization or institutes. Our pricing is dynamic as per number of participating students. Please go through our terms and conditions.</p>
                    <p>Thank You for choosing Asteroid.</p>
					
                </div>
  
            <fieldset class="row4">
                <legend>Terms and Mailing
                </legend>
                <p class="agreement">
                    <input type="checkbox" value="" required/>
                    <label>  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" name="promo" value="YES"/>
                    <label>Send me promotional e-mails and informations</label>
                </p>
								  <p class="agreement">
               
                    <label><a href="pricing.php" target="_blank" style="color:#00ccee; ">Pricing</a></label>
                </p>
                <p class="agreement">&nbsp;</p>
            </fieldset>
            <div><button class="button" type="submit" name="submit">Forward Request &raquo;</button></div>
        </form>
  </div>


  


 <div class="subjectheadingreg" style=" font-size : 54px;color : #000000;  font-family : Museo;">Request a Workshop </div>

<?php include("../asteroid/includes/footer.php"); ?>

</body>
</html>