<?php
	session_start();
	if($_SESSION['id_employee'] == "")
	{
		echo "Please Login!";
		exit();
	}
	include("/xampp/htdocs/project/condb.php");
	$strSQL = "SELECT * FROM employee WHERE id_employee = '".$_SESSION['id_employee']."' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    $query = mysqli_query($objCon, $strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>

<?php
	$id_employee = $_GET["id_employee"];
	$password = "e10adc3949ba59abbe56e057f20f883e";
	
	
			$strSQL = "UPDATE employee SET password = '$password'  WHERE id_employee = '$id_employee' ";
			$objQuery = mysqli_query($objCon,$strSQL);	
			echo '<script type ="text/JavaScript">';  
			echo 'alert("รีเซ็ตรหัสผ่านเสร็จสิ้น")'; 
			echo '</script>';
		
	
	echo "<script>window.location.href='employee.php'</script>"; 
		
	

	
	/* header('location: pro_editpass.php'); */		
	
	
	
	mysqli_close($objCon);
?>
