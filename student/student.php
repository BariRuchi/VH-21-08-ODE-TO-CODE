<?php 
    include '../import.php';

    $year=$_GET['year'];?>
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
            width:400px;
            height:460px;
            border:solid;
            margin:auto;
            margin-top: 40px;
            text-align:center;
        }
        input{
            margin:5px;
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
  margin-left: auto;
  margin-right:5px;
  margin-top:3px;
  cursor: pointer;
  
}
        
    </style>
</head>
<body style="background-color:rgb(208,232,232);">
<div>
	<a href="../home.php?year=<?php echo $year;?>"><button class="button">X</button><br></a></div>
<div class="container">
<form action="" method="POST">
    
    <u><h4 style="margin:auto">Add Students</h4></u><br>
    <label> Roll no:</label>    
    <input type="text" name="rollno"> <br>

    <label> Name</label>
    <input type="text" name="stu_name"> <br>
    <input type="submit" class="btn-success" value="Add" name="add">
    <input type="submit" class="btn-primary" value="view" name="view"> <br></form>
     OR
     <form action="importcsv.php?year=<?php echo $year;?>" method="post" enctype="multipart/form-data">
   <div>
    <b><label>Import CSV File:</label></b>
    <input type="file"  name="filename" id="filename">
    <button type="submit" id="done" name="done">Upload</button>
   </div>
   <hr style="height:2px;border-width:0;color:gray;background-color:gray">
  </form>
  <b><h4> Search Here</h4></b>
  <form action='' method='post'>
        ENTER ROLL NO:<input  type="search" name="s" autofocus> 
        <button type="submit" id="done" name="search">search</button>
      </form>
  
</div>

<?php
    if(isset($_POST['add'])){
        $RN =$_POST['rollno'];
        $name= $_POST['stu_name'];

        $sql="INSERT INTO `$year`(`Roll_no`, `Name`) VALUES ('$RN','$name')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('Added!!')</script>";
        }
    }
?>
  <?php  if(isset($_POST['view'])){  
      
      ?>
     
        <table align="center" border="3px" cellpadding=7 style="margin-top:50px">
              <t>
                  <th > ROLL NO.</th>
                  <th >STUDENT NAME</th>
                  <th >Actions</th>
              </t>
          <?php 
              $sql1 = "SELECT * from `$year`";
              $result1 = mysqli_query($conn,$sql1);
               
              while($rows=mysqli_fetch_assoc($result1))
              {
          ?>
              <tr>
              <td ><?php echo $rows['Roll_no']; ?></td>
              <td ><?php echo $rows['Name']; ?></td>
              <td><a href="DEL_Stu.php?Roll_no=<?php echo "$rows[Roll_no]";?>&year=<?php echo $year;?>" class="ded" >Delete</a>
              <a href="MODI_Stu.php?Roll_no=<?php echo "$rows[Roll_no]";?>&year=<?php echo $year;?>" class="led" >Edit</a></td></tr>
      <?php }} ?>
      
     <?php 
     if(isset($_POST['search'])){
        $ser = $_POST['s'];
        $sql = "SELECT `Roll_no`, `Name` FROM `2018-2022` WHERE `Name` LIKE '%$ser%' or `Roll_no` LIKE '%$ser%' ";
        $result2 = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result2);
        
        if($result2){
            ?>
            <div style="text-align:center;"><?php echo "There are ".$num." results.";?></div>
            <table align="center" border="3px" cellpadding=7 style="margin-top:50px">
              <t>
                  <th > ROLL NO.</th>
                  <th >STUDENT NAME</th>
                  <th >Actions</th>
              </t>
              <tr>     
            <?php
            while($row=mysqli_fetch_assoc($result2))
            { ?>
             
               <td><?php echo $row['Roll_no'];?></td> 
               <td><?php echo $row['Name'];?> </td> 
               <td><a href="DEL_Stu.php?Roll_no=<?php echo "$rows[Roll_no]";?>&year=<?php echo $year;?>" class="ded" >Delete</a>
              <a href="MODI_Stu.php?Roll_no=<?php echo "$rows[Roll_no]";?>&year=<?php echo $year;?>" class="led" >Edit</a></td>
              </tr>
         <?php }}
        else{
            echo "student not found!!!" ;
        }
     } ?>
      </body>
</html>