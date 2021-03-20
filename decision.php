<?php 
session_start();
include('import.php');
 $table = $_GET['crs_code']; 
 $year = $_GET['year'];
 $sem =  $_SESSION['mysem'];
 $sql2 = "SELECT * FROM `$year-$sem` where crs_code = '$table'";
	$result2 = mysqli_query($conn,$sql2);
	if($result2){
		while($row=mysqli_fetch_assoc($result2))
		{
			$cat = $row['category'];
		}
		}
	
?>

<script type="text/javascript">
function decision(){
	
	var table = <?php echo '"'.$table.'"' ?> ;
	var category = <?php echo '"'.$cat.'"' ?> ;
	
	
	
	var com = table.charAt(2);
	var dep = table.charAt(2);
	
	<?php 
	$_SESSION['mytable'] = $table;
	?>
	
	
	if('C' == com){
 window.location ="display/page2.php?year=<?php echo $year;?>";
 }
 else if('O' == com){
 window.location ="display/page2.php?year=<?php echo $year;?>";
 }
 else if('L' == com && 'experiments'==category){
	 window.location ="display/PAGEL.php?year=<?php echo $year;?>";
 }
 else if('L' == com && 'miniproject'==category){
	 window.location ="display/PAGEL2.php?year=<?php echo $year;?>";
 }
 
 else if('D' == com){
	 window.location ="display/page2.php?year=<?php echo $year;?>";
 }
 else if('M' == com){
	 window.location ="display/PAGEM.php?year=<?php echo $year;?>";
 }
 
}
 decision();
  </script>