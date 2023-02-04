<?php
	include("/xampp/htdocs/project/condb.php");
	
	$id_customer = $_POST['id_customer'];
  $prefix_name = $_POST['prefix_name'];
	$name_customer = $_POST['name_customer'];
	$tel_customer = $_POST['tel_customer'];
  $province_id = $_POST['province_id'];
  $district_id = $_POST['amphure_id'];
  $amphure_id = $_POST['district_id'];
  $address_customer = $_POST['address_customer'];


    $sql = "insert into customer values('$id_customer','$prefix_name','$name_customer','$tel_customer','$province_id','$district_id','$amphure_id','$address_customer')";
	$result = $objCon->query($sql);
		

	mysqli_close($objCon);
?>
<html>
<header>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</header>

<body>
<h3>เพิ่มข้อมูลลูกค้าเรียบร้อย</h3>
	
		



    <META HTTP-EQUIV="Refresh" CONTENT=";URL=customer.php"></META>
    
</body>  
</html>