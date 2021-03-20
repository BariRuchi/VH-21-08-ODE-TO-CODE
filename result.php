<?php
	session_start();
  include 'import.php';
	$year = $_GET['year'];
	$sql = "SELECT * FROM `$year`";
	$result = mysqli_query($conn,$sql);
	
	
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RESULT</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <style>
    .font {
      font-size: 17px;
      font-weight: bolder;
    }

    .text {
      text-align: center;
      background-color: rgb(41, 84, 84);
      color: white;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .head {
      font-size: 60px;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    hr.solid {
      border-top: 3px solid black;
    }
    .container{
      border:solid;
      height: 280px;
      text-align: center;
      width:500px;
    }
    .footer {

      position: fixed;
      padding: 5px;
      left: 0;
      bottom: 0;
      width: 100%;
      background: #222;
      color: grey;
      font-weight: bolder;
      text-align: center;
      font-weight: bolder;
    }
  </style>
    </head>
    <a href="home.php?year=<?php echo $year;?>"><button class="button mt-3 ml-3">CANCEL</button><br></a></div>
    <form method="POST" action="resultgen.php?year=<?php echo $year;?>">
        <body style="background-color:rgb(208,232,232);font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
  ​<div class="container-fluid">
    <div class="jumbotron text">
      <h1 class="head">ENTER THE DETAILS</h1>
      <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">And generate your result!</p>
    </div>
  </div>
  <div class="container">
    <h2 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;margin-top:3px;"><u>Select a batch</u></h2>
    Student Name and Roll No. : <div class="box .container">
		<select name="student">
			<option value=""></option>
			<?php while($row1 =mysqli_fetch_array($result)){
            echo"<option>$row1[Roll_no]-$row1[Name]</option>";} 
			?>
		</select>
    <br><br>
    semester : <select name="sem" >
  <option value="semester3">SEMESTER-3</option>
  <option value="semester4">SEMESTER-4</option>
  <option value="semister5">SEMESTER-5</option>
  <option value="semester6">SEMESTER-6</option>
  <option value="semester7">SEMESTER-7</option>
  <option value="semester8">SEMESTER-8</option>
</select><br><br>
</div>
    
       <input type="submit" value="Generate PDF" name="PDF">
  </div>
  </form>
 
  <?php

    if(isset($_POST['PDF'])){
    $NAME = $_POST["student"];
    $SEM = $_POST["sem"];

    $sql1 = "SELECT * FROM `$year-$SEM`" ;
    $result1 = mysqli_query($conn,$sql1);
    
    if($result1){
    while($rows=mysqli_fetch_assoc($result1))
    {
      $sub = $rows['crs_code'];
      $subj = $rows['SUBJECT'];
      $cat = $rows['category'];

      $sql2 = "SELECT * FROM `$year-$sub` where student = '$NAME'";
      $result2 = mysqli_query($conn,$sql2);

      if($result2){
      while($row=mysqli_fetch_assoc($result2)){
    ?>
              <td><?php echo $subj; ?></td>
             <?php 
             if($sub[2] == 'C') {
              ?>
             <td><?php echo ($row['CO1']+$row['CO2']+$row['CO3']+$row['CO4'])/2 +$row['fmark'];?></td>
             <?php } 
             else if($sub[2] == 'L' && $cat=='experiments') {
              ?>
             <td><?php echo round(($row['QUIZ1']+$row['QUIZ2']+$row['QUIZ3']+$row['QUIZ4'])/4 +($row['ASS1']+$row['ASS2']+$row['ASS3']+$row['ASS4'])/4 +($row['EX1']+$row['EX2']+$row['EX3']+$row['EX4']+$row['EX5']+$row['EX6']+$row['EX7']+$row['EX8']+$row['EX9']+$row['EX10']+$row['EX11']+$row['EX12'])/12 +$row['ORAL']+$row['attendance'] );?></td>
             <?php } 
             else if($sub[2] == 'L' && $cat=='miniproject') {
              ?>
             <td><?php echo ($row['minipro']+$row['attendance'] +$row['ORAL']);?></td>
             <?php } ?>
              </tr>
      <?php    }} }}}?>
</body>
 
</html>