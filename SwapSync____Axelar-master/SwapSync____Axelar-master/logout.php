<?php
session_start();
if(isset($_SESSION["member"])){
	unset($_SESSION["member"]);
	header("location: signup.php");
}
?>