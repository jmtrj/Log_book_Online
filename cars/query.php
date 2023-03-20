<?php
	require'../conn.php';
	
	$query=mysqli_query($conn, "SELECT Username FROM `tblwinnerlish` where Prize ='CARS SEDAN MG 5' ") or die(mysqli_error());	
	$fetch=mysqli_fetch_all($query);
	
	echo json_encode(array("items"=>$fetch )); 
	
	
?>