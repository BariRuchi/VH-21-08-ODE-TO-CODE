<?php
include '../import.php';
$year=$_GET['year']; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ipproject";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['done'])) 
{
 //Import uploaded file to Database
 $handle = fopen($_FILES['filename']['tmp_name'], "r");
 while(($data = fgetcsv($handle)) !== FALSE){
 $sql = "INSERT INTO `$year`(`Roll_no`, `Name`) VALUES ('".$data[0]."', '.$data[1].')";
 $result=mysqli_query($conn, $sql) ;



}}
header("Location:student.php?year=$year");
exit();
?>