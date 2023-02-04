<?php
	include("/xampp/htdocs/project/condb.php");
	
	$id_company = $_POST['id_company'];
	$name_company = $_POST['name_company'];
	$tel_company = $_POST['tel_company'];
    $address_company = $_POST['address_company'];


    $sql = "insert into company values('$id_company','$name_company','$tel_company','$address_company')";
	$result = $objCon->query($sql);
		

	mysqli_close($objCon);
?>

<center><font color=#000000 size=5 class="ff-thai">เพิ่มข้อมูลบริษัทเรียบร้อย</font></center>
    <center>
    <div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
    </center>
    <META HTTP-EQUIV="Refresh" CONTENT="3;URL=company.php"></META>