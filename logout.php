<?php
	session_start();
    include("/xampp/htdocs/project/condb/condb.php");


    $date=date("Y-m-d");
    date_default_timezone_set("Asia/Bangkok");        
    $time=date("H:i:s");

    $strSQL = "INSERT INTO member_logout (Username,date,time) VALUES ('".$_POST["txtUsername"]."','$date','$time')";
	$objQuery = mysqli_query($objCon,$strSQL);


	mysqli_close($objCon);
	session_destroy();
	header("location:xampp/htdocs/project/system/login-register/login.php");
?>