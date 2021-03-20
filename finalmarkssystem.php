<?php 
include("import.php");
session_start();
$sem = $_GET['sem'];
$year = $_GET['year'];
$_SESSION['semno'] = $sem;

if($sem=="3"){
  $sql = "SELECT * FROM `$year-semester3` order by NO";
  $result = mysqli_query($conn,$sql);
  $sem1 = "SEMESTER 3";
  $_SESSION['mysem'] = "semester3" ;
}
elseif($sem=="4"){
  $sql = "SELECT * FROM `$year-semester4` order by NO";
  $result = mysqli_query($conn,$sql);
  $sem1 = "SEMESTER 4";
  $_SESSION['mysem'] = "semester4" ;
}
elseif($sem=="5"){
  $sql = "SELECT * FROM `$year-semister5` order by NO";
  $result = mysqli_query($conn,$sql);
  $sem1 = "SEMESTER 5";
  $_SESSION['mysem'] = "semister5" ;
}
elseif($sem=="6"){
  $sql = "SELECT * FROM `$year-semester6` order by NO";
  $result = mysqli_query($conn,$sql);
  $sem1 = "SEMESTER 6";
  $_SESSION['mysem'] = "semester6";
}
elseif($sem=="7"){
  $sql = "SELECT * FROM `$year-semester7` order by NO";
  $result = mysqli_query($conn,$sql);
  $sem1 = "SEMESTER 7";
  $_SESSION['mysem'] = "semester7" ;
}
elseif($sem=="8"){
  $sql = "SELECT * FROM `$year-semester8` order by NO";
  $result = mysqli_query($conn,$sql);
  $sem1 = "SEMESTER 8";
  $_SESSION['mysem'] = "semester8";
}

?>

<!DOCTYPE html>
<html>
<head>
<title> HOME PAGE </title>
<meta name ="viewport" content ="width=device-width, initial-scale=1">

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
.head {
  padding: 15px;
  text-align: center;
  background-color:rgb(41,84,84);
  color: white;
  font-size: 50px;
  font-family:Georgia, 'Times New Roman', Times, serif;
  
}
.left{
	float:left;
	background-color:rgb(200,200,200);
	padding-left:30px;
	width: 400px;
	height:100vh;
	border:bold;
	
}
.line{
	padding-top:63px;
	background-color:rgb(45,89,89);
	float:left;
	width: 10px;
	height:100vh;
	border:bold;
}
.right{
	float:left;
}

.button{
	background-color:rgb(45,89,89);
	border:bold;
  color:white;
	display: inline-block;
	font-size: 15px;
	margin:13px;
	cursor: pointer;
	width:300px;
	border-radius: 12px;
	padding:3px;

}
.buttonH{
	background-color:rgb(45,89,89);
	border:bold;
  color:white;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 20px;
	margin: 15px 2px;
	cursor: pointer;
	width:150px;
	padding:10px;
	border-radius: 12px;

}
.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
 text-decoration: bold;
 color:rgb(0,125,125);
 font-style:oblique;}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
   padding: 2px 16px;
}



</style>
</head>
<body style="background-color:rgb(208,232,232);">
<div class="container-fluid">
<div class="jumbotron head">
Vidyavardhini's College Of Engineering <br>& Technology
</div>
<a href="home.php?year=<?php echo $year;?>"><button  class="buttonH" > HOME </button></a><br>
<div class="container" style="text-align:center;">
<div >

	<h2 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><u><?php echo $sem1;?></u></h2>
  <div class="row" style="margin-left:50px">
  
	<?php 
			while($rows=mysqli_fetch_assoc($result))
			{
		?>
            <div class="tab-pane fade show active p-3" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div class="card" style="width:18rem;height:185px;">
         
          <div class="card-body">
          <h4 style="text-transform:uppercase"><b><?php echo $rows["SUBJECT"];?></b></h4>
    <a href="decision.php?crs_code=<?php echo $rows["crs_code"]; ?>&year=<?php echo $year;?>" class="btn" style="background-color:rgb(33,65,65);color:white"><?php echo $rows["crs_code"]; ?></a>          </div>
        </div>
      </div>  
						<?php
			}
			include'footer.php';
?>
</div>
</div>
</div>
</body>
</html>