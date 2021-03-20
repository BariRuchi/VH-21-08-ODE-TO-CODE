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
   width:150px;
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
  width: 10%;
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
	<a href="../display/PAGEL.php?crs_code=<?php echo $table;?>&year=<?php echo $year;?>"><button class="button">CANCEL</button><br></a></div>
	<form method="POST" action=" ">
	
    <div class="box .container">
		<input type="text" name="student"  size="40" maxlength="80" value="<?php echo "$id"; ?>" style="width:300px;font-size:medium"> </input> 
    </div>
	<?php 
			while($rows=mysqli_fetch_assoc($result1))
			{
	?>
	<div style="margin-top:100px">
	<h2> QUIZ MARKS</h2>
	
	<label id="l2"> QUIZ 1: </label>
	<input class="test" type="text" name="QUIZ1" value="<?php echo $rows['QUIZ1']; ?>" required> </input>	
	<label id="l2"> QUIZ 3:</label>
	<input class="test" type="text" name="QUIZ3" value="<?php echo $rows['QUIZ3']; ?>" required> </input><br>
	<label id="l2">QUIZ 2:</label>
	<input class="test" type="text" name="QUIZ2" value="<?php echo $rows['QUIZ2']; ?>" required> </input>
	<label id="l2"> QUIZ 4: </label>
	<input class="test" type="text" name="QUIZ4" value="<?php echo $rows['QUIZ4']; ?>" required> </input><br>


	<h2> ASSIGNMENT MARKS </h2>
	<label id="l2"> ASSIGNMENT 1: </label>
	<input class="test" type="text" name="ASS1" value="<?php echo $rows['ASS1']; ?>" required> </input>	
	<label id="l2"> ASSIGNMENT 3:</label>
	<input class="test" type="text" name="ASS3" value="<?php echo $rows['ASS3']; ?>" required> </input><br>
	<label id="l2">ASSIGNMENT 2:</label>
	<input class="test" type="text" name="ASS2" value="<?php echo $rows['ASS2']; ?>" required> </input>
	<label id="l2"> ASSIGNMENT 4: </label>
	<input class="test" type="text" name="ASS4" value="<?php echo $rows['ASS4']; ?>" required> </input><br>

<h2> EXPERIMENTS MARKS</h2>
	
	<label id="l2"> EX1: </label>
	<input class="test" type="text" name="EX1" value="<?php echo $rows['EX1']; ?>" required> </input>
 <label id="l2"> EX2: </label>
	<input class="test" type="text" name="EX2" value="<?php echo $rows['EX2']; ?>" required> </input>
 <label id="l2"> EX3: </label>
	<input class="test" type="text" name="EX3" value="<?php echo $rows['EX3']; ?>" required> </input>
 <label id="l2"> EX4: </label>
	<input class="test" type="text" name="EX4" value="<?php echo $rows['EX4']; ?>" required> </input><br>
 <label id="l2"> EX5: </label>
	<input class="test" type="text" name="EX5" value="<?php echo $rows['EX5']; ?>" required> </input>
 <label id="l2"> EX6: </label>
	<input class="test" type="text" name="EX6" value="<?php echo $rows['EX6']; ?>" required> </input>
 <label id="l2"> EX7: </label>
	<input class="test" type="text" name="EX7" value="<?php echo $rows['EX7']; ?>" required> </input>
 <label id="l2"> EX8: </label>
	<input class="test" type="text" name="EX8" value="<?php echo $rows['EX8']; ?>" required> </input><br>
 <label id="l2"> EX9: </label>
	<input class="test" type="text" name="EX9" value="<?php echo $rows['EX9']; ?>" required> </input>
 <label id="l2"> EX10: </label>
	<input class="test" type="text" name="EX10" value="<?php echo $rows['EX10']; ?>" required> </input>
 <label id="l2"> EX11: </label>
	<input class="test" type="text" name="EX11" value="<?php echo $rows['EX11']; ?>" required> </input>
 <label id="l2"> EX12: </label>
	<input class="test" type="text" name="EX12" value="<?php echo $rows['EX12']; ?>" required> </input><br>
 
	</div>
	
	<?php 
			}
	?>
	<input type="submit" value="Modify" name="modify">
</form>


<?php

if(isset($_POST['modify'])){
    $NAME1 = $_POST["student"];
	$QUIZ_1 = $_POST["QUIZ1"];
	$QUIZ_2 = $_POST["QUIZ2"];
	$QUIZ_3 = $_POST["QUIZ3"];
	$QUIZ_4 = $_POST["QUIZ4"];
	$ASS_1 = $_POST["ASS1"];
	$ASS_2 = $_POST["ASS2"];
	$ASS_3 = $_POST["ASS3"];
	$ASS_4 = $_POST["ASS4"];
	$ex1 = $_POST["EX1"];
	$ex2 = $_POST["EX2"];
	$ex3 = $_POST["EX3"];
	$ex4 = $_POST["EX4"];
	$ex5 = $_POST["EX5"];
	$ex6 = $_POST["EX6"];
	$ex7 = $_POST["EX7"];
	$ex8 = $_POST["EX8"];
	$ex9 = $_POST["EX9"];
	$ex10 = $_POST["EX10"];
	$ex11 = $_POST["EX11"];
	$ex12 = $_POST["EX12"];
	

    $sql = " UPDATE `$year-$table` SET `QUIZ1` = '$QUIZ_1', `QUIZ2` = '$QUIZ_2', `QUIZ3` = '$QUIZ_3', `QUIZ4` = '$QUIZ_4', `ASS1` = '$ASS_1', `ASS2` = '$ASS_2', `ASS3` = '$ASS_3', `ASS4` = '$ASS_4', `EX1` = '$ex1', `EX2` = '$ex2', `EX3` = '$ex3', `EX4` = '$ex4', `EX5` = '$ex5', `EX6` = '$ex6', `EX7` = '$ex7', `EX8` = '$ex8', `EX9` = '$ex9', `EX10` = '$ex10', `EX11` = '$ex11', `EX12` = '$ex5' WHERE `$year-$table`.`student` = '$NAME1'";
	$result1 = mysqli_query($conn,$sql);
	if($result1){
	echo("Updated successfully!!");
	}
	else{
		echo("something went wrong!!");
	}
}
include'footer.php';
?>
</body>
</html>