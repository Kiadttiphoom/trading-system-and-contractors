<?php
	session_start();
	include("/xampp/htdocs/project/condb.php");

    $date=date("Y-m-d");
    date_default_timezone_set("Asia/Bangkok");        
    $time=date("H:i:s");

	$strSQL = "SELECT * FROM employee WHERE username = '".mysqli_real_escape_string($objCon,$_POST['txtusername'])."' 
	and password = '".mysqli_real_escape_string($objCon,MD5($_POST['txtpassword']))."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
		$_SESSION['err_login'] = "รหัสพนักงานหรือรหัสผ่านไม่ถูกต้อง";	
        header('location: login.php');
	}
	else
	{
			$_SESSION["id_employee"] = $objResult["id_employee"];
			$_SESSION["status_employee"] = $objResult["status_employee"];
        
            //$strSQL = "INSERT INTO member_login (Username,date,time) VALUES ('".$_POST["txtUsername"]."','$date','$time')";
		    //$objQuery = mysqli_query($objCon,$strSQL);

			session_write_close();
			
			if($objResult["status_employee"] == "Admin")
			{
				(include("/xampp/htdocs/project/admin/index_admin.php"));
			}
			elseif($objResult["status_employee"] == "Owner")
			{
				(include("/xampp/htdocs/project/owner/index_owner.php"));
			}
            else
            {
               (include("/xampp/htdocs/project/employee/index_employee.php"));
            }
	}
	mysqli_close($objCon);
?>


