<?php   include 'import.php';
$year=$_GET['year'];?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> ADD COURSE </title>
</head>
<style>
body{
background-color:rgb(208,232,232);
background:linear-gradient(90deg,1b1b1b,rgb(49,49,49),#1b1b1b);
color:black;
font-size: 18px;
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
   width: 150px;
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
   <a href="home.php?year=<?php echo $year;?>"><button class="button">CANCEL</button><br></a></div>
   
   <form method="POST" action=" ">
	
	<div style="margin-top:100px">
     
         <div class=".test" style="padding-bottom:10px;">
            <label> Enter Course Code:</label>
            <input style="border-radius:15px;height:20px;width:300px" name="code" required> </input>
            <p style="color:red;margin-left:150px;">*Please insert course code in capital letters only. </p>
         </div>

         <div class=".test">
            <label> Enter Course Name:</label>
            <input style="border-radius:15px;height:20px;width:300px" name="title" required> </input>
         </div>

         <h3> Only For Practical Courses</h3>
         <div class="radio mt-3">
            <label><input type="radio" name="optradio" value="experiments" checked> Experiments</label>
         </div>
         <div class="radio">
            <label><input type="radio" name="optradio" value="miniproject"> Miniproject</label>
         </div>
            
   
	</div>
	
	<input type="submit" value="ADD" name="added">
</form>
</body>
<?php   
   
   $mysem = $_GET['sem'];
 
   if(isset($_POST['added'])){
      $course_code = $_POST['code'];
      $course_name = $_POST['title'];
      $radio = $_POST['optradio'];

      if($course_code[0]!='I'){
            echo"<script> alert(Course code start with IT !!)</script>";
      }
      elseif($course_code[2] == 'C'){
         $sql="CREATE TABLE `$year-$course_code` ( `student` VARCHAR(50) NOT NULL , `CO1` INT(2) NOT NULL , `CO2` INT(2) NOT NULL ,`CO3` INT(2) NOT NULL ,`CO4` INT(2) NOT NULL ,`fmark` INT(2) NOT NULL , PRIMARY KEY (`student`))";
         $result=mysqli_query($conn,$sql);
        
         $sql1 = "INSERT INTO `$mysem`( `crs_code`, `SUBJECT`, `category`) VALUES ('$course_code','$course_name','$radio')";
         $result1 = mysqli_query($conn,$sql1);
         echo "ADDED SUCSSESFULLY !!";
      }
      elseif($course_code[2] == 'O'){
         $sql="CREATE TABLE `$year-$course_code` ( `student` VARCHAR(50) NOT NULL , `CO1` INT(2) NOT NULL , `CO2` INT(2) NOT NULL ,`CO3` INT(2) NOT NULL ,`CO4` INT(2) NOT NULL ,`fmark` INT(2) NOT NULL , PRIMARY KEY (`student`))";
         $result=mysqli_query($conn,$sql);
        
         $sql1 = "INSERT INTO `$mysem`( `crs_code`, `SUBJECT`, `category`) VALUES ('$course_code','$course_name','$radio')";
         $result1 = mysqli_query($conn,$sql1);
         echo "ADDED SUCSSESFULLY !!";
      }
      elseif($course_code[2] == 'D'){
         $sql="CREATE TABLE `$year-$course_code` ( `student` VARCHAR(50) NOT NULL , `CO1` INT(2) NOT NULL , `CO2` INT(2) NOT NULL ,`CO3` INT(2) NOT NULL ,`CO4` INT(2) NOT NULL ,`fmark` INT(2) NOT NULL , PRIMARY KEY (`student`))";
         $result=mysqli_query($conn,$sql);
        

        $sql1 = "INSERT INTO `$mysem`( `crs_code`, `SUBJECT`, `category`) VALUES ('$course_code','$course_name','$radio')";
         $result1 = mysqli_query($conn,$sql1);
         echo "ADDED SUCSSESFULLY !!";
      }
      elseif($course_code[2] == 'L' && $radio=='miniproject'){
         $sql="CREATE TABLE `$year-$course_code` ( `student` VARCHAR(50) NOT NULL , `ASS1` INT(2) NOT NULL , `ASS2` INT(2) NOT NULL , `ASS3` INT(2) NOT NULL , `ASS4` INT(2) NOT NULL ,`minipro` INT(2) NOT NULL,`attendance` INT(1) NOT NULL ,`ORAL` INT(1) NOT NULL ,PRIMARY KEY (`student`))";
         $result=mysqli_query($conn,$sql);
        

        $sql1 = "INSERT INTO `$mysem`( `crs_code`, `SUBJECT`, `category`) VALUES ('$course_code','$course_name','$radio')";
         $result1 = mysqli_query($conn,$sql1);
         echo "ADDED SUCSSESFULLY !!";
      }
      elseif($course_code[2] == 'M'){
         $sql="CREATE TABLE `$year-$course_code` ( `student` VARCHAR(50) NOT NULL ,`minipro` INT(2) NOT NULL,`attendance` INT(1) NOT NULL ,`ORAL` INT(1) NOT NULL ,PRIMARY KEY (`student`))";
         $result=mysqli_query($conn,$sql);
        

        $sql1 = "INSERT INTO `$mysem`( `crs_code`, `SUBJECT`, `category`) VALUES ('$course_code','$course_name','$radio')";
         $result1 = mysqli_query($conn,$sql1);
         echo "ADDED SUCSSESFULLY !!";
      }
      elseif($course_code[2] == 'L' && $radio=='experiments'){
         $sql="CREATE TABLE `$year-$course_code` ( `student` VARCHAR(50) NOT NULL , `QUIZ1` INT(1) NOT NULL , `QUIZ2` INT(1) NOT NULL , `QUIZ3` INT(1) NOT NULL , `QUIZ4` INT(1) NOT NULL , `ASS1` INT(2) NOT NULL , `ASS2` INT(2) NOT NULL , `ASS3` INT(2) NOT NULL , `ASS4` INT(2) NOT NULL , `EX1` INT(2) NOT NULL , `EX2` INT(2) NOT NULL , `EX3` INT(2) NOT NULL , `EX4` INT(2) NOT NULL , `EX5` INT(2) NOT NULL , `EX6` INT(2) NOT NULL , `EX7` INT(2) NOT NULL , `EX8` INT(2) NOT NULL , `EX9` INT(2) NOT NULL , `EX10` INT(2) NOT NULL , `EX11` INT(2) NOT NULL , `EX12` INT(2) NOT NULL ,`attendance` INT(1) NOT NULL,`ORAL` INT(1) NOT NULL ,  PRIMARY KEY (`student`))";
         $result=mysqli_query($conn,$sql);
        

       $sql1 = "INSERT INTO `$mysem`( `crs_code`, `SUBJECT`, `category`) VALUES ('$course_code','$course_name','$radio')";
         $result1 = mysqli_query($conn,$sql1);
         echo "ADDED SUCSSESFULLY !!";
      }
}
include'footer.php';
?>

</html>
