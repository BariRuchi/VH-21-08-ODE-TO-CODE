<?php
	session_start();
	include '../import.php';
	$table = $_SESSION['mytable'];
    $year=$_GET['year'];    
		$id=$_GET['student'];

		$data=mysqli_query($conn,"delete from `$year-$table` where student='$id'");
		if($data){
			header("Location:../display/PAGEL.php?year=$year");
		}
		else{
		echo "<script>alert('Fail Deleted')</script>";
		}
		
		?>