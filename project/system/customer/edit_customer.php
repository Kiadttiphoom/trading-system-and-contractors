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
 
		<div class="container-fluid bg-info">
			<h1 class="text-white">แก้ไขข้อมูลบริษัท</h1>
		</div>
		<?php




			$id_customer = $_GET['id_customer'];
			$prefix_name = $_GET['prefix_name'];
			$name_customer = $_GET['name_customer'];
			$tel_customer = $_GET['tel_customer'];
			$province = $_GET['province'];
			$district = $_GET['district'];
			$amphure = $_GET['amphure'];
			$address_customer = $_GET['address_customer'];
		?>
		<div class="container-fluid">
		<form action="update_customer.php" method="post">
		
			<label for="usr">รหัสลูกค้า:</label>
			<input type="text" class="form-control" id="id_customer" name="id_customer" value="<?php echo $id_customer; ?>" readonly>
			
			<label for="usr">คำนำหน้า:</label>
			<input type="text" class="form-control" id="prefix_name" name="prefix_name" value="<?php echo $prefix_name; ?>">

			<label for="usr">ชื่อลูกค้า:</label>
			<input type="text" class="form-control" id="name_customer" name="name_customer" value="<?php echo $name_customer; ?>">
			
			<label for="usr">เบอรโทรศัพท์:</label>
			<input type="text" class="form-control" id="tel_customer" name="tel_customer" value="<?php echo $tel_customer; ?>">

			<label for="usr">จังหวัด:</label>
			<input type="text" class="form-control" id="province" name="province" value="<?php echo $province; ?>">

			<label for="usr">อำเภอ:</label>
			<input type="text" class="form-control" id="amphure" name="amphure" value="<?php echo $amphure; ?>">

			<label for="usr">ตำบล:</label>
			<input type="text" class="form-control" id="district" name="district" value="<?php echo $district; ?>">
            
            <label for="usr">ที่อยู่:</label>
			<input type="text" class="form-control" id="address_customer" name="address_customer" value="<?php echo $address_customer; ?>">
            
			<a href="update_customer.php"><button type="submit" class="btn btn-warning">OK</button></a>
			<hr>
		</form>	
			<a href="customer.php"><button type="submit" class="btn btn-info">กลับสู่หน้าบริษัท</button></a>
		</div>
	</body>
</html>