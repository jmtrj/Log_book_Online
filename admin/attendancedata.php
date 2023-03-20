<?php
	
include 'includes/session.php';
	
	

$output= array();
$sql = "SELECT *, dtr.Id as Ids FROM `dtr` JOIN employeelist ON dtr.EmployeId = employeelist.Id";

$totalQuery = mysqli_query($conn,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	
	0 => 'Firstname',
	1 => 'Lastname',
	2 => 'Timein',
	3 => 'Timeout',
	4 => 'Date',
	5 => 'Type',

);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE Firstname like '%".$search_value."%' OR Lastname like '%".$search_value."%'";
	
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY Ids desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($conn,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();

	$sub_array[] = $row['Firstname'];
	$sub_array[] = $row['Lastname'];
	$sub_array[] = $row['Timein'];
	$sub_array[] = $row['Timeout'];
	$sub_array[] = $row['Date'];
	$sub_array[] = $row['Type'];

	$sub_array[] = '<a href="javascript:void();"  data-id="'.$row['Ids'].'"  class="btn btn-info btn-sm edittmt" > <i class="fa fa-edit"></i>  Edit</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);




?>