<?php
include_once("includes/db.php");
session_start();
if(!isset($_SESSION['admin_id'])) {
	header("Location: login.php");
}

$id = $_GET['del_id'];


$sql = "DELETE from products WHERE id='$id'"; 
if(mysqli_query($conn, $sql)){ 
	echo "<script>alert('Record deleted successfully.');</script>"; 
	header ("location:update.php");
}  
else{ 
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn); 
} 
mysqli_close($conn); 

?> 
