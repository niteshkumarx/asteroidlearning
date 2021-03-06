<?php 
ob_start();?>
<html>

<head><title>Apply Now | Asteroid Learning</title>

<?php include("../includes/headerforpages.php");?>
<?php 

if(!isset($_POST['submit'])&&!isset($_GET['registration_error']))
{
	 header("Location:../index.php");
	}
 if(isset($_POST['submit'])&&isset($_SESSION['learner_name']))
{
	 header("Location:apply_now.php");
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

        <form action="gtx_combine.php" class="register" method="POST" name="registration">
           	<span style="font-size:20; color:#7B7C7C;"> <br><br>Apply Now for <?php if(isset($_GET['course_name'])){echo $_GET['course_name'];}else{echo "Electronics";} ?></span><br>
			   	<span style="font-size:12; color:#7B7C7C;"> Register for free<br></span>
            <fieldset class="row1">
                <legend>Account Details
                </legend> 
                <p>
                    <label>Email *
                    </label>
                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required name="email" title="Enter a valid email ID"/>
										<?php if(isset($_GET['registration_error'])){
echo"<div style=\"color:#ffffff;display:inline;font-size:10px;border-radius:3px;background:#0DAACE;height:14px;width:700px;padding-top:2px;padding-bottom:1px;padding-left:5px;padding-right:5px;\">
The Email Id you entered is already registered, please choose a different Email Id</div>";}?>
                </p>
                <p>
                    <label>Choose a Password *
                    </label>
                    <input type="password" required id="password" name="password" autocomplete="off"/>
                    <label>Repeat Password
                    </label>
                    <input type="password" required id="password_confirm" oninput="check(this)" name="password_confirm" />
                    <label class="obinfo">* mandatory fields
                    </label>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                <p>
                    <label>Name *
                    </label>
                    <input type="text" class="long" name="name" required/>
                </p>
                <p>
                    <label>Phone *
                    </label>
                    <input type="text"  maxlength="10" name="contact"  pattern="[0-9]{10}" required title="Enter a valid Phone/Mobile number without 0" />
                </p>
                <p>
                    <label class="optional">Institute Name
                    </label>
                    <input type="text" class="long" name="institute"/>
                </p>
                       <p>
                    <label>City *
                    </label>
					   </p>
					
      <input type="text" size="45" value="" id="country" onkeyup="suggest(this.value);" onblur="fill();" class="long" autocomplete="off" required name="city"/>
     <div id="suggest">
      <div class="suggestionsBox" id="suggestions" style="display: none;">
        <div class="suggestionList" id="suggestionsList"></div>
      </div>
   </div>

              <p>
                    <label>Country *
                    </label>
                    <select  name="country">
                    
                        <option value="India">India
                        </option>
                    </select>
                </p>
                             <p>
                    <label>Course Interested
                    </label>
                    <select  name="course" class="row3" required style="width: 220px">
                        <option value="VLSI">VLSI Design
                        </option>
                        <option value="PCB">PCB Board Design
                        </option>
                          <option value="VHDL">VHDL
                        </option>
                        <option value="CIRCUIT">Circuit Implementation
                        </option>
                          <option value="FABRI">Fabrication
                        </option>
                        <option value="EMBEDDED">Embedded Systems
                        </option>
                          <option value="ROBO">Automation and Robotics
                        </option>
                 
                    </select>
                </p>
					     <p>
                    <label class="optional">Multiple
                    </label>
                  <input class="long" type="text" name="more_course" placeholder=" Write Separated by Commas"/>
                </p>		
				<p>
                    <label>Min Participants Upto
                    </label>
                    <select  name="minpart" class="row3" required style="width: 220px">
                        <option value="1">Single
                        </option>
						<option value="5">Five
                        </option>
						  <option value="10">Ten
                        </option>
						  <option value="20">Twenty
                        </option>
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
                        <p>&nbsp;</p>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Gender </label>
                    <input type="radio" value="Male" name="sex"/>
                    <label class="gender">Male</label>
                    <input type="radio" value="Female"  name="sex"/>
                    <label class="gender">Female</label>
                </p>
                <p>
                    <label>Birthdate *
                    </label>
                    <select class="date" name="dob" required>
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select name="mob" required>
                        <option value="1">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>
                    <input class="year" name="yob" type="text" size="4" maxlength="4" min="1950" max="2040" pattern="[0-9]{4}" required title="Enter a valid year in yyyy"/>e.g 1976
                </p>
                <p>&nbsp;</p>
                <div class="infobox"><h4>Almost done</h4>
                    <p style="font-size:1.05em;">We will  contact you shortly  for the way you can get yourself 
					trained. We will be glad to organize our technical sessions in your 
					organization or institutes. As the coordinating member you will be 
					charged no fee for any of our courses. Our pricing is dynamic as per number of participating students.</p>
                    <p>Thank You for choosing Asteroid.</p>
                </div>
            </fieldset>
            <fieldset class="row4">
                <legend>Terms and Mailing
                </legend>
                <p class="agreement">
                    <input type="checkbox" value="" required/>
                    <label>  I accept the <a href="../terms.php" target="_blank">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" name="promo" value="YES"/>
                    <label>Send me promotional e-mails and informations</label>
                </p>
				  <p class="agreement">
               
                    <label><a href="../asteroid/pricing.php" Title="These prices are estimations till we work out on electronics" target="_blank" style="color:#00ccee;">Pricing</a></label>
                </p>
                <p class="agreement">&nbsp;</p>
            </fieldset>
            <div><button class="button" type="submit" name="submit" >Register &raquo;</button></div>
        </form>



  

</div>



<?php include("../includes/footerforpages.php");?>

</body>
</html>