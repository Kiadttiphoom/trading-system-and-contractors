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
		$id_company = $_GET['id_company'];
        $name_company = $_GET['name_company'];
        $tel_company = $_GET['tel_company'];
        $address_company = $_GET['address_company'];
		?>
		<div class="container-fluid">
		<form action="update_company.php" method="post">
		
			<label for="usr">รหัสบริษัท:</label>
			<input type="text" class="form-control" id="id_company" name="id_company" value="<?php echo $id_company; ?>" readonly>
			
			<label for="usr">ชื่อบริษัท:</label>
			<input type="text" class="form-control" id="name_company" name="name_company" value="<?php echo $name_company; ?>">
			
			<label for="usr">เบอรโทรศัพท์:</label>
			<input type="text" class="form-control" id="tel_company" name="tel_company" value="<?php echo $tel_company; ?>">
            
            <label for="usr">ที่อยู่:</label>
			<input type="text" class="form-control" id="address_company" name="address_company" value="<?php echo $address_company; ?>">
            
			<a href="update_company.php"><button type="submit" class="btn btn-warning">OK</button></a>
			<hr>
		</form>	
			<a href="company.php"><button type="submit" class="btn btn-info">กลับสู่หน้าบริษัท</button></a>
		</div>
	</body>
</html>