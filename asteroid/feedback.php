<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="../css/form.css" />

 
	
<style>
label{font-size:14px;}
form.register input[type=text]{background:#ffffff; color:#000000;font-size:14px; height:22px; width:230px;}
 form.register select{background:#ffffff; font-size:14px;color:#000000; height:22px; width:230px;}
  form.register input[type=date]{background:#ffffff; font-size:14px;color:#000000; height:22px; width:230px;  
    border: 1px solid #E1E1E1; border-radius:4px;}

</style>


</head>
<body>
        <form action="submit_feedback_create.php" class="register" method="POST" name="create_a_class">
		

           	<span style="font-size:40px; color:#058AA8; font-family:Museo;"> Feedback</span><br>
			
  <br/><?php if(isset($_GET['success_feedback']))
			   
			   {echo" <div style=\"color:#ffffff;font-size:14px;border-radius:4px;background:#0DAACE;height:20px;width:100%;padding-top:1px;padding-left:3px;\">Thank you so much for your valueable feedback, we will reply you soon. You may give more feedbacks.</div>";}
			   else{
             echo" <br>";}?>
                <p>
                    <label >Feed Title
                    </label>
                    <input type="text" required name="feed_name" placeholder=" Your feedback title " title="Class name can not be left blank"/>
                </p>
               
			   <p>
                    <label>Rate Us 
                    </label>
                    <select  name="rating"  required >
                        <option value="1">1
                        </option>
                        <option value="2">2
                        </option>
                          <option value="3">3
                        </option>
                        <option value="4">4
                        </option>
                          <option value="5">5
                        </option>
                        <option value="6">6 Nice
                        </option>
                          <option value="7">7 Awesome
                        </option>
                        <option value="8">8 Incredible
                        </option>
                          <option value="9">9 We love U
                        </option>
                        <option value="10">10 Asteroid will change World
                        </option>

                    </select>
                </p>
				  <p>
                    <label >Worst Thing
                    </label>

      <input type="text" value=""  name="worst"/>
 </p>
				  <p>
                    <label >Best Thing
                    </label>

      <input type="text" value=""  name="best"/>
 </p>
 	  <p><label >Long Feedback
                    </label>
 <textarea required placeholder="Asteroid is not limited to students. Its for everyone so help us improve. Please write the most genuine feedback, what you liked, what you disliked, what changes you want to see, report bugs, which type of courses you wish to be added or anything you love about Asteroid." 
 rows="20" cols="80"  name="comment"
 style="border-radius:4px;resize:none;border:solid 1px #99CCFF;font-face:Century Gothic;font-size:1.3em;color:#000000;padding:2px 2px 2px 2px;" >
</textarea>
   </p><label></label>
	  <input class="button" type="submit" value="Submit" name="submit"></form>
			</body></html>