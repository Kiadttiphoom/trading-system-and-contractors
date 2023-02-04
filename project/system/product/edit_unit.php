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
			<h1 class="text-white">แก้ไขข้อมูลหน่วยนับ</h1>
		</div>
		<?php
		$id_unit = $_GET['id_unit'];
        $name_unit = $_GET['name_unit'];
		?>
		<div class="container-fluid">
		<form action="update_unit.php" method="post">
		
			<label for="usr">รหัสหน่วยนับ:</label>
			<input type="text" class="form-control" id="id_unit" name="id_unit" value="<?php echo $id_unit; ?>" readonly>
			
			<label for="usr">ชื่อหรหัสหน่วยนับ:</label>
			<input type="text" class="form-control" id="name_unit" name="name_unit" value="<?php echo $name_unit; ?>">
			
            
			<a href="update_unit.php"><button type="submit" class="btn btn-warning">OK</button></a>
			<hr>
		</form>	
			<a href="unit.php"><button type="submit" class="btn btn-info">กลับสู่หน้าหน่วยนับ</button></a>
		</div>
	</body>
</html>