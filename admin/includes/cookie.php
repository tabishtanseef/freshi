<?php
include_once("db.php");
session_start();
if(isset($_COOKIE["admin_id"]))
	{
		$_SESSION['admin_id'] = $_COOKIE["admin_id"];
		$_SESSION['admin_name'] = $_COOKIE['admin_name'];		
		$_SESSION['admin_num'] = $_COOKIE['admin_num'];							
		
	}
?>