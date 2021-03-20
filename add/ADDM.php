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


<body style="text-align:center;">
	<div>
	<a href="../display/PAGEM.php?crs_code=<?php echo $table;?>&year=<?php echo $year;?>"><button class="button">CANCEL</button><br></a></div>
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
 
	<h2> MINIPROJECT MARKS (/20)</h2>
	<label id="l3"> PROJECT: </label>
	<input class="test" type="text" name="miniproject" required > </input> 
	
	

	<h2> ATTENDANCE (/5)</h2>
	<label id="l3"> ATTENDANCE: </label>
	<input class="test" type="text" name="ATTEN" required> </input> 

	<h2> ORAL (/25)</h2>
	<label id="l2"> ORAL:</label>
	<input class="test" type="text" name="ORAL" required> </input> <br>
    </div>
	
	<input type="submit" value="ADD" name="added">
</form>

<script type="text/javascript">
function cancleme(){
	
 window.location ="PAGEL.php";
 }
 
 </script>

<?php

if(isset($_POST['added'])){
	$NAME = $_POST["student"];
	
	$pro = $_POST["miniproject"];
	$att = $_POST["ATTEN"];
	$oral = $_POST["ORAL"];
	
	

$sql1 = "INSERT INTO `$year-$table` (`student`, `minipro`, `attendance`, `ORAL`) VALUES ('$NAME', '$pro', '$att', '$oral')";
$result1 = mysqli_query($conn,$sql1);
if($result1){
	echo"<script>alert('Inserted successfully!!');
	  window.location='../diaplay/PAGEM.php?crs_code=$table&year=$year'</script>";
}
else{
	echo "Something went wrong.";
}

}

?><br><br><br><br><br>
<?php
    include'footer.php';
  ?>

</body>
</html>