<?php
session_start();
?>
<?php

if(isset($_GET['logout'])){
// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 

if(isset($_POST['new_reg_req'])){
header("Location: register_asteroid.php");
}

else{
header("Location: login.php");
}
}


else{
header("Location: login.php");

}

?>