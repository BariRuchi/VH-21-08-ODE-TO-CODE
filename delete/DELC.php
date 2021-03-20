<?php
	session_start();
	include '../import.php';
	$table = $_SESSION['mytable'];
    $year=$_GET['year'];  
		$id=$_GET['student'];

		$data=mysqli_query($conn,"delete from `$year-$table` where student='$id'");
		if($data){
			echo"<script>alert('Deleted successfully!!');
	  window.location='../display/page2.php?crs_code=$table&year=$year'</script>";
		}
		else{
		echo "<script>alert('Fail Deleted')</script>";
		}
	
?>