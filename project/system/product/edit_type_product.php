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
			<h1 class="text-white">แก้ไขข้อมูลสินค้า</h1>
		</div>
		<?php
		$id_type_product = $_GET['id_type_product'];
        $name_type_product = $_GET['name_type_product'];
		?>
		<div class="container-fluid">
		<form action="update_type_product.php" method="post">
		
			<label for="usr">รหัสประเภทสินค้า:</label>
			<input type="text" class="form-control" id="id_type_product" name="id_type_product" value="<?php echo $id_type_product; ?>" readonly>
			
			<label for="usr">ชื่อประเภทสินค้า:</label>
			<input type="text" class="form-control" id="name_type_product" name="name_type_product" value="<?php echo $name_type_product; ?>">
			
            
			<a href="update_type_product.php"><button type="submit" class="btn btn-warning">OK</button></a>
			<hr>
		</form>	
			<a href="product.php"><button type="submit" class="btn btn-info">กลับสู่หน้าสินค้า</button></a>
		</div>
	</body>
</html>