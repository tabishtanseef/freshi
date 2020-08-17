<?php
include("admin/includes/db.php");
session_start();

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
  <link rel="stylesheet" href="css/account.css">
  <style>
  .name{
	margin-top:8px;
	font-family: 'Roboto', sans-serif;
	font-size:14px;
	font-weight:900;
  }.num{
	font-family: 'Roboto', sans-serif;
	font-size:12px;
	font-weight:400;
  }
  a{
	  color:black;
  }
  .logout-dialog{
	  margin-top:250px;	  
  }
  .pop{
	color:black;
	font-family: 'Roboto', sans-serif;
	font-weight:Bold;
	font-size:20px;  
	padding:10px;
  }
  .popup{
	color:black;
	font-family: 'Roboto', sans-serif;
	font-weight:400;
	font-size:12px; 
	padding:10px;	
  }
  .btn-logout1{
	border-radius:10px;
	height:46px;
	width:46%;
	margin-top:10px;
	text-align:center;
	background:#fff;
	border:1px solid #BC2C3D;
	font-family: 'Roboto', sans-serif;
	font-weight:400;
	float:left;
	margin-left:-50px;
	font-size:14px;
	color:#BC2C3D;
}
.btn-logout2{
	border-radius:10px;
	border:1px solid #BC2C3D;
	height:46px;
	width:46%;
	margin-top:10px;
	text-align:center;
	background:#BC2C3D;
	font-family: 'Roboto', sans-serif;
	font-weight:400;
	margin-right:10px;
	font-size:14px;
	color:white;
}
  </style>
</head>
<body>

<!--Navbar-->
<nav class="navbar fixed-top navbar-light bg-light">
	<div class="d-flex justify-content-start">
		<a class="navbar-brand" href="#"><img src="images/freshi.png" class="logo" alt="logo_image"></a>
	</div>
	<div class="d-flex justify-content-end">
		<ul>
			<li><img src="icons/nav1.png" class="nav-icons" data-toggle="modal" data-target="#basicExampleModal" alt="logo_image">
			</li>
			<li><img src="icons/nav2.png" class="nav-icons" data-toggle="modal" data-target="#basicExampleModal1" alt="logo_image">
			</li>
			<li><img src="icons/nav3.png" class="nav-icons" data-toggle="modal" data-target="#sideModalTR" alt="logo_image">
			</li>
		</ul>
	</div>
</nav>
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="display:none;">
      <div class="modal-header">
      </div>
    </div>
  </div>
	
	<div class="container bacgroun">
	<div class="row">
	<div class="col-1"> 
		<img src="icons/Group 110179.png" style="height:25px; margin:7px 0px 12px 0px;">
	</div>
	<div class="col-8">
		<div class="d-flex justify-content-start"><input type="text" style="border:0px; font-size:14px; margin-top:10px; margin-left:0px; width:100%;" placeholder="Search for food or items"></div>
	</div>
	<div class="col-2">
		<div class="d-flex justify-content-end"><button type="button" class="cross-icon" data-dismiss="modal" aria-label="Close">Cancel</button></div>
	</div>
	</div>
	<!--
	<div class="md-form mt-0">
		<div class="d-flex justify-content-end"><input type="text" width="12" id="inputIconEx1" placeholder="Search for food or items" class="form-control"><button type="button" class="my-btn">Cancel</button></div>
	</div>-->
	</div>
</div>
<div class="modal fade" id="basicExampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="display:none;">
			<div class="modal-header"></div>
		</div>
	</div>
	<div class="container bacgroun">
	<div class="row">
	<div class="col-1"> 
		<img src="icons/Group 110180.png" style="height:25px; margin:12px 0px 12px 0px;">
	</div>
	<div class="col-8">
		<div class="d-flex justify-content-start"><div class="call-no">&nbsp; Call 0987654321</div></div>
	</div>
	<div class="col-2">
		<div class="d-flex justify-content-end"><button type="button" class="cross-icon" data-dismiss="modal" aria-label="Close">Cancel</button></div>
	</div>
	</div>
	</div>
</div>
<div class="modal fade right" id="sideModalTR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  aria-hidden="true">
  <div class="modal-dialog model-sm modal-side modal-top-right" role="document">
    <div class="three-dots-background">
		<div class="md-form mt-0">
			<div class="d-flex justify-content-start">
				<div class="dots">
					<a href="#" class="extra-info">About Us</a>
					<a href="#" class="extra-info">Certificates</a>
					<a href="#" class="extra-info">Share App</a>
					<a href="#" class="extra-info">Feedback</a>
					<a href="#" class="extra-info">FAQ's</a>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
