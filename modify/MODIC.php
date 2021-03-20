<?php
	session_start();
    include '../import.php';
	$year=$_GET['year'];
	$sql = "SELECT * FROM `$year`";
	$result = mysqli_query($conn,$sql);
	 
	$id=$_GET['student'];
	$table = $_SESSION['mytable'];
	$sql1 = "SELECT * FROM `$year-$table` where student='$id'";
	$result1 = mysqli_query($conn,$sql1);
	
	
	?>
	
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<style>
body{
background-color:rgb(208,232,232);
background:linear-gradient(90deg,1b1b1b,rgb(49,49,49),#1b1b1b);
color:black;
}
.container{
            border: 1px solid #ddd;
    display: inline-block;}
.box{
    position: absolute;
    top:10%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.box select{
	background: white;
	color: black;
	padding: 7px;
	width: 350px;
	height: 30px;
	border: none;
	font-size: 15px;
	radius: 0.5;
}

#l2 {
   width:60px;
   display: inline-block;
   text-align: center;
   font-family:"Arial Black", Gadget, sans-serif;
}
input[type=text] {
   width: 150px;
   display: inline-block;
   text-align: center;
}
#i1{width: 200px;
   display: inline-block;
   text-align: center;}

input[type=submit] {
  width: auto;
  background-color: #4CAF50;
  color: white;
  font-size: 25px;
  font-family: Impact,sans-serif;
  padding: 10px;
  margin: 8px 0;
  border: bold;
  border-radius: 4px;
  cursor: pointer;
  display:inline-block;
}
.test{
margin:3px;
}
input[type=submit]:hover {
  background-color: #45a049;
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


<body style="text-align:center;">
	<div>
	<a href="../display/page2.php?crs_code=<?php echo $table;?>&year=<?php echo $year;?>"><button class="button">X</button><br></a></div>
	<form method="POST" action=" ">
	
    <div class="box .container">
		<input type="text" name="student"  size="40" maxlength="80" value="<?php echo "$id"; ?>" style="width:300px;font-size:medium"> </input> 
    </div>
	<?php 
			while($rows=mysqli_fetch_assoc($result1))
			{
	?>
	<div style="margin-top:100px">
	<h2> Term Test Marks </h2>
	<label id="l2"> CO1: </label>
	<input class="test" type="text" name="CO1" value="<?php echo $rows['CO1']; ?>" required> </input> 
	<label id="l2"> CO3:</label>
	<input class="test" type="text" name="CO3" value="<?php echo $rows['CO3']; ?>" required> </input><br>
	<label id="l2">CO2:</label>
	<input class="test" type="text" name="CO2" value="<?php echo $rows['CO2']; ?>" required> </input>
	<label id="l2"> CO4: </label>
	<input class="test" type="text" name="CO4" value="<?php echo $rows['CO4']; ?>" required> </input><br>

 
	<h2> final exam</h2>
	<label id="l2"> marks: </label>
	<input class="test" type="text" name="fmark" value="<?php echo $rows['fmark']; ?>" required> </input> 
	
	</div>
	
	<?php 
			}
	?>
	<input type="submit" value="Modify" name="modify">
</form>



<?php

if(isset($_POST['modify'])){
    $NAME1 = $_POST["student"];
	$CO_1 = $_POST["CO1"];
	$CO_2 = $_POST["CO2"];
	$CO_3 = $_POST["CO3"];
	$CO_4 = $_POST["CO4"];
	$fmark = $_POST["fmark"];
	
    $sql = "UPDATE `$year-$table` SET `CO1` = '$CO_1', `CO2` = '$CO_2', `CO3` = '$CO_3', `CO4` = '$CO_4', `fmark` = '$fmark' WHERE `$year-$table`.`student` = '$NAME1'";
	$result1 = mysqli_query($conn,$sql);
	if($result1){
	echo"<script>alert('Updated successfully!!');
	  window.location='../display/page2.php?crs_code=$table&year=$year'</script>";
	}
	else{
		echo("something went wrong!!");
	}
}
include'footer.php';
?>
</body>
</html>