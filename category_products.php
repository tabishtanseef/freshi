<?php
include("admin/includes/db.php");

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
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <style>
    div.sticky {
		background:white;
		position: -webkit-sticky; /* Safari */
		position: sticky;
		top: 0px;
		z-index:9999;
	}
  </style>
</head>
<body>

<!--Navbar-->
<div class="sticky">
<nav class="navbar navbar-dark primary-color">
    <div class="d-flex justify-content-start">
		<a href="shop.php"><img src="icons/left-arrow.svg" ></a>
		<div class="category-text">Chicken</div>
	</div>
	<div class="d-flex justify-content-end">
		<img src="icons/nav1.png" class="nav-icons" data-toggle="modal" data-target="#basicExampleModal" alt="logo_image">
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
<!--/.Navbar-->
<!-- Start your project here-->  
<!-- Home Tab Start-->

<div class="table-responsive">
  <table class="fixed">
    <thead>
      <tr>
	    <?php
		$get_attendance="select * from categories order by cat_id ASC";
		$run_attendance= mysqli_query($conn, $get_attendance);
		while($row_attendance=mysqli_fetch_array($run_attendance))
		{
			$cat_title = $row_attendance['cat_title'];
			$red_icons = $row_attendance['red_icon'];			
			echo "<th class='colu'><img src='admin/red_icons/$red_icons' class='table-icon' ><div class='ic-name'>$cat_title</div></th>";
		}
		?>
      </tr>
    </thead>
  </table>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="each-pro">
				<img src="images/chickencurry.png" class="each-img">
				<div class="row">
					<div class="col-10 pro-name">
						Chicken Curry Cut
					</div>
					<div class="col-6 pro-weight">
						Weight : 250 gm
						<div class="rate"> &#8377; 110</div>
					</div>
					<div class="col-6 btn-space">
						<div class="d-flex justify-content-end">
							<button type="button" class="add my-btn" onclick="add(1)">ADD</button>
							<div class="quantity-select hidden">                           
								<span class="value-minus"><img src="icons/sub.png" class="add-sub"></span>
								<span class="value"><span>1</span></span>
								<span class="value-plus active"><img src="icons/add.png" class="add-sub"></span>
								<span style="visibility:hidden;"><img src="icons/add.png" style="width:20px;"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="each-pro">
				<img src="images/chickencurry.png" class="each-img">
				<div class="row">
					<div class="col-10 pro-name">
						Chicken Curry Cut
					</div>
					<div class="col-6 pro-weight">
						Weight : 250 gm
						<div class="rate"> &#8377; 110</div>
					</div>
					<div class="col-6 btn-space">
						<div class="d-flex justify-content-end">
							<button type="button" class="add my-btn" onclick="add(1)">ADD</button>
							<div class="quantity-select hidden">                           
								<span class="value-minus"><img src="icons/sub.png" class="add-sub"></span>
								<span class="value"><span>1</span></span>
								<span class="value-plus active"><img src="icons/add.png" class="add-sub"></span>
								<span style="visibility:hidden;"><img src="icons/add.png" style="width:20px;"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="each-pro">
				<img src="images/chickencurry.png" class="each-img">
				<div class="row">
					<div class="col-10 pro-name">
						Chicken Curry Cut
					</div>
					<div class="col-6 pro-weight">
						Weight : 250 gm
						<div class="rate"> &#8377; 110</div>
					</div>
					<div class="col-6 btn-space">
						<div class="d-flex justify-content-end">
							<button type="button" class="add my-btn" onclick="add(1)">ADD</button>
							<div class="quantity-select hidden">                           
								<span class="value-minus"><img src="icons/sub.png" class="add-sub"></span>
								<span class="value"><span>1</span></span>
								<span class="value-plus active"><img src="icons/add.png" class="add-sub"></span>
								<span style="visibility:hidden;"><img src="icons/add.png" style="width:20px;"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="each-pro">
				<img src="images/chickencurry.png" class="each-img">
				<div class="row">
					<div class="col-10 pro-name">
						Chicken Curry Cut
					</div>
					<div class="col-6 pro-weight">
						Weight : 250 gm
						<div class="rate"> &#8377; 110</div>
					</div>
					<div class="col-6 btn-space">
						<div class="d-flex justify-content-end">
							<button type="button" class="add my-btn" onclick="add(1)">ADD</button>
							<div class="quantity-select hidden">                           
								<span class="value-minus"><img src="icons/sub.png" class="add-sub"></span>
								<span class="value"><span>&nbsp; 1 &nbsp;</span></span>
								<span class="value-plus active"><img src="icons/add.png" class="add-sub"></span>
								<span style="visibility:hidden;"><img src="icons/add.png" style="width:20px;"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<!-- Home Tab End-->
<div class="d-flex justify-content-center">
<nav class="nav">
	<a href="cart.php" class="text-viewcart">
		View Cart (0)
	</a>
</nav>
</div>
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

	function add(){
		$(".add").addClass("hidden");
		$(".quantity-select").removeClass("hidden");
	}
	$('.value-plus').on('click', function(){
		var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
		divUpd.text(newVal);
	});

	$('.value-minus').on('click', function(){
		var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
		if(newVal>=1) divUpd.text(newVal);
	});
</script>
</body>
</html>
