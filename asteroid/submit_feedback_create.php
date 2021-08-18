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
$feed_name=$_POST['feed_name'];
$rating=$_POST['rating'];
$worst=$_POST['worst'];
$best=$_POST['best'];
$comment=$_POST['comment'];
$name=$_SESSION['learner_name'];


$gtx_query="INSERT INTO feedback";
$gtx_query.=" (user_name,feed_name,creater_email_id,best,worst,rating,comment) ";
$gtx_query.="VALUES('{$name}','{$feed_name}','{$email}','{$best}','{$worst}','{$rating}','{$comment}')";
//INSERT PHP this way ^^

$gtx_result=mysql_query($gtx_query,$gtx_connection);
if(!$gtx_query)
 {	
 die("Database Query Failed ".mysql_error());
 }
 
 mysql_close($gtx_connection);
header("Location: learner.php?success_feedback=$feed_name");


}
else{
		 mysql_close($gtx_connection);
header("Location: login.php");}

?>