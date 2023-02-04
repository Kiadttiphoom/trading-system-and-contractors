<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "project";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
	if(trim($_POST["txtusername"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
	
	if(trim($_POST["txtpassword"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
		
	if($_POST["txtpassword"] != $_POST["txtConPassword"])
	{
		header('location: pro_notmatch.php');
		exit();
	}

    if(trim($_POST["txtname_employee"]) == "")
	{
		echo "Please input Name!";
		exit();	
	}
	
	if(trim($_POST["txttel_employee"]) == "")
	{
		echo "Please input Tel!";
		exit();	
	}

    if(trim($_POST["txtaddress_employee"]) == "")
	{
		echo "Please input address!";
		exit();	
	}


	
	$strSQL = "SELECT * FROM employee WHERE username = '".trim($_POST['txtusername'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if($objResult)
	{
			header('location: pro_haveuser.php');
	}
	else
	{	
		
		$strSQL = "INSERT INTO employee (username,password,name_employee,tel_employee,address_employee,status_employee) VALUES ('".$_POST["txtusername"]."', 
		'".$_POST["txtpassword"]."','".$_POST["txtname_employee"]."','".$_POST["txttel_employee"]."','".$_POST["txtaddress_employee"]."','".$_POST["ddlstatus_employee"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		
		header('location: pro_register.php');
		
	}

	mysqli_close($objCon);
?>