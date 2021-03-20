<?php
	session_start();
    include '../import.php';
	$year=$_GET['year'];
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
	radius: 0.5;
}

#l2 {
   width: 60px;
   display: inline-block;
   text-align: center;
   font-family:"Arial Black", Gadget, sans-serif;
}
#l3 {
   width: 150px;
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
	<a href="../display/pagel.php?crs_code=<?php echo $table;?>&year=<?php echo $year;?>"><button class="button">CANCEL</button><br></a></div>
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
	<h2> QUIZ MARKS (/5)</h2>
	<label id="l2"> QUIZ1: </label>
	<input class="test" type="text" name="QUIZ1" required> </input> 
	<label id="l2"> QUIZ3:</label>
	<input class="test" type="text" name="QUIZ3" required> </input><br>
	<label id="l2">QUIZ2:</label>
	<input class="test" type="text" name="QUIZ2" required> </input>
	<label id="l2"> QUIZ4: </label>
	<input class="test" type="text" name="QUIZ4" required> </input><br>
	
	<h2> ASSIGNMENT MARKS (/10)</h2>
	<label id="l3"> ASSIGNMENT 1: </label>
	<input class="test" type="text" name="ASS1" required> </input> 
	<label id="l3"> ASSIGNMENT 3:</label>
	<input class="test" type="text" name="ASS3" required> </input><br>
	<label id="l3">ASSIGNMENT 2:</label>
	<input class="test" type="text" name="ASS2" required> </input>
	<label id="l3"> ASSIGNMENT 4: </label>
	<input class="test" type="text" name="ASS4" required> </input><br>

 
	<h2> EXPERIMENTS MARKS (/10)</h2>
	<label id="l2"> 1: </label>
	<input class="test" type="text" name="E1" required> </input> 
	<label id="l2"> 2:</label>
	<input class="test" type="text" name="E2" required> </input>
	<label id="l2"> 3:</label>
	<input class="test" type="text" name="E3" required> </input>
	<label id="l2"> 4: </label>
	<input class="test" type="text" name="E4" required> </input><br>
	<label id="l2"> 5: </label>
	<input class="test" type="text" name="E5" required> </input> 
	<label id="l2"> 6:</label>
	<input class="test" type="text" name="E6" required> </input>
	<label id="l2"> 7:</label>
	<input class="test" type="text" name="E7" required> </input>
	<label id="l2"> 8: </label>
	<input class="test" type="text" name="E8" required> </input><br>
	<label id="l2"> 9: </label>
	<input class="test" type="text" name="E9" required> </input> 
	<label id="l2"> 10:</label>
	<input class="test" type="text" name="E10" required> </input>
	<label id="l2"> 11:</label>
	<input class="test" type="text"name="E11" required> </input>
	<label id="l2"> 12: </label>
	<input class="test" type="text" name="E12" required> </input><br>
	
	
	<h2> ATTENDANCE (/5)</h2>
	<label id="l3"> ATTENDANCE: </label>
	<input class="test" type="text" name="ATTEN" required> </input> 

	<h2> ORAL (/25)</h2>
	<label id="l2"> ORAL: </label>
	<input class="test" type="text" name="ORAL" required> </input><br> 
	
	</div>
	
	<input type="submit" value="ADD" name="added">
</form>


<?php

if(isset($_POST['added'])){
	$NAME = $_POST["student"];
	$QUIZ_1 = $_POST["QUIZ1"];
	$QUIZ_2 = $_POST["QUIZ2"];
	$QUIZ_3 = $_POST["QUIZ3"];
	$QUIZ_4 = $_POST["QUIZ4"];
	 $ASS_1 = $_POST["ASS1"];
	 $ASS_2 = $_POST["ASS2"];
	$ASS_3 = $_POST["ASS3"];
	$ASS_4 = $_POST["ASS4"];
	$ex1 = $_POST["E1"];
	$ex2 = $_POST["E2"];
	$ex3 = $_POST["E3"];
	$ex4 = $_POST["E4"];
	$ex5 = $_POST["E5"];
	$ex6 = $_POST["E6"];
	$ex7 = $_POST["E7"];
	$ex8 = $_POST["E8"];
	$ex9 = $_POST["E9"];
	$ex10 = $_POST["E10"];
	$ex11 = $_POST["E11"];
	$ex12 = $_POST["E12"];
	$att = $_POST["ATTEN"];
	$oral = $_POST["ORAL"];
	
	

$sql1 = "INSERT INTO `$year-$table` (`student`, `QUIZ1`, `QUIZ2`, `QUIZ3`, `QUIZ4`, `ASS1`, `ASS2`, `ASS3`, `ASS4`, `EX1`, `EX2`, `EX3`, `EX4`, `EX5`, `EX6`, `EX7`, `EX8`, `EX9`, `EX10`, `EX11`, `EX12`, `attendance`, `ORAL`) VALUES ('$NAME', '$QUIZ_1', '$QUIZ_2', '$QUIZ_3', '$QUIZ_4', '$ASS_1', '$ASS_2', '$ASS_3', '$ASS_4', '$ex1', '$ex2', '$ex3', '$ex4', '$ex5', '$ex6', '$ex7', '$ex8', '$ex9', '$ex10', '$ex11', '$ex12', '$att', '$oral')";
$result1 = mysqli_query($conn,$sql1);
if($result1){
	echo "<script>alert('Inserted successfully!!');
	  window.location='../display/PAGEL.php?crs_code=$table&year=$year'</script>";
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