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
 $sql = "INSERT INTO `$year-$SEM`(`student`, `CO1`, `CO2`, `CO3`, `CO4`, `fmark`) VALUES ('".$data[0]."', '.$data[1].','.$data[2].','.$data[3].','.$data[4].', '.$data[5].')";
 $result=mysqli_query($conn, $sql) ;



}}
header("Location:page2.php?year=$year");
exit();
?>