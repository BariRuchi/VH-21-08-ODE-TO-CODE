<?php 
session_start();
include '../import.php';

$crs_code = $_GET['crs_code'];
$sem = $_GET['sem'];
$year =$_GET['year'];
$data=mysqli_query($conn,"delete from `$sem` where crs_code='$crs_code'");
$result=mysqli_query($conn,"DROP TABLE `$year-$crs_code`");


		if($result ){
        echo"<script>alert('Deleted successfully!!');
	  window.location='../home.php?year=$year'</script>";
		}
		else{
            echo mysqli_error($result);
		echo "<script>alert('Fail Deleted')</script>";
		}
		
	
?>