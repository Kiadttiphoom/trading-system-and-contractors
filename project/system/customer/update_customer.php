<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
	</head>
	<body>
    <?php
	include("/xampp/htdocs/project/condb.php");
    ?>
    
    <?php


	$id_customer = $_POST['id_customer'];
			$prefix_name = $_POST['prefix_name'];
			$name_customer = $_POST['name_customer'];
			$tel_customer = $_POST['tel_customer'];
			$province = $_POST['province'];
			$district = $_POST['district'];
			$amphure = $_POST['amphure'];
			$address_customer = $_POST['address_customer'];

	
	$sql = "UPDATE customer SET prefix_name='$prefix_name', name_customer='$name_customer', tel_customer='$tel_customer', province='$province', district='$district', amphure='$amphure', address_customer='$address_customer' WHERE id_customer='$id_customer'";
	$query = mysqli_query($objCon,$sql);
	
	?>
		<h3>แก้ไขข้อมูลลูกค้าเรียบร้อย</h3>
	
		<a href="customer.php"><button type="submit" class="btn btn-info">กลับสู่หน้าข้อมูลลูกค้า</button></a>
		
	</body>
</html>