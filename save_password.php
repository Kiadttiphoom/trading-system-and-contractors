<?php
	session_start();
	if($_SESSION['id_employee'] == "")
	{
		echo "Please Login!";
		exit();
	}

	include("/xampp/htdocs/project/condb/condb.php");
	
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		header('location: pro_editpassnm.php');
		exit();
	}
	$strSQL = "UPDATE member SET Password = '".trim($_POST['txtPassword'])."'  WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	
	header('location: pro_editpass.php');		
	
	
	
	mysqli_close($objCon);
?>