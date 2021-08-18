<?php
/* Asteroid Learning belongs to Nitesh Kumar
wich has the motive of educating computer sciences to 
the world*/
session_start();
if(isset($_SESSION['email']))
{header("Location: asteroid/learner.php");}
else
{
header("Location: asteroidlearning");
}
exit;
?>