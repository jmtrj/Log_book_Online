<?php 

include 'includes/session.php';
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, dtr.Id as Ids FROM `dtr` JOIN employeelist ON dtr.EmployeId = employeelist.Id where dtr.Id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		echo json_encode($row);
	}
?>