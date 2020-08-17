<nav id="sidebar">
	<div class="sidebar-header">
		<center><a href="index.php"><img src="img/freshi.png" style="width:80%; padding:10px;"></a></center>
	</div>

	<ul class="list-unstyled components">
	    <?php 
	    if(!isset($_SESSION['admin_id'])) {
        	header("Location: login.php");
        }
        else{
            $admin_id = $_SESSION['admin_id'];
        }
	    if($admin_id==1){
	        
	    ?>
		<li>
			<a href="insert.php">Add Product</a>
		</li>
		<li>
			<a href="add_cat.php">Add Category</a>
		</li>
		<li>
			<a href="update.php">Update Product</a>
		</li>
		<li>
			<a href="#">Stock Available</a>
		</li>
		<li>
			<a href="pending_orders.php">Pending Orders</a>
		</li>
		<li>
			<a href="p_order.php">All Pending Orders</a>
		</li>
		<li>
			<a href="completed_orders.php">Completed Orders</a>
		</li>
		<li>
			<a href="profile.php">Profile</a>
		</li>
		<li>
			<a href="logout.php">Logout</a>
		</li>
	    <?php }
	    else {
	        ?>
		<li>
			<a href="pending_orders.php">Pending Orders</a>
		</li>
		<li>
			<a href="p_order.php">All Pending Orders</a>
		</li>
		<li>
			<a href="completed_orders.php">Completed Orders</a>
		</li>
		<li>
			<a href="profile.php">Profile</a>
		</li>
		<li>
			<a href="logout.php">Logout</a>
		</li>
	     <?php
	     }
	     ?>
	</ul>

	<ul class="list-unstyled CTAs">
		<a id="date_time" class="pull-right"></a>
			<script type="text/javascript">window.onload = date_time('date_time');</script> 
	</ul>
</nav>
