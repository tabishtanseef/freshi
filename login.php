<?php
include("admin/includes/db.php");

session_start();
if(isset($_SESSION['user_id'])!="") {
	header("Location: account.php");
}
$error = false;
if(isset($_POST['forget'])){
	$email = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM users where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['id'];
	$email=$row['email'];
	$password=$row['password'];
	$to = $email;
	$from = 'contact@freshi.in';
	$subject = "Freshi Password";
	$txt = "Your password is : $password.";
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "From: " . $from . "\r\n"; // Sender's E-mail
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 
	$message ='<table style="width:100%">
		<tbody>
		<tr><td>Email: '.$email.'</td></tr> 
		
		<tr><td>Password: '.$password.'</td></tr>
	</tbody></table>';
	 
	if (@mail($to, $from, $message, $headers))
	{
		  ?>
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        
        <div class="d-flex justify-content-center float-left">
			<h5>Forget Password</h5>
		</div>
		<div class="d-flex justify-content-end float-right">
			<img src="icons/cross.png" style="width:25px; margin-top:10px;" data-dismiss="modal" aria-label="Close">
		</div>
        <div class="d-flex justify-content-center float-left">
			<h6>We have sent a new password to you email ID.</h6>
		</div>
      </div>
    </div>
  </div>
</div>
<?php
		
	}else{
		echo 'failed';
	}
}
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	
	if (!$error) {
		$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . $password . "'");
		if ($row = mysqli_fetch_array($result)) {
			
			setcookie('user_id', $row['id'], time() + (86400 * 30), "/");
			setcookie('user_name', $row['name'], time() + (86400 * 30), "/");
			setcookie('user_num', $row['num'], time() + (86400 * 30), "/");
			
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['user_name'] = $row['name'];		
			$_SESSION['user_num'] = $row['num'];			
			$_SESSION['user_email'] = $row['email'];			
			$_SESSION['user_password'] = $row['password'];			
			$_SESSION['user_add1'] = $row['address1'];			
			$_SESSION['user_add2'] = $row['address2'];			
			$_SESSION['user_land'] = $row['landmark'];			
			header("Location: account.php");
		} else {
			$error_message = "Incorrect Phone or Password!!!";
		}
	}
	
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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
 <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/register.css">
  <style>
  body{
	  background:white;
  }
  .modal-dialog{
	  margin-top:250px;	  
  }
  h5{
	color:black;
	font-family: 'Roboto', sans-serif;
	font-weight:Bold;
	font-size:20px;  
	padding:10px;
  }
  h6{
	color:black;
	font-family: 'Roboto', sans-serif;
	font-weight:400;
	font-size:12px; 
	padding:10px;	
  }
  </style>
</head>
<body>

<!--Navbar-->

<div class="sticky">
<nav class="navbar navbar-dark primary-color">
    <div class="d-flex justify-content-start">
		<a href="account.php"><img src="icons/left-arrow.svg" ></a>
		<div class="category-text">Log In</div>
	</div>
</nav>
</div>

<div class="welcom-back">
<?php
	if(isset($error_message)){
		echo $error_message;
	} else{
?>

Welcome Back :)

<?php
	}
?></div>

<form method="post" action="login.php" >
<div class="second">
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="md-form">
			  <input type="text" id="form3" required name="email" <?php if(isset($email_error)){echo "value='$email_error'";}?> class="form-control" >
			  <label for="form3">Email Address</label>
			</div>
		</div>
		<div class="col-10">
			<div class="md-form">
			  <input type="password" id="form4" name="password" class="form-control" >
			  <label for="form4">Enter Password</label>
			</div>
		</div>	
		<div class="col-2">
			<span class="fas fa-eye-slash" id="hide" onclick="hide()"></span>
			<span class="fas fa-eye hidden" id="show" onclick="show()"></span>
		</div>
		<div class="col-6"></div>
		<div class="col-6 ">
			<input type="submit" class="forget-pass float-right" name="forget" data-toggle="modal" data-target="#basicExampleModal" value="Forget Password">
		</div>	
		
	</div>
</div>
</div>
<div class="text-center align-bottom">
	<input type="submit" name="login" class="account-button-login" value="Log In">
</div>
</form>














  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
	<script>
	function hide() {
		console.log("hi");
	  $("#hide").addClass("hidden");
	  $("#show").removeClass("hidden");
	  var input = $("#form4");
	  input.attr("type", "text");
	}
	
	function show() {
	  console.log("bye");
	  $("#show").addClass("hidden");
	  $("#hide").removeClass("hidden");
	  var input = $("#form4");
	  input.attr("type", "password");

	}
</script>
</body>
</html>
