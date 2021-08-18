<?php 
session_start();
require("../../../of_course/constants.php");// -->on server
//require("../../includes/constants.php");// -->on local machine
$id=$_GET['val'];
if(isset($_GET['req'])){
function invitation_to_learner($id){
$gtx_connection=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$gtx_connection)
{
	die(" Database Connection Failed".mysql_error());
}

$gtx_select=mysql_select_db(DB_NAME,$gtx_connection);
if(!$gtx_select)
{	die("Database Selection Failed ".mysql_error());
}
	

$gtx_query="INSERT INTO pre_invitations";
$gtx_query.=" (senders_email_id,reciever_email_id,status) ";
$gtx_query.="VALUES('{$_SESSION['email']}','{$id}','INVITED')";

$gtx_result=mysql_query($gtx_query,$gtx_connection);

}
invitation_to_learner($id);
}
?>