<?php 
ob_start();?>
<?php 
require("../../of_course/constants.php");// -->on server
//require("../includes/constants.php"); //-->on local machine
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
/**************************************************
$gtx_auth1=md5($POST['password_confirm']);
$gtx_auth2=sha1($gtx_auth1);
$gtx_auth3=md5($gtx_auth2);
$gtx_auth=$gtx_auth3;
***************************************************/
$contact=$_POST['contact'];


$city=$_POST['city'];
$product=$_GET['this_product'];
$quantity=$_POST['quantity'];
$address=$_POST['address'];
$pin=$_POST['address2'];

if(isset($_POST['promo']))
{
$promos=$_POST['promo'];}else{$promos="NO";}


$gtx_query="INSERT INTO gtx_buycart";
$gtx_query.=" (gtx_name,gtx_email,contact,city,product,promos,address,pincode,quantity) ";
$gtx_query.="VALUES('{$name}','{$email}','{$contact}','{$city}','{$product}','{$promos}','{$address}','{$pin}','{$quantity}')";
$gtx_result=mysql_query($gtx_query,$gtx_connection);
if(!$gtx_query)
{	die("Database Query Failed ".mysql_error());}

 mysql_close($gtx_connection);
header("Location: orders.php?candidate=$name");
}

else{
mysql_close($gtx_connection);
header("Location: ../index.php");
}
?>
