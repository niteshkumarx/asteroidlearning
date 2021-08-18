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

$dp_email=$_SESSION['email'];

$image_result=mysql_query("SELECT gtx_dp FROM gtx_registration WHERE gtx_email='".$dp_email."'");
while($row=mysql_fetch_assoc($image_result))
{$dp_result=$row['gtx_dp'];}

 mysql_close($gtx_connection);
	?>	