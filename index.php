<?php
include("admin/includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Freshi - Home</title>
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

<!--/.Navbar-->
<!-- Start your project here-->  
<!-- Home Tab Start-->
<div class="home">
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="images/Slider/Always Fresh_S.jpg"
          alt="First slide">
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="images/Slider/Hygienic_S.jpg"
          alt="Second slide">
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="images/Slider/preservative free_S.jpg"
          alt="Third slide">
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="images/Slider/Test the Best_S.jpg"
          alt="Forth slide">
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<h5 class="shop">Shop By Category</h5>
<!--/.Carousel Wrapper-->
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
		<?php
		$get_attendance="select * from categories order by cat_id ASC";
		$run_attendance= mysqli_query($conn, $get_attendance);
		while($row_attendance=mysqli_fetch_array($run_attendance))
		{
			$cat_title = $row_attendance['cat_title'];
			$red_icons = $row_attendance['red_icon'];
			
			echo "<th class='colu'><div class='icon-table'><img src='admin/red_icons/$red_icons' class='table-icon' ></div><div class='ic-name'>$cat_title</div></th>";
		}
		
		?>
	  </tr>
    </thead>
  </table>
</div>
<h5 class="top">Today's Special</h5>
<div class="container">
  <div class="row">
    <div class="col-6 product-case">
		<div class="product-holder1">
			<img src="images/home1.jpg" class="home-images">
		</div>
		<div class="desc-holder">
			<h6 class="desc1">Mutton Cut</h6>
			<div class="pr1">&#8377; 260 (500 gms)</div>
		</div>
	</div>
    <div class="col-6 product-case">
		<div class="product-holder2">
			<img src="images/home3.jpg" class="home-images">
		</div>
		<div class="desc-holder">
			<h6 class="desc2">Chicken Thighs</h6>
			<div class="pr2">&#8377; 260 (500 gms)</div>
		</div>
	</div>
  </div>
</div>
<h5 class="stop">What's New</h5>
<div class="container">
  <div class="row">
    <div class="col-6 product-case">
		<div class="product-holder1">
			<img src="images/home1.jpg" class="home-images">
		</div>
		<div class="desc-holder">
			<h6 class="desc1">Mutton Cut</h6>
			<div class="pr1">&#8377; 260 (500 gms)</div>
		</div>
	</div>
    <div class="col-6 product-case">
		<div class="product-holder2">
			<img src="images/home3.jpg" class="home-images">
		</div>
		<div class="desc-holder">
			<h6 class="desc2">Chicken Thighs</h6>
			<div class="pr2">&#8377; 260 (500 gms)</div>
		</div>
	</div>
  </div>
</div>
<h5 class="stop">Top Offers</h5>
<div class="container">
  <div class="row">
    <div class="col-6 product-case">
		<div class="product-holder1">
			<img src="images/home1.jpg" class="home-images">
		</div>
		<div class="desc-holder">
			<h6 class="desc1">Mutton Cut</h6>
			<div class="pr1">&#8377; 260 (500 gms)</div>
		</div>
	</div>
    <div class="col-6 product-case">
		<div class="product-holder2">
			<img src="images/home3.jpg" class="home-images">
		</div>
		<div class="desc-holder">
			<h6 class="desc2">Chicken Thighs</h6>
			<div class="pr2">&#8377; 260 (500 gms)</div>
		</div>
	</div>
  </div>
  <br >
</div>
<!-- Home Tab End-->
</div>

<nav class="nav">
	<a href="#" class="nav__links active">
		<img src="icons/bottom_icons/Home_red.png" class="bot-icons">
		<span class="nav__text">Home</span>
	</a>
	<a href="shop.php" class="nav__links">
		<img src="icons/bottom_icons/Shop.png" class="bot-icons">
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
