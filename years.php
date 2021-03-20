<?php
include 'import.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Final Marks System</title>
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

<body style="background-color:rgb(208,232,232);font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
  ​<div class="container-fluid">
    <div class="jumbotron text">
      <h1 class="head">FINAL MARKS SYSTEM</h1>
      <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> Where you can easily handle your final marksheets!!</p>
    </div>
  </div>
  <div class="container">
    <h2 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;margin-top:3px;"><u>Select a batch</u></h2>
  <button type="button" class="btn btn-dark m-3" style="width:250px"> <a href="home.php?year=2019-2023" style="color:white"> 2019-2023 </a></button><br>
  <button type="button" class="btn btn-dark m-3" style="width:250px"> <a href="home.php?year=2018-2022" style="color:white"> 2018-2022 </a></button><br>
  <button type="button" class="btn btn-dark m-3" style="width:250px"> <a href="home.php?year=2017-2021" style="color:white"> 2017-2021 </a></button>


  </div>
</body>
<?php 
 ?>

</html>