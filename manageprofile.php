<?php
include("admin/includes/db.php");
session_start();
if(isset($_SESSION['user_id'])=="") {
	header("Location: account.php");
}
else{
	$user_id = $_SESSION['user_id'];
}
$error = false;
if (isset($_POST['save'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$num = mysqli_real_escape_string($conn, $_POST['num']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$add1 = mysqli_real_escape_string($conn, $_POST['add1']);
	$add2 = mysqli_real_escape_string($conn, $_POST['add2']);
	$land = mysqli_real_escape_string($conn, $_POST['land']);
	
	if (!preg_match('/^\d{10}$/',$num)) {
		$error = true;
		$num_error = "Contact No. must only contain 10 Digits";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	
	if (!$error) {
			if(mysqli_query($conn, "UPDATE users SET name = '". $name ."', num = '". $num ."', email = '". $email ."', password = '". $password ."', address1 = '". $add1 ."', address2 = '". $add2 ."', landmark = '". $land ."'  where id = $user_id ")) {
				
				$_SESSION['user_name'] = $name;		
				$_SESSION['user_num'] = $num;			
				$_SESSION['user_email'] = $email;			
				$_SESSION['user_password'] = $password;			
				$_SESSION['user_add1'] = $add1;			
				$_SESSION['user_add2'] = $add2;			
				$_SESSION['user_land'] = $land;
				
				header("Location: account.php");
			} else {
				$error_message = "Error in Adding...Please try again later!";
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
  <title>Freshi - Account</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/register.css">
  
</head>
<body>
<div class="sticky">
<nav class="navbar navbar-dark primary-color">
    <div class="d-flex justify-content-start">
		<a href="account.php"><img src="icons/left-arrow.svg" ></a>
		<div class="category-text">Manage Profile</div>
	</div>
</nav>
</div>
<form method="post" action="manageprofile.php" >
<div class="first card">
<div class="container">
	<div class="row">
		<div class="col-12">
			<h6>Basic Details</h6>
		</div>
		
		<div class="col-12">
			<div class="md-form">
			  <input type="text" id="form1" name="name" required value="<?php echo $_SESSION['user_name'];?>"  class="form-control" >
			  <label for="form1">Full Name</label>
			</div>
		</div>
		<div class="col-12">
			<div class="md-form">
			  <input type="text" id="form2" required name="num" value="<?php echo $_SESSION['user_num'];?>" <?php if(isset($num_error)){echo "value='$num_error'";}?> class="form-control" >
			  <label for="form2">Mobile Number</label>
			</div>
		</div>
		<div class="col-12">
			<div class="md-form">
			  <input type="text" id="form3" required name="email" value="<?php echo $_SESSION['user_email'];?>" <?php if(isset($email_error)){echo "value='$email_error'";}?> class="form-control" >
			  <label for="form3">Email Address</label>
			</div>
		</div>
		<div class="col-10">
			<div class="md-form">
			  <input type="password" id="form4" required name="password" value="<?php echo $_SESSION['user_password'];?>" class="form-control" >
			  <label for="form4">Set Password</label>
			</div>
		</div>	
		<div class="col-2">
			<span class="fas fa-eye-slash" id="hide" onclick="hide()"></span>
			<span class="fas fa-eye hidden" id="show" onclick="show()"></span>
		</div>	
	</div>
</div>
</div>
<br>
<div class="card">
<div class="container">
	<div class="row">
		<div class="col-12">
			<h6>Add Address</h6>
		</div>
		<div class="col-12">
			<div class="md-form">
			  <input type="text" id="form5" required name="add1" value="<?php echo $_SESSION['user_add1'];?>" class="form-control">
			  <label for="form5">Address Line 1</label>
			</div>
		</div>
		<div class="col-12">
			<div class="md-form">
			  <input type="text" id="form6" required name="add2" value="<?php echo $_SESSION['user_add2'];?>" class="form-control">
			  <label for="form6">Address Line 2</label>
			</div>
		</div>
		<div class="col-12">
			<div class="md-form">
			  <input type="text" id="form7" required name="land" value="<?php echo $_SESSION['user_land'];?>" class="form-control">
			  <label for="form7">Landmark</label>
			</div>
		</div>
	</div>
</div>
</div>
<div class="text-center">
	<input type="submit" name="save" class="account-button-signup" value="Save Changes">
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
