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
	
	 
	<a href="../finalmarkssystem.php?sem=<?php echo $no; ?>&year=<?php echo $year;?>"><button  class="button" > LOGOUT </button></a>
	<a href="../add/ADDL.php?year=<?php echo $year;?>&sem=<?php echo $year;?>-<?php echo $sem;?>"><button  class="button" > ADD </button></a>
	<form action="importcsvL.php?year=<?php echo $year;?>&crscode=<?php echo $table; ?>" method="post" enctype="multipart/form-data">
   	<div>
    <label>Import CSV File:</label>
    <input type="file"  name="filename" id="filename"><br>
    <button type="submit" id="done" name="done">Upload</button>
   </div>
  </form>
	<div style="text-align:center">
	<h2> LIST OF STUDENTS</h2>
		<table align="center" border="8px">
			<t>
				<th colspan="10"> NAME</th>
				<th colspan="13"> QUIZ1</th>
				<th colspan="13"> QUIZ2</th>
				<th colspan="13"> QUIZ3</th>
				<th colspan="13"> QUIZ4</th>
				<th colspan="13"> ASS1</th>
				<th colspan="13"> ASS2</th>
				<th colspan="13"> ASS3</th>
				<th colspan="13"> ASS4</th>
				<th colspan="13"> EXP1</th>
				<th colspan="13"> EXP2</th>
				<th colspan="13"> EXP3</th>
				<th colspan="13"> EXP4</th>
				<th colspan="13"> EXP5</th>
				<th colspan="13"> EXP6</th>
				<th colspan="13"> EXP7</th>
				<th colspan="13"> EXP8</th>
				<th colspan="13"> EXP9</th>
				<th colspan="13"> EXP10</th>
				<th colspan="13"> EXP11</th>
				<th colspan="13"> EXP12</th>
				<th colspan="13"> ATTENDANCE</th>
				<th colspan="13"> ORAL</th>
				<th colspan="13"> TOTAL</th>
				<th> ACTIONS</th>
			</t>
		<?php 
			if($result){
			while($rows=mysqli_fetch_assoc($result))
			{
		?>
			<tr>
			<th colspan="10"><?php echo $rows['student']; ?></td>
			<th colspan="13"><?php echo $rows['QUIZ1']; ?></td>
			<th colspan="13"><?php echo $rows['QUIZ2']; ?></td>
			<th colspan="13"><?php echo $rows['QUIZ3']; ?></td>
			<th colspan="13"><?php echo $rows['QUIZ4']; ?></td>
			<th colspan="13"><?php echo $rows['ASS1']; ?></td>
			<th colspan="13"><?php echo $rows['ASS2']; ?></td>
			<th colspan="13"><?php echo $rows['ASS3']; ?></td>
			<th colspan="13"><?php echo $rows['ASS4']; ?></td>
			<th colspan="13"><?php echo $rows['EX1']; ?></td>
			<th colspan="13"><?php echo $rows['EX2']; ?></td>
			<th colspan="13"><?php echo $rows['EX3']; ?></td>
			<th colspan="13"><?php echo $rows['EX4']; ?></td>
			<th colspan="13"><?php echo $rows['EX5']; ?></td>
			<th colspan="13"><?php echo $rows['EX6']; ?></td>
			<th colspan="13"><?php echo $rows['EX7']; ?></td>
			<th colspan="13"><?php echo $rows['EX8']; ?></td>
			<th colspan="13"><?php echo $rows['EX9']; ?></td>
			<th colspan="13"><?php echo $rows['EX10']; ?></td>
			<th colspan="13"><?php echo $rows['EX11']; ?></td>
			<th colspan="13"><?php echo $rows['EX12']; ?></td>
			<th colspan="13"><?php echo $rows['attendance']; ?></td>
			<th colspan="13"><?php echo $rows['ORAL']; ?></td>
			
			<th colspan="13"><?php echo round(($rows['QUIZ1']+$rows['QUIZ2']+$rows['QUIZ3']+$rows['QUIZ4'])/4 +($rows['ASS1']+$rows['ASS2']+$rows['ASS3']+$rows['ASS4'])/4 +($rows['EX1']+$rows['EX2']+$rows['EX3']+$rows['EX4']+$rows['EX5']+$rows['EX6']+$rows['EX7']+$rows['EX8']+$rows['EX9']+$rows['EX10']+$rows['EX11']+$rows['EX12'])/12 +$rows['ORAL']+$rows['attendance'] );?></td>
			
			<td><a href="../delete/DELL.php?student=<?php echo $rows['student'];?>&year=<?php echo $year;?>" class="ded" >Delete</a>
			<a href="../modify/MODIL.php?student=<?php echo $rows['student'];?>&year=<?php echo $year;?>" class="led" >Edit</a></td>
			
			
		<?php
			}
			}
			
		?>
		</table>
	</div>
</div>
	<br><br>
	<?php
			include'footer.php';
		?>
	
</body>
</html>