<?php
if(isset($_SESSION['user_id'])=="") {
	?>
<div class="notloggedin">
<div class="container opaque">
	<div class="row pic-section">
		<div class="col-12">
			<div class="d-flex justify-content-start">
				<img src="icons/My account.png" style="margin-top:7px;width:37px;">
			</div>
		</div>
	</div>

	<div class="row mp-section">
		<div class="col-10">
			<h5 class="mp-heading">Manage profile</h5>
			<div class="mp-desc">Change Name, Password,Mobile Number, Address</div>
		</div>
		<div class="col-2">
			<img src="icons/noun_right_3456463.png" style="margin-top:27px; margin-left:20px;">
		</div>
	</div>
	<div class="row mp-section">
		<div class="col-10">
			<h5 class="mp-heading">My orders</h5>
			<div class="mp-desc">Check your order status</div>
		</div>
		<div class="col-2">
			<img src="icons/noun_right_3456463.png" style="margin-top:27px; margin-left:20px;">
		</div>
	</div>
	<div class="row logout-section">
		<div class="col-10">
			<h5 class="mp-logout">Logout</h5>
		</div>
		<div class="col-2">
			<img src="icons/noun_right_3456463.png" style="margin-top:22px; margin-left:20px;">
		</div>
	</div>		
</div>
<div class="container">
	<div class="row">
		<div class="col-6">
			<a href="login.php"><button type="button" class="btn account-button-login">Log In</button></a>
		</div>
		<div class="col-6">
			<a href="register.php"><button type="button" class="btn account-button-signup">Sign Up</button></a>
		</div>
	</div>
</div>
<?php } 

else{ ?>
<div class="loggedin">
<div class="container">
	<div class="row pic-section">
		<div class="col-2">
			<div class="d-flex justify-content-start">
				<img src="icons/My account.png" style="margin-top:7px;width:37px; margin-right:10px;">
			</div>
		</div>
		<div class="col-9">
			<div class="name">
				<?php echo $_SESSION['user_name']; ?>
			</div>
			<div class="num">
				<?php echo $_SESSION['user_num']; ?>
			</div>
		</div>
	</div>
	<div class="row mp-section">
		
		<div class="col-10">
			<a href="manageprofile.php"><h5 class="mp-heading">Manage profile</h5>
			<div class="mp-desc">Change Name, Password,Mobile Number, Address</div></a>
		</div>
		<div class="col-2">
			<a href="manageprofile.php"><img src="icons/noun_right_3456463.png" style="margin-top:27px; margin-left:20px;"></a>
		</div>
		
	</div>
	<div class="row mp-section">
		
		<div class="col-10">
			<a href="manageorders.php"><h5 class="mp-heading">My orders</h5>
			<div class="mp-desc">Check your order status</div></a>
		</div>
		<div class="col-2">
			<a href="manageorders.php"><img src="icons/noun_right_3456463.png" style="margin-top:27px; margin-left:20px;"></a>
		</div>
		</a>
	</div>
	<div class="row logout-section"  data-toggle="modal" data-target="#basicExampleModal22" >
		<div class="col-10">
			<h5 class="mp-logout">Logout</h5>
		</div>
		<div class="col-2">
			<img src="icons/noun_right_3456463.png" style="margin-top:22px; margin-left:20px;">
		</div>
		</a>
	</div>
</div>
</div>
<?php } ?>

<div class="modal fade" id="basicExampleModal22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel22" aria-hidden="true">
  <div class="modal-dialog logout-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="d-flex justify-content-center float-left">
			<h5 class="pop">Confirm Log out</h5>
		</div>
		<div class="d-flex justify-content-end float-right">
			<img src="icons/cross.png" style="width:25px; margin-top:10px;" data-dismiss="modal" aria-label="Close">
		</div>
        <div class="d-flex justify-content-center float-left">
			<h6  class="popup">Are you sure want to log out now?</h6>
		</div>
      </div>
	  <div class="modal-footer clearfix">
        <button type="button" class="btn-logout1 float-left" onclick="go()" >Yes</button>
        <button type="button" class="btn-logout2 float-right" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>


<nav class="nav">
	<a href="index.php" class="nav__links active">
		<img src="icons/bottom_icons/Home.png" class="bot-icons">
		<span class="nav__text">Home</span>
	</a>
	<a href="shop.php" class="nav__links">
		<img src="icons/bottom_icons/Shop.png" class="bot-icons">
		<span class="nav__text">Shop</span>
	</a>
	<a href="#" class="nav__links">
		<img src="icons/bottom_icons/Profile.png" class="bot-icons">
		<span class="nav__text">Account</span>
	</a>
	<a href="cart.php" class="nav__links">
		<img src="icons/bottom_icons/My-cart.png" class="bot-icons">
		<span class="nav__text">My Cart</span>
	</a>
</nav>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
  function go(){
	  window.location = "logout.php" ;
  }
  
  </script>
</body>
</html>
