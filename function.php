<?php
session_start();
include 'conn.php';
date_default_timezone_set('Asia/Manila');

       

if(isset($_POST["Timein"])){

$Id = $_POST['Id'];

$Time = date("h:i:A");
$Date = date("Y-m-d");

$query=mysqli_query($conn, "SELECT * FROM `dtr` JOIN employeelist ON dtr.EmployeId = employeelist.Id  where  dtr.EmployeId='$Id' and Date = '$Date' ") or die(mysqli_error()); 
$row=mysqli_fetch_array($query);


if ($row['Timein'] =='') {

            $sql = "INSERT INTO `dtr` (`Id`, `Timein`, `Timeout`, `EmployeId`, `Date`) VALUES (NULL, '$Time', '', '$Id', '$Date')";
            $result = mysqli_query( $conn, $sql );

            $_SESSION['status'] = 'Timein Successfully';
            $_SESSION['status_code'] = 'success';
            header('location: index.php');
  
}else
{

            $_SESSION['status'] = 'Already Have Timein';
            $_SESSION['status_code'] = 'error';
            header('location: index.php');

}




}




if(isset($_POST["Timeout"])){

            $Id = $_POST['Id'];
            $Time = date("h:i:A");
            $Date = date("Y-m-d");

            $query=mysqli_query($conn, "SELECT * FROM  employeelist JOIN  `dtr` ON dtr.EmployeId = employeelist.Id  where  dtr.EmployeId='$Id' and Date = '$Date' ") or die(mysqli_error()); 
            $row=mysqli_fetch_array($query);
            $Idupdate = $row['Id'];

        if ($row['Timein'] =='') {
                    $_SESSION['status'] = 'Please Time-in Before Time-out';
                    $_SESSION['status_code'] = 'error';
                    header('location: index.php');

        }
        else{
                if ($row['Timeout'] =='') {


                    $sql = "UPDATE dtr SET Timeout = '$Time' WHERE dtr.Id = '$Idupdate'";
                    $result = mysqli_query( $conn, $sql );
                    $_SESSION['status'] = 'Timeout Successfully';
                    $_SESSION['status_code'] = 'success';
                    header('location: index.php');
          
                }else
                {
                    $_SESSION['status'] = 'Already Have Timeout';
                    $_SESSION['status_code'] = 'error';
                    header('location: index.php');

                }
        }


}
    

     
    



   ?>     