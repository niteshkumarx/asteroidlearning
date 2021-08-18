<?php
ob_start();
require("../../of_course/constants.php");// -->on server
//require("../includes/constants.php"); //-->on local machine
session_start();
?>
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

<?php 

if(isset($_POST['submit'])){

$email=$_SESSION['email'];
$class_name=$_POST['class_name'];
$course=$_POST['course'];
$city=$_POST['city'];
$classicon=$_POST['classicon'];
$date=$_POST['preferreddate'];
$contact=$_SESSION['contact'];

 $search_num=mysql_query("SELECT course FROM classroom_request_to_ast  WHERE creater_email_id='".$email."' AND class_name='".$class_name."' ",$gtx_connection);

 
 if(mysql_num_rows($search_num)>0)
{ mysql_close($gtx_connection);
header("Location: learner.php?class_redundant=error_712SE2");
}

 else{
$gtx_query="INSERT INTO classroom_request_to_ast";
$gtx_query.=" (class_name,classicon,creater_email_id,contact,city,course,date_preferance) ";
$gtx_query.="VALUES('{$class_name}','{$classicon}','{$email}','{$contact}','{$city}','{$course}','{$date}')";
//INSERT PHP this way ^^

$gtx_result=mysql_query($gtx_query,$gtx_connection);
if(!$gtx_query)
 {	
 die("Database Query Failed ".mysql_error());
 }
 
 mysql_close($gtx_connection);
header("Location: learner.php?success_classroom=$class_name");
 }

}
else{
		 mysql_close($gtx_connection);
header("Location: login.php");}

?>