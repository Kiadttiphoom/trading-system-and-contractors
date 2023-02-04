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
	
	$oldpass = $objResult["password"];;
		/* echo $oldpass; */


	
	if(MD5($_POST["oldpassword"]) == $oldpass){
		
		if(MD5($_POST["password"]) != MD5($_POST["conpassword"]))
		{
			echo '<script type ="text/JavaScript">';  
			echo 'alert("รหัสผ่านใหม่ไม่ตรงกัน")'; 
			echo '</script>';
		}
		elseif(MD5($_POST["password"]) == MD5($_POST["conpassword"]))
		{
			$strSQL = "UPDATE employee SET password = '".trim(MD5($_POST['password']))."'  WHERE id_employee = '".$_SESSION["id_employee"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL);	
			echo '<script type ="text/JavaScript">';  
			echo 'alert("เปลี่ยนรหัสผ่านสำเร็จ")'; 
			echo '</script>';
		}
	}
	else{
		echo '<script type ="text/JavaScript">';  
		echo 'alert("รหัสผ่านเก่าไม่ถูกต้อง")'; 
		echo '</script>';
	}
	
	echo "<script>window.location.href='profile.php'</script>"; 
		
	

	
	/* header('location: pro_editpass.php'); */		
	
	
	
	mysqli_close($objCon);
?>
