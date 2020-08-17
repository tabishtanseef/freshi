<?php
include("includes/db.php");
include("includes/cookie.php");
if(!isset($_SESSION['admin_id'])) {
	header("Location: login.php");
}

if(isset($_POST['update']))
{
	//text data variables
	$cat_title=mysqli_real_escape_string($conn, $_POST['cat_title']);
    
	//image_names
	$cat_img = $_FILES['cat_img']['name'] ;

	//image temp names
	$temp_name = $_FILES['cat_img']['tmp_name'] ;

	$file = rand(1000,100000)."-".$_FILES['cat_img']['name'] ;
	$files = preg_replace('/\s+/', '_', $file);
	$temp_file = $_FILES['cat_img']['tmp_name'] ;
	$file_size = $_FILES['cat_img']['size'];
    $file_type = $_FILES['cat_img']['type'];
	$folder="cat_images/";
	$target_file = $folder.basename($_FILES["cat_img"]["name"]);
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
    move_uploaded_file($temp_file,$folder.$files); 
	//image_names
	
	
	$file_name = $_FILES['red_icon']['name'];
	
	$file_name = rand(1000,100000)."-".$_FILES['red_icon']['name'] ;
	$file_name = preg_replace('/\s+/', '_', $file_name);
	
	
	$file_size =$_FILES['red_icon']['size'];
	$file_tmp =$_FILES['red_icon']['tmp_name'];
	$file_type=$_FILES['red_icon']['type'];
	move_uploaded_file($file_tmp,"red_icons/".$file_name);

	
	$file_name1 = $_FILES['black_icon']['name'];
	
	$file_name1 = rand(1000,100000)."-".$_FILES['black_icon']['name'] ;
	$file_name1 = preg_replace('/\s+/', '_', $file_name1);
	
	
	$file_size =$_FILES['black_icon']['size'];
	$file_tmp =$_FILES['black_icon']['tmp_name'];
	$file_type=$_FILES['black_icon']['type'];
	move_uploaded_file($file_tmp,"black_icons/".$file_name1);
	

	$insert_product = "insert into categories(cat_title,red_icon,black_icon,cat_image)	values ('$cat_title','$file_name','$file_name1','$files')";

	$run_product= mysqli_query($conn, $insert_product);

	if($run_product)
	{
		echo "<script> alert('Category Added successfully'); </script>";
	}
	else{
		echo "<script> alert('$cat_id'); </script>";
		echo "<script> alert('$cat_title'); </script>";
		echo "<script> alert('$name'); </script>";
		echo "<script> alert('$product_weight'); </script>";
		echo "<script> alert('$price'); </script>";
		echo "<script> alert('$product_img'); </script>";
		echo "<script> alert('$keywords'); </script>";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Freshi - Add Category</title>

<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<!-- Our Custom CSS -->
<link rel="stylesheet" href="css/style5.css">

<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<style>

th, td{
font-weight:bold;
text-align:right;
color:#32B394;
}


.table-responsive {
	display:block;
	min-width: rem-calc(1500);
}
.sub{
	width:auto;
	background:white;
	margin:10px;
	box-shadow:3px 3px 3px #aaa;
	border:2px solid #AAA;
	padding-top:15px;
}
.horizontal-scroll {
	overflow: hidden;
	overflow-x: auto;
	clear: both;
	width: 100%;
}
</style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include('sidebar.php');?>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Admin Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
			<div class="container" style="min-height:500px;">
			<div class="container out">
				<div class="row">
					<div class="col-md-12 col-md-offset-12 well">
						<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform" enctype="multipart/form-data">
							<fieldset>
								<legend>Insert New Category</legend>
								<div class="row sub" style="margin-top:2%;">
									<div class="col-sm-12 horizontal-scroll">
										<table class="table table-hover table-responsive w-100 d-block d-md-table" style="width:100%;">
											<tbody>
											<tr>
											<td style="padding-top:20px;" >Category Name</td>
											<td><input type="text" name="cat_title"  class="form-control" /></td>
											</tr>
											<tr>
											<td style="padding-top:20px;">Category Red Icon</td>
											<td><input type="file" name="red_icon" class="form-control"/></td>
											</tr>
											<tr>
											<td style="padding-top:20px;">Category Black Icon</td>
											<td><input type="file" name="black_icon" class="form-control"/></td>
											</tr>
											<tr>
											<td style="padding-top:20px;">Category Image</td>
											<td><input type="file" name="cat_img" class="form-control"/></td>
											</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="form-group">
									<center><input type="submit" name="update" value="Add Category" class="btn" style="background:#fab017; font-weight:bold;" /></center>
								</div>
							</fieldset>
						</form>
					</div>
				</div>	
			</div>
			</div>
		</div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
	$("#school").change(function(){
	var school = $(this).val();
	var schoolname = $("#school option:selected").text();
	$("#cat_hidden").val(schoolname);
	});
    </script>
</body>

</html>