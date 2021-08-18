<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <link href="../css/image-picker.css" rel="stylesheet">
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" type="text/css" href="../css/form.css" />

 
	
<style>
label{font-size:14px;}
form.register input[type=text]{background:#ffffff; color:#000000;font-size:14px; height:22px; width:230px;}
 form.register select{background:#ffffff; font-size:14px;color:#000000; height:22px; width:230px;}
  form.register input[type=date]{background:#ffffff; font-size:14px;color:#000000; height:22px; width:230px;  
    border: 1px solid #E1E1E1; border-radius:4px;}

</style>
<?php include("../asteroid/includes/include_city.php"); ?>

</head>
<body>
        <form action="submit_class_create.php" class="register" method="POST" name="create_a_class">
		

           	<span style="font-size:40px; color:#058AA8; font-family:Museo;"> Create a new Classroom</span><br>
			
  <br/>
                <p>
                    <label >Class Name
                    </label>
                    <input type="text" required name="class_name" placeholder=" Anything " title="Class name can not be left blank"/>
                </p>
               
			   <p>
                    <label>Course 
                    </label>
                    <select  name="course"  required >
                        <option value="WEB">Web Developer
                        </option>
                        <option value="GRAPHICS">Graphics Design & Creativity
                        </option>
                          <option value="BIGDATA">Big Data Development
                        </option>
                        <option value="LINUX">Linux Administration
                        </option>
                          <option value="GAMEPRO">Game Pro Developer
                        </option>
                        <option value="MOTIONGRAPHICS">Motion Graphics & After Effects
                        </option>
                          <option value="CAD">Computer Aided Designing
                        </option>
                        <option value="ROBO">Automation & Robotics
                        </option>
                          <option value="APP">App Development
                        </option>
                        <option value="WEBPLUS">Web Development Plus
                        </option>
						<option value="VLSI">VLSI Design
                        </option>
                        <option value="PCB">PCB Board Design
                        </option>
                          <option value="VHDL">VHDL
                        </option>
                        <option value="CIRCUIT">Circuit Implementation
                        </option>
                          <option value="FABRICATION">Fabrication
                        </option>
                        <option value="EMBEDDED">Embedded Systems
                        </option>
                    
                 
                    </select>
                </p>
				  <p>
                    <label >Preferred City
                    </label>
             		
					
      <input type="text" value="" id="country" onkeyup="suggest(this.value);" onblur="fill();" class="long" autocomplete="off" required name="city"/>
     <div id="suggest">
      <div class="suggestionsBoxprofile"  id="suggestions" style="display: none;">
        <div class="suggestionList" id="suggestionsList"></div>
      </div>
   </div>

               
		      <label >Preferred Date
                    </label>
  <input type="date" name="preferreddate" required title="Please enter a valid date in mm/dd/yyyy 
after <?php echo date("m-d-Y", strtotime("+7 day")); ?> and before <?php echo date("m-d-Y", strtotime("+2 month")); ?>"
  min="<?php echo date("Y-m-d", strtotime("+7 day")); ?>" max="<?php echo date("Y-m-d", strtotime("+2 month")); ?>">

			   </p>
			   <?php if(isset($_GET['class_redundant']))
			   
			   {echo" <div style=\"color:#ffffff;font-size:14px;border-radius:4px;background:#0DAACE;height:20px;width:100%;padding-top:1px;padding-left:3px;\">A class with the same name has already been created by you, please choose a different name</div>";}
			   else{
             echo" <br>";}?>
			 
			 <div style="background: #E1E1E1; height:2px;width:100%; display:inline-block;"></div>
			  

<select  class="image-picker show-html" required name="classicon">
  <option data-img-src="images/classicons/1.jpg" value="images/classicons/1.jpg" >  Fickle </option>
  <option data-img-src="images/classicons/2.png" value="images/classicons/2.png"> Auto </option>
    <option data-img-src="images/classicons/3.png" value="images/classicons/3.png"> Tweety   </option>
	  <option data-img-src="images/classicons/4.jpg" value="images/classicons/4.jpg"> Backlit  </option>
	  <option data-img-src="images/classicons/5.png" value="images/classicons/5.png"> Pattern  </option>
  <option data-img-src="images/classicons/6.jpg" value="images/classicons/6.jpg">  Rose</option>
    <option data-img-src="images/classicons/7.jpg" value="images/classicons/7.jpg"> Kitchen  </option>
	  <option data-img-src="images/classicons/8.jpg" value="images/classicons/8.jpg">Arts  </option>
	  <option data-img-src="images/classicons/9.jpg" value="images/classicons/9.jpg">  Blocks </option>
  <option data-img-src="images/classicons/10.jpg" value="images/classicons/10.jpg"> Diet</option>
    <option data-img-src="images/classicons/11.jpg" value="images/classicons/11.jpg"> King  </option>
	  <option data-img-src="images/classicons/12.png" value="images/classicons/12.png"> Elephant </option>
	  <option data-img-src="images/classicons/13.jpg" value="images/classicons/13.jpg">  Terra </option>
  <option data-img-src="images/classicons/14.jpg" value="images/classicons/14.jpg">  Leaf  </option>
    <option data-img-src="images/classicons/15.jpg" value="images/classicons/15.jpg"> Love  </option>
  <option data-img-src="images/classicons/16.png" value="images/classicons/16.png"> Fishy</option>
    <option data-img-src="images/classicons/17.jpg" value="images/classicons/17.jpg"> Zigzag  </option>
	  <option data-img-src="images/classicons/18.jpg" value="images/classicons/18.jpg">  Graffiti</option>
    <option data-img-src="images/classicons/19.jpeg" value="images/classicons/19.jpeg"> Form  </option>
	  <option data-img-src="images/classicons/20.jpeg" value="images/classicons/20.jpeg">  Idea</option>

</select>
Set a <b>class icon</b> for your class<br>
<input class="button" type="submit" value="Create" name="submit">


</form>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	   <script src="../js/image-picker.js"></script>
	      <script >    jQuery("select.image-picker").imagepicker({
						hide_select:  true, });</script>
	  
			</body></html>