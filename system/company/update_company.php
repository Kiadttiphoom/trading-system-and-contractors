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
	$id_company = $_POST['id_company'];
	$name_company = $_POST['name_company'];
	$tel_company = $_POST['tel_company'];
    $address_company = $_POST['address_company'];

	
	$sql = "UPDATE company SET name_company='$name_company', tel_company='$tel_company', address_company='$address_company' WHERE id_company='$id_company'";
	$query = mysqli_query($objCon,$sql);
	
	?>
		<h3>แก้ไขข้อมูลบริษัทเรียบร้อย</h3>
	
		<a href="company.php"><button type="submit" class="btn btn-info">กลับสู่หน้าบริษัท</button></a>
		
	</body>
</html>