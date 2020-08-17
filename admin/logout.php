<?php
ob_start();
session_start();
session_unset();
session_destroy();
setcookie('admin_id', null, -1, '/');
if(isset($_SESSION['admin_id'])) {
	unset($_SESSION['admin_id']);
	unset($_SESSION['admin_name']);
	
	header("Location: index.php");
} else {
	header("Location: index.php");
}
?>