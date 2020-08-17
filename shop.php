<?php
include("admin/includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Freshi - Shop By Category</title>
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
  <link rel="stylesheet" href="css/css.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/shop.css">
</head>
<body>

<!--Navbar-->
<nav class="navbar fixed-top navbar-light bg-light">
	<div class="d-flex justify-content-start">
		<a class="navbar-brand" href="index.php"><img src="images/freshi.png" class="logo" alt="logo_image"></a>
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
		  <div class="modal-header"></div>
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
				<img src="icons/Group 110180.png" style="height:25px; margin:7px 0px 8px 0px;">
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
<!--/.Navbar-->



<h5 class="shop-by">Shop By</h5>

<div class="container">
  <div class="row">
	<?php
		$get_attendance="select * from categories order by cat_id ASC";
		$run_attendance= mysqli_query($conn, $get_attendance);
		while($row_attendance=mysqli_fetch_array($run_attendance))
		{
			$cat_title = $row_attendance['cat_title'];
			$cat_image = $row_attendance['cat_image'];
			
			echo "
			<div class='col-6 cat-case'>
				<img src='admin/cat_images/$cat_image' class='shopcat-images'>
				<div class='cat-names'>$cat_title</div>
			</div>
			";
		}
		
	?>
	
  </div>
  <br>
</div>

<nav class="nav">
	<a href="index.php" class="nav__links active">
		<img src="icons/bottom_icons/Home.png" class="bot-icons">
		<span class="nav__text">Home</span>
	</a>
	<a href="#" class="nav__links">
		<img src="icons/bottom_icons/Shop_red.png" class="bot-icons">
		<span class="nav__text">Shop</span>
	</a>
	<a href="account.php" class="nav__links">
		<img src="icons/bottom_icons/Profile1.png" class="bot-icons">
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
  <script type="text/javascript"></script>
<script>
	$(document).ready(function(){
		$(".fa-search").click(function(){
		   $(".icon").toggleClass("active");
		   $("input[type='text']").toggleClass("active");
		});
	});
	function shop(){
		$(".home").addClass("hidden");
		$(".shop").removeClass("hidden");
	}
	function home(){
		$(".shop").addClass("hidden");
		$(".home").removeClass("hidden");
	}
	function myFunction() {
	  var popup = document.getElementById("myPopup");
	  popup.classList.toggle("show");
	}
</script>
</body>
</html>
