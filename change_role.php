<?php 

include "./db/config.php";
include "./model/change_role.php";

session_start();
	if(@$_SESSION["autoriser"]!="oui"){
		header("location:login.php");
		exit();
	}
?>