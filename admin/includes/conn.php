<?php
	$conn = new mysqli('localhost', 'root', '', 'dtraeon');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>