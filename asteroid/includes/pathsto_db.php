<?php 
session_start();
ob_start();
require("../../../of_course/constants.php");// -->on server, its a standalone page
//require("../../includes/constants.php");// -->on local machine, its a standalone page
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
$path=$_SESSION['tempimagepath'];

mysql_query("UPDATE gtx_registration SET gtx_dp='".$path."' WHERE gtx_email='".$dp_email."'");

 mysql_close($gtx_connection);
 header("Location: ../learner.php");

	?>	