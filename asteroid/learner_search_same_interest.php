<?php
//require("../../of_course/constants.php"); //-->on server not required here
//require("../includes/constants.php"); //-->on local machine  not required here
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


function loadDoc(nex) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo").innerHTML = xhttp.responseText;
    }
  }
  xhttp.open("POST", "includes/addlearner.php?val="+nex+"&req=32", true);
  xhttp.send();
}
</script>

</head>
<body>

           	<span style="font-size:40px; color:#058AA8; font-family:Museo;"> Search Learners</span><br><br>
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
$gtx_query.=" WHERE course='".$_SESSION['course']."' and gtx_email!='".$_SESSION['email']."' and gtx_asteroid='1' and gtx_email not in (select reciever_email_id from pre_invitations where senders_email_id='".$_SESSION['email']."' and  status='ACCEPTED' ) order by RAND()";
$gtx_result=mysql_query($gtx_query,$gtx_connection);

if(mysql_num_rows($gtx_result)==0 )
{ 
echo "Oops! It seems there are no learners matching your interest, try searching everyone.";
	mysql_close($gtx_connection);
}
else{
 while($row=mysql_fetch_assoc($gtx_result))
{ $precheckmail=$row['gtx_email'];
check_pre_invitation($precheckmail);
//preforming pre check if the invitation has already been sent 
if($_SESSION['button_switch_invitation']==0)
{$display_button=1;}
else
{$display_button=0;}
$trim1=rand(100000,999999);
$trim2=rand(100000,999999);
$trim3=rand(100000,999999);
$trim4=rand(100000,999999);

			echo"
			<script> 
$(document).ready(function(){

    $(\"#{$trim1}\").mouseenter(function(){
        $(\"#{$trim2}\").show();
	
});
    $(\"#{$trim1}\").mouseleave(function(){
        $(\"#{$trim2}\").hide();
	
});

    $(\"#{$trim3}\").click(function(){
        $(\"#{$trim3}\").hide();
	
});
    $(\"#{$trim3}\").click(function(){
        $(\"#{$trim4}\").show();
	
});

     
    });
	
 </script> 
			
			<div class=\"its_a_learner\"id=\"{$trim1}\">
			<div class=\"learner_info\">
			<span style=\"font-size:24px; font-family:Museo \">{$row['gtx_name']}</span>
			<br/>{$row['city']}
			<br/><span style=\"font-size:12px; color:#cccccc;\">{$row['course']}
		 </span>";
		 
	
		 
		 if($display_button==1)
		 {
		 		echo"<br/>
				<button type=\"button\" class=\"button\" id=\"{$trim3}\" style=\"background:#99CC33;\" onclick=\"loadDoc('".$row['gtx_email']."')\">&nbsp;Invite&nbsp; </button>
				<div id=\"{$trim4}\" style=\"display:none;\"><br/><span style=\"color:#ccc; \">Invitation Sent</span></div>";}
			else{echo"<br/><br/><span style=\"color:#ccc; \">Invitation Sent</span>";}
		 
		 
		 
		 
		echo" </div>
			<div class=\"dp_learner_search\" style=\"background:url('{$row['gtx_dp']}');background-size: cover; \"></div>
			
		
		
			</div>
				<div class=\"learner_more_info\" id=\"{$trim2}\">here we are</div>";
				
				}
			mysql_close($gtx_connection);
				}
					
				
		?>	
		

              
	  
			</body></html>