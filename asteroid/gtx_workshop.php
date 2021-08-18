<?php 
 require("../../of_course/constants.php"); //-->on server
//require("../includes/constants.php");// -->on local machine
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
$name=$_POST['name'];
$email=$_POST['email'];
/***************************************************
$gtx_auth1=md5($POST['password_confirm']);
$gtx_auth2=sha1($gtx_auth1);
$gtx_auth3=md5($gtx_auth2);
$gtx_auth=$gtx_auth3;
**************************************************/
$contact=$_POST['contact'];

$institute=$_POST['institute'];
$city=$_POST['city'];
$course=$_POST['course'];

$minpart=$_POST['minpart'];

if(isset($_POST['promo']))
{
$promos="YES";
}
else
{
$promos="NO";}


$gtx_query="INSERT INTO gtx_workshop";
$gtx_query.=" (gtx_name,gtx_email,contact,city,course,participants,promos,institute) ";
$gtx_query.="VALUES('{$name}','{$email}','{$contact}','{$city}','{$course}','{$minpart}','{$promos}','{$institute}')";
$gtx_result=mysql_query($gtx_query,$gtx_connection);
if(!$gtx_query)
{	die("Database Query Failed ".mysql_error());}

//mailing
$from = "training@asteroidlearing.com";
    $to = $email;
    $subject = "You're Successfully registered";
    $message = "Dear {$name}, \n\n Thank you for your registration. We will Get back to you Soon. \n \n If you have any questions, you can call us on 0532-2451180\n \n ";
    mail( $to, $subject, $message);


	
 mysql_close($gtx_connection);
header("Location: thankyou.php?candidate=$name");
}

else
{
		
 mysql_close($gtx_connection);
header("Location: ../index.php");
}
?>

