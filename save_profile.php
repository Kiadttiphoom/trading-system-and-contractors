<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	include("/xampp/htdocs/project/condb/condb.php");
	
	$strSQL = "UPDATE member SET Name = '".trim($_POST['txtName'])."',age = '".trim($_POST['txtage'])."',gender = '".trim($_POST['ddlgender'])."',tel = '".trim($_POST['txttel'])."',email = '".trim($_POST['txtemail'])."' WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	
	header('location: pro_editprofile.php');	
	
	
	
	mysqli_close($objCon);
?>