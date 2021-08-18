<?php
session_start();
ob_start();
require("../../of_course/constants.php");// -->on server, not-standalone, redirection to same directory
//require("../includes/constants.php");//-->on local machine, not-standalone, redirection to same directory
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

$email=$_POST['email'];
/****************************************************/
$gtx_auth1=md5($_POST['password_confirm']);
$gtx_auth2=sha1($gtx_auth1);
$gtx_auth3=md5($gtx_auth2);
$gtx_auth=$gtx_auth3;



$gtx_query="SELECT * from gtx_registration";
$gtx_query.=" WHERE gtx_email='".$email."' AND gtx_auth='".$gtx_auth."' AND gtx_asteroid='1'";
$gtx_result=mysql_query($gtx_query,$gtx_connection);

if(mysql_num_rows($gtx_result)==0 )
{ mysql_close($gtx_connection);
header("Location: login.php?authentication_error=1");
}
else{

 while($row=mysql_fetch_assoc($gtx_result)) {
	  $_SESSION['learner_name']=$row['gtx_name'];
	  $_SESSION['city']=$row['city'];
	  $_SESSION['email']=$row['gtx_email'];
	  $_SESSION['course']=$row['course'];
	  $_SESSION['domain_main']=$row['domain_main'];
	  $_SESSION['gender']=$row['gender'];
	  $_SESSION['contact']=$row['contact'];
	    $_SESSION['sex']=$row['gender'];
	  }
		 
	mysql_close($gtx_connection);
	

header("Location:learner.php?candidate=1");

	}
}//end of set post request
else
{
 mysql_close($gtx_connection);
header("Location: login.php");
}