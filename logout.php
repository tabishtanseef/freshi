<?php
ob_start();
session_start();
session_unset();
session_destroy();
setcookie('user_id', null, -1, '/');
if(isset($_SESSION['user_id'])) {
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	
	header("Refresh:3; url=account.php");
} else {
	header("Refresh:3; url=account.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Freshi - Category Products</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
</head>
<body>
<style>

body{
	background:#F5F5F5;
	margin: 0 0 55px 0;
}
div{
	width:150px;
	margin-top:10px;
	font-family: 'Roboto', sans-serif;
	font-size:14px;
	font-weight:400;
}
</style>
<body>
<center>
<img src="images/tick.png" style="margin-top:200px; width:80px;" >
<div>
Your log out process completed successfully.
</div>
</center>
</body>
</html>