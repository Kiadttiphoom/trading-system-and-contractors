<html>
<head>
<title>เพิ่มข้อมูล</title>
</head>
<body>
<?php

$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "project";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

if(isset($_POST['save']))
{	 
	 $id_product = $_POST['id_product'];
	 $name_product = $_POST['name_product'];
	 $id_type_product = $_POST['id_type_product'];



	 $sql = "INSERT INTO product (id_product, name_product, id_type_product)
	 VALUES ('$id_product','$name_product','$id_type_product')";
	 if (mysqli_query($objCon, $sql)) {
		echo "<script>alert('เพิ่มข้อมูลสินค้าเรียบร้อย');</script>";
        echo "<script>window.location.href='product.php'</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($objCon);
	 }
	 mysqli_close($objCon);
}

?>
</body>
</html>