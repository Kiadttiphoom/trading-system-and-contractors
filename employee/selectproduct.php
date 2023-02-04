<?php 
 include("/xampp/htdocs/project/condb.php");
 
	$bid =$_REQUEST["bid"];
	
 	$sql2= "SELECT * FROM  tb_model WHERE bid = '$bid' "; 
	
 	$result2 = mysqli_query($con, $sql2); 
	
	while($row2 = mysqli_fetch_array($result2)) { 
	
	echo"<option value='$row2[0]'>" .$row2["mname"]." </option>";
	}
 ?>