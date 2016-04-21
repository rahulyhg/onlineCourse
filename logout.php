<?php
session_start();

session_destroy();
echo "<script>window.open('logout_screen.php','_self')</script>";
/*if(!$_SESSION['email'])
{
	header("location : ../htmlcode/login.php");
	
}*/




?>