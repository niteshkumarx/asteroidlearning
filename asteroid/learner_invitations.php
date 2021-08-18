<?php
//require("../../of_course/constants.php"); //-->on server not required here
//require("../includes/constants.php"); //-->on local machine not required here
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<script src="../js/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="../css/login.css" />
<style>
</style>


<script>


function loadDoc(nex2) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo").innerHTML = xhttp.responseText;
    }
  }
  xhttp.open("POST", "includes/accept_req.php?val="+nex2+"&req=31", true);
  xhttp.send();
}
</script>

</head>
<body>

           	<span style="font-size:40px; color:#058AA8; font-family:Museo;"> Invitations</span><br><br>
<div id="demo"></div>


			<?php 
			
			require_once('includes/functions.php');
			
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
$gtx_query="SELECT * from gtx_registration";
$gtx_query.=" WHERE gtx_email IN (SELECT senders_email_id FROM pre_invitations WHERE reciever_email_id='".$_SESSION['email']."' AND status='INVITED')  order by RAND()";
$gtx_result=mysql_query($gtx_query,$gtx_connection);

if(mysql_num_rows($gtx_result)==0 )
{ 
echo "You've no pending invitations, find your connected learners in My Learners.";
	mysql_close($gtx_connection);
}
else{
 while($row=mysql_fetch_assoc($gtx_result))
{ $precheckmail=$row['gtx_email'];
$display_button=1;


$trim3=rand(100000,999999);
$trim4=rand(100000,999999);

			echo"
			<script> 
$(document).ready(function(){



    $(\"#{$trim3}\").click(function(){
        $(\"#{$trim3}\").hide();
	
});
    $(\"#{$trim3}\").click(function(){
        $(\"#{$trim4}\").show();
	
});

     
    });
	
 </script> 
			
			<div class=\"its_a_learner\">
			<div class=\"learner_info\">
			<span style=\"font-size:24px; font-family:Museo \">{$row['gtx_name']}</span>
			<br/>{$row['city']}
			<br/><span style=\"font-size:12px; color:#cccccc;\">{$row['course']}
		 </span>";
		 
	
		 
		 if($display_button==1)
		 {
		 		echo"<br/>
				<button type=\"button\" class=\"button\" id=\"{$trim3}\" style=\"background:#99CC33;\" onclick=\"loadDoc('".$row['gtx_email']."')\">&nbsp;Accept&nbsp; </button>
				<div id=\"{$trim4}\" style=\"display:none;\"><br/><span style=\"color:#ccc; \">Request Accepted</span></div>";}
				
	 
		 
		echo" </div>
			<div class=\"dp_learner_search\" style=\"background:url('{$row['gtx_dp']}');background-size: cover; \"></div>

			</div>";
				
				}
				mysql_close($gtx_connection);
				}
					
				
		?>	
		

              
	  
			</body></html>