<?php
	session_start();
    include '../import.php';
	$year = $_GET['year'];
	$sql = "SELECT * FROM `$year`";
	$result = mysqli_query($conn,$sql);
	$table = $_SESSION['mytable'];
	
	
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
    left: 51%;
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
	border-radius: 0.5;
}

#l2 {
   width: 60px;
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
		<select name="student">
			<option value="">Select student :</option>
			<?php while($row1 =mysqli_fetch_array($result)){
            echo"<option>$row1[Roll_no]-$row1[Name]</option>";} 
			?>
		</select>
    </div>
	<div style="margin-top:100px">
	<h2> Term Test Marks (/10)</h2>
	<label id="l2"> CO1: </label>
	<input class="test" type="text" name="CO1" required> </input> 
	<label id="l2"> CO3:</label>
	<input class="test" type="text" name="CO3" required> </input><br>
	<label id="l2">CO2:</label>
	<input class="test" type="text" name="CO2" required> </input>
	<label id="l2"> CO4: </label>
	<input class="test" type="text" name="CO4" required> </input><br>

 
	<h2>University Exam (/80)</h2>
	<label id="l2"> Marks: </label>
	<input class="test" type="text" name="fmark" required> </input> 
	
	</div>
	
	
	<input type="submit" value="ADD" name="added">
</form>



<?php

if(isset($_POST['added'])){
$NAME = $_POST["student"];
	$CO_1 = $_POST["CO1"];
	$CO_2 = $_POST["CO2"];
	$CO_3 = $_POST["CO3"];
	$CO_4 = $_POST["CO4"];
	$fmark = $_POST["fmark"];

	
	

//$sql1 = " INSERT INTO `$year-$table` ( `student`, `CO1`, `CO2`,`CO3`, `CO4`, `fmark`)VALUES ('$NAME', '$CO_1', '$CO_2', '$CO_3', '$CO_4', '$fmark')";
$sql1="INSERT INTO `$year-$table`(`student`, `CO1`, `CO2`, `CO3`, `CO4`, `fmark`) VALUES ('$NAME','$CO_1','$CO_2','$CO_3','$CO_4','$fmark')";
$result1 = mysqli_query($conn,$sql1);
if($result1){
	echo "<script>alert('Inserted successfully!!');
	  window.location='../display/page2.php?crs_code=$table&year=$year'</script>";
}
else{
	echo "Something went wrong.";
	
}

}

?>
<br><br><br><br><br>
	<?php
			include'footer.php';
		?>
</body>
</html>