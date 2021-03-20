<?php 
        include '../import.php';
        $year=$_GET['year'];
?>
<!DOCTYPE html>
<html>

<head>
    <title> HOME PAGE </title>
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
        
        .container {
            width:300px;
            height:200px;
            border:solid;
            margin:auto;
            margin-top: 40px;
            text-align:center;
        }
        input{
            margin:5px;
        }
        input[type="text"]{
            border-radius: 20px;
        }
        .button {
	float:right;
  background-color: red;
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 1px;
  cursor: pointer;
   margin-right: 0;
   margin-left:auto;
}
    </style>
</head>
<body style="background-color:rgb(208,232,232);">
 <div>
	<a href="student.php?year=<?php echo $year;?>"><button class="button">X</button><br></a></div>
<div class="container">
   
<form action="" method="POST">
    <h3 style="margin-top:10px"><u>Edit Students Data</u></h3>
   <?php
        $id=$_GET['Roll_no'];

        $sql="SELECT * from `$year` WHERE Roll_no='$id'";
        $result=mysqli_query($conn,$sql);
        while($rows=mysqli_fetch_assoc($result)){
            $name=$rows['Name'];
    ?>
   
    <label> Roll no:</label>    
    <input style="margin-top:10px;" name="rollno" value="<?php echo $id; ?>"></input><br>
    
    <label> Name:</label>
    <input type="text" name="stu_name" value="<?php echo $name; ?>"> <br>
    
    <?php } ?>
    <input type="submit" class="btn-success p-1" value="Update" name="edit" style="font-size:large">
</form>
</div>
</body>
<?php 
 
    if(isset($_POST['edit'])){
    $RN=$_POST['rollno'];
    $name=$_POST['stu_name'];
 
    $sql1="UPDATE `$year` SET `Name`='$name' WHERE `$year`.`Roll_no`='$RN'";
    $result1 = mysqli_query($conn,$sql1);
    
    if($result1){
        echo"<script>alert(Updated!!);
        window.location='student.php?year=$year';</script>";
       
    }else{
        echo mysqli_error($result1);
    }
  
}
?>
</html>