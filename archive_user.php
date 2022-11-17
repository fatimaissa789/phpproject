<?php 

include "./db/config.php";
include "./model/archive_user.php";

session_start();
	if(@$_SESSION["autoriser"]!="oui"){
		header("location:login.php");
		exit();
	}
?>