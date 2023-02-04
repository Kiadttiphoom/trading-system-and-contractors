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
	include("/xampp/htdocs/project/condb/condb.php");
    ?>
    
    <?php
	$id_product = $_POST['id_product'];
	$name_product = $_POST['name_product'];
	$id_type_product = $_POST['id_type_product'];
    $price_buy = $_POST['price_buy'];
    $price_sell = $_POST['price_sell'];
	
	
	$sql = "update product set name_product='$name_product' , id_type_product='$id_type_product' , price_buy='$price_buy' , price_sell='$price_sell' where id_product='$id_product'";
	$result = $objCon->query($sql);
	
	?>
		<h3>แก้ไขข้อมูลสินค้าเรียบร้อย</h3>
	
		<a href="product.php"><button type="submit" class="btn btn-info">กลับสู่หน้า product</button></a>
		
	</body>
</html>