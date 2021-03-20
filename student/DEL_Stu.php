<?php
	
	include '../import.php';
        
    $id=$_GET['Roll_no'];
    $year=$_GET['year'];
	$sql="DELETE FROM `$year` WHERE Roll_no='$id'";
	$result=mysqli_query($conn,$sql);
	if($result){
        echo"<script>alert('Deleted!!');
         window.location='student.php?year=$year';</script>";
       // header("Location:student.php?year=$year");
	}
	else{
		echo "<script>alert('Fail Deleted')</script>";
	}
?>