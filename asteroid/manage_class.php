<?php
require("../../of_course/constants.php"); //-->on server
//require("../includes/constants.php"); //-->on local machine
session_start();
//error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>

<script src="../js/jquery.min.js"></script>

<style>
</style>


</head>
<body>

           	<span style="font-size:40px; color:#058AA8; font-family:Museo;"> Manage your Classrooms</span><br><br>
			
			
			<?php 
$gtx_connection=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$gtx_connection)
{
	die(" Database Connection Failed".mysql_error());
}?>

<?php 
$gtx_select=mysql_select_db(DB_NAME,$gtx_connection);
if(!$gtx_select)
{	die("Database Selection Failed ".mysql_error());
}
?>
	   <?php if(isset($_GET['success_classroom']))
			   
			   {echo" <div style=\"color:#ffffff;font-size:14px;border-radius:4px;background:#0DAACE;height:20px;width:100%;padding-top:1px;padding-left:3px;\">You've successfully created your class :)</div>";}
			   else{
             echo" <br>";}?>
<?php
$gtx_query="SELECT * from classroom_request_to_ast";
$gtx_query.=" WHERE creater_email_id='".$_SESSION['email']."'  order by timestamp desc";
$gtx_result=mysql_query($gtx_query,$gtx_connection);

if(mysql_num_rows($gtx_result)==0 )
{ 
echo "Currently there are no Classrooms associated with your account. Create one.";
	
}
else{
 while($row=mysql_fetch_assoc($gtx_result))
{ 
$trim1=rand();
$trim2=rand();
			echo"
			<script> 
$(document).ready(function(){

    $(\"#{$trim1}\").click(function(){
        $(\"#{$trim2}\").slideToggle(\"fast\");
	
});
    });
	
 </script> 
			
			<div class=\"its_a_class\">
			<div class=\"class_description\">
			<span style=\"font-size:24px; font-family:Museo \">{$row['class_name']}</span>
			<br/>{$row['city']}
			<br/><span style=\"font-size:12px; color:#cccccc;\">{$row['course']}
		 | Scheduled : {$row['date_preferance']}</span>
		 <form >
			<input class=\"button\" type=\"button\" value=\"Submit Class Request\" name=\"add\" style=\"background:#006699;\"></form>
		 </div>
			<div class=\"classicon\" style=\"background:url('{$row['classicon']}')\"></div>
			<div class=\"toggle_attender_list\" id=\"{$trim1}\"></div>
			</div>
				<div class=\"class_attender_list\" id=\"{$trim2}\">here we are</div>";
				
				}}
					mysql_close($gtx_connection);
				
		?>	
		

              
	  
			</body></html>