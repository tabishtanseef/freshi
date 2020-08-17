<!Doctype html>
<?php 
ob_start();
include_once("includes/db.php");
session_start();
if(isset($_SESSION['admin_id'])!="") {
	header("Location: index.php");
}

if (isset($_POST['login'])) {
	$num = mysqli_real_escape_string($conn, $_POST['phone']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$result = mysqli_query($conn, "SELECT * FROM admin WHERE num = '" . $num. "' and password = '" . $password . "'");
	if ($row = mysqli_fetch_array($result)) {
	    
	    setcookie('admin_id', $row['id'], time() + (86400 * 30), "/");
		setcookie('admin_name', $row['name'], time() + (86400 * 30), "/");
		setcookie('admin_num', $row['num'], time() + (86400 * 30), "/");
	    
		$_SESSION['admin_id'] = $row['id'];
		$_SESSION['admin_name'] = $row['name'];		
		$_SESSION['admin_num'] = $row['num'];			
		header("Location: index.php");
	} else {
		$error_message = "Incorrect Phone or Password!!!";
	}
}
?>
<html>
<head>
<meta charset="UTF-8" />
<meta name="description" content="Progress Button Styles: Creative effects for loading buttons" />
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="img/favicon.png">
<title>Admin Login - Freshi </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Gamja+Flower|Kanit|Raleway" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body onload="myLoading()">
<div id="loading"></div>
<br>
<br>
<div class="container" style="min-height:500px;">
<div class="container ">
<br>
<br>
	<div class="row out">
		<div class="col-md-6 col-md-offset-6 well" style="margin:auto;">
			<center><img src="img/logo.png" style="width:50%;  padding:10px;"></center>
		</div>
		<div class="col-md-6 col-md-offset-6 well ">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Login</legend>						
					<div class="form-group">
						<label for="name">Phone</label>
						<input type="text" name="phone" placeholder="Your Phone" required class="form-control" />
					</div>	
					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>	
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn" style="background:#fab017; font-weight:bold;" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
		</div>
	</div>
</div>
</div>
<script>
function myLoading(){
	$('#loading').css('display','none');
}
</script>
</body>
</html>