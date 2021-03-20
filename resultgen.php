<?php
	session_start();
  include 'import.php';
	$year = $_GET['year'];
	$sql = "SELECT * FROM `$year`";
	$result = mysqli_query($conn,$sql);
	
	
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Student Report Card</title>
  <link rel="stylesheet" href="./style.css">

  <style> 
  body{
	display: flex;
	justify-content:center;
	align-items:center;
	min-height:100vh;
	background:whitesmoke;
}
  .container{
  
	
  position: relative;
	display: flex;
	justify-content:center;}
  </style>
</head>
<body style="justify-content:center;">
<!-- partial:index.partial.html -->

<div class="container">
  <table>
  <?php

if(isset($_POST['PDF'])){
$NAME = $_POST["student"];
$SEM = $_POST["sem"]; ?>
    <thead>
    <tr>
       <td colspan="5" rowspan="2"> Name : <?php echo $NAME;?> <br> <br>
      Semester : <?php echo $SEM;?> </td>
      </tr>
      <tr> </tr>
      <tr>
        <td colspan="3">Course </td>

        <td colspan="2"> Overall </td>
      </tr>
      <tr>
        <td>Code </td>
        <td colspan="2"> Subject Name </td>
        <td> Marks </td>
        <td> Grade </td>
      </tr>
    </thead>
    <tbody>
      
      <tr>
      
  
    <?php 
    $grand = 0;
    $sql1 = "SELECT * FROM `$year-$SEM`" ;
    $result1 = mysqli_query($conn,$sql1);
    
    if($result1){
    while($rows=mysqli_fetch_assoc($result1))
    {
      $sub = $rows['crs_code'];
      $subj = $rows['SUBJECT'];
      $cat = $rows['category'];
      
      $sql2 = "SELECT * FROM `$year-$sub` where student = '$NAME'";
      $result2 = mysqli_query($conn,$sql2);
      
      if($result2){
      while($row=mysqli_fetch_assoc($result2)){

    ?>
              <td><?php echo $sub; ?></td>
              <td colspan="2"><?php echo $subj; ?></td>
              
             <?php 
             if($sub[2] == 'C') {
           
             $sum=($row['CO1']+$row['CO2']+$row['CO3']+$row['CO4'])/2 +$row['fmark']; 
            $grand = $grand + $sum;
            ?> 
             <td><?php echo $sum;?></td>
             <td> <?php if( $sum >=75) echo 'A';
              elseif($sum>=60 & $sum<75) echo 'B';
              elseif($sum>=50 & $sum<60) echo 'C';
              elseif($sum>=35 & $sum<50) echo 'D';
              elseif($sum<35) echo 'FAIL';?></td>
      
       
        
             <?php } 
             else if($sub[2] == 'L' && $cat=='experiments') {
             
              $sum1=($row['QUIZ1']+$row['QUIZ2']+$row['QUIZ3']+$row['QUIZ4'])/4 +($row['ASS1']+$row['ASS2']+$row['ASS3']+$row['ASS4'])/4 +($row['EX1']+$row['EX2']+$row['EX3']+$row['EX4']+$row['EX5']+$row['EX6']+$row['EX7']+$row['EX8']+$row['EX9']+$row['EX10']+$row['EX11']+$row['EX12'])/12 +$row['ORAL']+$row['attendance'] ; 
              $grand = $grand + $sum1;?>
              
             <td><?php echo $sum1;?></td>
             <td> <?php if( $sum1 >=45) echo 'A';
              elseif($sum1>=40 & $sum1<45) echo 'B';
              elseif($sum1>=35 & $sum1<40) echo 'C';
              elseif($sum1>=25 & $sum1<35) echo 'D';
              elseif($sum1<25) echo 'FAIL';?></td>
        
        
             <?php } 
             else if($sub[2] == 'L' && $cat=='miniproject') {
              
               $sum2 = ($row['ASS1']+$row['ASS2']+$row['ASS3']+$row['ASS4'])/8 +$row['minipro']+$row['attendance']+$row['ORAL'] ;
               $grand = $grand + $sum2;
               ?>
              
             <td><?php echo $sum2;?></td>
             <td> <?php if( $sum2 >=45) echo 'A';
              elseif($sum2>=40 & $sum2<45) echo 'B';
              elseif($sum2>=35 & $sum2<40) echo 'C';
              elseif($sum2>=25 & $sum2<35) echo 'D';
              elseif($sum2<25) echo 'FAIL';?></td>

             <?php } ?>
              </tr> 
      <?php    }} }}}?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3" class="footer">Total</td>
       
        <td colspan="2">
          <?php echo $grand; ?>
            / <?php  $sql3 ="SELECT `crs_code`,`category` FROM `$year-$SEM`";
            $res = mysqli_query($conn,$sql3); 
              
            $tot = 0;
            if($res){
            while($row=mysqli_fetch_assoc($res)){
              $subcode = $row['crs_code'];
              $cate = $row['category'];
              if($subcode[2]=='C'){
                $tot = $tot + 100;
              } else if($subcode[2]=='L' && $cate=='experiments'){
                $tot = $tot + 50 ;
              }else if($subcode[2]=='L' && $cate=='miniproject'){
                $tot = $tot + 50 ;
              }
            }}
            echo $tot;
            ?>
        </td>
      </tr>
      <tr>
        <td colspan="3" class="footer">Percentage</td>
        <td colspan="3"><?php echo ($grand *100 / $tot);?></td>
      </tr>
  </table>
</div>
</body>
<!-- partial -->
  
</body>
</html>
