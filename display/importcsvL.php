<?php
include '../import.php';
$year=$_GET['year']; 
$SEM=$_GET['crscode']; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_POST['done'])) 
{
 //Import uploaded file to Database
 $handle = fopen($_FILES['filename']['tmp_name'], "r");
 while(($data = fgetcsv($handle)) !== FALSE){
 $sql = "INSERT INTO `$year-$SEM`(`student`, `QUIZ1`, `QUIZ2`, `QUIZ3`, `QUIZ4`, `ASS1`, `ASS2`, `ASS3`, `ASS4`, `EX1`, `EX2`, `EX3`, `EX4`, `EX5`, `EX6`, `EX7`, `EX8`, `EX9`, `EX10`, `EX11`, `EX12`, `attendance`, `ORAL`) VALUES  
 ('".$data[0]."', '.$data[1].','.$data[2].','.$data[3].','.$data[4].', '.$data[5].','.$data[6].','.$data[7].','.$data[8].','.$data[9].','.$data[10].','.$data[11].','.$data[12].','.$data[13].', '.$data[14].','.$data[15].','.$data[16].','.$data[17].', '.$data[18].','.$data[19].','.$data[20].','.$data[21].','.$data[22].')";
 $result=mysqli_query($conn, $sql) ;



}}
header("Location:PAGEL.php?year=$year");
exit();
?>