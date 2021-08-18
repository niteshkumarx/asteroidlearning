<?php 
ob_start();?>
<?php 
require("../../of_course/constants.php");// -->on server
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
$name = ucwords($name);             // HELLO WORLD!
$name = ucwords(strtolower($name));//Hello World
$email=$_POST['email'];
/****************************************************/
$gtx_auth1=md5($_POST['password_confirm']);
$gtx_auth2=sha1($gtx_auth1);
$gtx_auth3=md5($gtx_auth2);
$gtx_auth=$gtx_auth3;
/****************************************************/
$contact=$_POST['contact'];

$institute=$_POST['institute'];
$city=$_POST['city'];
$course=$_POST['course'];
if(isset($_POST['more_course']))
{
	$multiple="";
$multiple.=$_POST['more_course'];
}
$minpart=$_POST['minpart'];
if(isset($_POST['sex']))
{
$sex=$_POST['sex'];
}
else{
$sex="UNKNOWN";}
 if(isset($_POST['dob']))
 {
$dob=$_POST['dob'];
 }
 if(isset($_POST['mob']))
 {
$dob.="-".$_POST['mob'];
 }
  if(isset($_POST['yob']))
 {
$dob.="-".$_POST['yob'];
 }
if(isset($_POST['promo']))
{
$promos="YES";}
else{$promos="NO";}

$domain_main="ELECTRONICS";

$gtx_query="INSERT INTO gtx_registration";
$gtx_query.=" (gtx_name,gtx_email,contact,gtx_auth,city,course,multiple,participants,gender,promos,gtx_dateob,domain_main) ";
$gtx_query.="VALUES('{$name}','{$email}','{$contact}','{$gtx_auth}','{$city}','{$course}','{$multiple}','{$minpart}','{$sex}','{$promos}',STR_TO_DATE('{$dob}', '%d-%m-%Y'),'{$domain_main}')";

 $search_num=mysql_query("select * from gtx_registration  where gtx_email='$email'",$gtx_connection);
 
 $count=mysql_num_rows($search_num);
 if($count>0)
 {
   header("Location: applynow.php?registration_error=1774");
 }
 //INSERT PHP this way ^^
 else
 {
$gtx_result=mysql_query($gtx_query,$gtx_connection);
if(!$gtx_query)
 {	die("Database Query Failed ".mysql_error());}

$from = "training@asteroidlearing.com";
    $to = $email;
    $subject = "You're Successfully registered";
    $message = "Dear {$name}, \n\n Thank you for your registration. We will Get back to you Soon. \n \n If you have any questions, you can call us on 0532-2451180\n \n ";
    mail( $to, $subject, $message);

	 mysql_close($gtx_connection);
header("Location: thankyou.php?candidate=$name");
 }
}
else{
	 mysql_close($gtx_connection);
	 header("Location:../index.php");
}

?>