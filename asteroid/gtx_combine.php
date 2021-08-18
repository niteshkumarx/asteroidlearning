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
$versace=rand(10000,99999);
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
$domain_main="COMPUTERSC";
$gtx_query="INSERT INTO gtx_registration";
$gtx_query.=" (gtx_name,gtx_email,contact,gtx_auth,city,course,multiple,participants,gender,promos,gtx_dateob,domain_main,gtx_asteroid) ";
$gtx_query.="VALUES('{$name}','{$email}','{$contact}','{$gtx_auth}','{$city}','{$course}','{$multiple}','{$minpart}','{$sex}','{$promos}',STR_TO_DATE('{$dob}', '%d-%m-%Y'),'{$domain_main}','{$versace}')";

 $search_num=mysql_query("select * from gtx_registration  where gtx_email='$email'",$gtx_connection);
 
 $count=mysql_num_rows($search_num);
 if($count>0)
 {
   header("Location: register_asteroid.php?registration_error=1774");
 }
 //INSERT PHP this way ^^
 else
 {
$gtx_result=mysql_query($gtx_query,$gtx_connection);
if(!$gtx_query)
 {	die("Database Query Failed ".mysql_error());}

//sending verification mail start
require '../phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'sg2plcpnl0038.prod.sin2.secureserver.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'usercare@asteroidlearning.com';                 // SMTP username
$mail->Password = MAILER_AUTH;                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('usercare@asteroidlearning.com', 'Asteroid Learning');
$mail->addAddress($email,$name);     // Add a recipient


$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Welcome to Asteroid Learning';
 $mail->AddEmbeddedImage("images/ast_white.png", "my-attach", "images/ast_white.png");
$mail->Body    = '
<div style="background : #00B0F0;
  background : rgba(0, 176, 240, 1);
  position : absolute ;
  left : 11px;
    padding:10px 10px 10px 10px;
	  font-family:Century Gothic;
  text-align:right;
  color:#fff;
  font-size:1.1em;
  top : 13px;
  width : 706px;
  height : 126px;" ><img src="cid:my-attach" height="80px"><br><br>Learn Anything Anywhere</div>
  
<div style="  background : #0070C0;
  background : rgba(0, 112, 192, 1);
  position : absolute ;
    padding:10px 10px 10px 10px;
	  font-family:Century Gothic;
	  color:#fff;
  left : 11px;
  top : 138px;
  width : 706px;
  height : 78px;"><span style="font-size:2em;">Hi '.$name.'</span><br>Welcome to Asteroid Learning</div>
  
  
<div style="background : #FFFFFF;
  background : rgba(255, 255, 255, 1);
  position : absolute ;    padding:10px 10px 10px 10px;
  text-align:justify;
    font-family:Century Gothic;
  left : 11px;
  top : 218px;
  width : 706px;
  height : 150px;">You are just a step away from exploring the opportunities around you to learn new skills. We want you to confirm your Email ID so that we may maintain our quality in producing most genuine learners around you. 
<br><br>Asteroid is now an emerging initiative to bring together the people who wish to learn technology to our energetic Asteroid Educators using our learners network. We need to separate the boundaries between a learner and an educator and that is our mission irrespective of the abilities and place where the learner lives. We love innovation and that is all we do. At Asteroid we have a team of professionals, engineers, designers and developers who are actually part of various industries, together we build such a solid base of knowledge that learning can become fun.
<br><br>So, lets begin. Click on the link below to verify your Email ID. Happy Learning.
</div>
<br><br>
<div style=" background : #00B050;
  background : rgba(0, 176, 80, 1);
  position : absolute ;
  text-align:center;
  left : 17px;
  color:#ffffff;
  top : 900px;
  font-family:Century Gothic;
  width : 192px;
  padding-top:10px;
  height : 29px;
  border-radius : 4px;
  -moz-border-radius : 4px;
  -webkit-border-radius : 4px;"><a href="http://www.asteroidlearning.com/asteroid/verify.php?mail='.$email.'&confirm='.$versace.'" style="text-decoration:none;color:#ffffff;" >Verify my Email</a></div>';

$mail->AltBody = 'Welcome to Asteroid Learning, you need to confirm your email';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Verification mail sent';
}

//Sending verification mail end

	 mysql_close($gtx_connection);
header("Location: thankyou.php?candidate=$name");
}}
else{
		 mysql_close($gtx_connection);
header("Location: ../index.php");}

?>