<?php

	session_start();
    include '../import.php';
	
	$table = $_SESSION['mytable'];
	$sem = $_SESSION['mysem'];
	$no = $_SESSION['semno']; 
	$year = $_GET['year'];
	$sql = "SELECT * FROM `$year-$table` order by student";
	$result = mysqli_query($conn,$sql);
	
	
	$sql2 = "SELECT * FROM `$year-$sem` where crs_code = '$table'";
	$result2 = mysqli_query($conn,$sql2);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalabel=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Comapatible" content="ie=edge">
	<link rel="stylesheet" href="page2.css">

	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Stylesheets -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
  <link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
  <link href="css/vertical-responsive-menu.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/night-mode.css" rel="stylesheet">

  <!-- Vendor Stylesheets -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
  <link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">
</head>
<style>
.ded{
	background-color:red;
	color:black;
	font-size:18px;
}
.led{
	background-color:darkcyan;
	color:black;
	font-size:18px;
}
</style>
<body style="background-color:rgb(208,232,232);">
<div class="container-fluid">
<?php 
			if($result2){
			while($row=mysqli_fetch_assoc($result2))
			{
		?>
	<div class="top" style="height:auto;font-size:60px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;text-transform:uppercase;"><u><?php echo $row['SUBJECT'];?></u></div>
	<?php
			}
			}
		?>
	
	<div> 
	<a href="../finalmarkssystem.php?sem=<?php echo $no; ?>&year=<?php echo $year;?>"><button  class="button" style="height:auto;width:auto"> LOGOUT </button></a>
	<a href="../add/ADDM.php?year=<?php echo $year;?>&sem=<?php echo $year;?>-<?php echo $sem;?>"><button  class="button" style="height:auto;width:auto"> ADD </button></a><br>
	</div>
	<form action="importcsvM.php?year=<?php echo $year;?>&crscode=<?php echo $table; ?>" method="post" enctype="multipart/form-data">
   	<div>
    <label>Import CSV File:</label>
    <input type="file"  name="filename" id="filename"><br>
    <button type="submit" id="done" name="done">Upload</button>
   </div>
  </form>
	<div style="text-align:center">
	<h2>LIST OF STUDENTS</h2>
		<table align="center" border="5px">
			<t>
				<th colspan="13"> STUDENTS NAME </th>
				<th colspan="13"> MIINPROJECT</th>
				<th colspan="13"> ATTENDANCE</th>
				<th colspan="13"> ORAL</th>
				<th colspan="13"> TOTAL</th>
				<th> ACTIONS </th>
			</t>
		<?php 
			if($result){
			while($rows=mysqli_fetch_assoc($result))
			{
		?>
			<tr>
			<th colspan="13"><?php echo $rows['student']; ?></td>
			<th colspan="13"><?php echo $rows['minipro']; ?></td>
			<th colspan="13"><?php echo $rows['attendance']; ?></td>
			<th colspan="13"><?php echo $rows['ORAL']; ?></td>
			
			<th colspan="13"><?php echo ($rows['minipro']+$rows['attendance'] +$rows['ORAL']);?></td>
			<td><a href="../delete/DELM.php?student=<?php echo $rows['student'];?>&year=<?php echo $year;?>" class="ded" >Delete</a>
			<a href="../modify/MODIM.php?student=<?php echo $rows['student'];?>&year=<?php echo $year;?>" class="led" >Edit</a></td>
			
			
		<?php
			}
			}
			
		?>
		</table>
	</div><br><br>
	<?php
			include'footer.php';
		?>
</div>
	
</body>
</html>