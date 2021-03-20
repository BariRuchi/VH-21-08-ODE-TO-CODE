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
 $sql = "INSERT INTO `$year-$SEM`(`student`, `minipro`, `attendance`, `ORAL`) VALUES ('".$data[0]."', '.$data[1].','.$data[2].','.$data[3].')";
 $result=mysqli_query($conn, $sql) ;



}}
header("Location:PAGEM.php?year=$year");
exit();
?>