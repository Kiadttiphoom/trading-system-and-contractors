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

if(isset($_POST['save_customer']))
{	 
	 $id_customer = $_POST['id_customer'];
	 $prefix_name = $_POST['prefix_name'];
	 $name_customer = $_POST['name_customer'];
	 $tel_customer = $_POST['tel_customer'];
   $provinces = $_POST['provinces'];
   $amphures = $_POST['amphures'];
   $districts = $_POST['districts'];
   $zip_code = $_POST['zip_code'];
   $address_customer = $_POST['address_customer'];
   $email_customer = $_POST['email_customer'];


	 $sql_customer = "INSERT INTO customer (id_customer, prefix_name, name_customer, tel_customer, id_provinces, id_amphures, id_districts, zip_code, address_customer, email_customer)
	 VALUES ('$id_customer','$prefix_name','$name_customer','$tel_customer','$provinces','$amphures','$districts','$zip_code','$address_customer','$email_customer')";
	 if (mysqli_query($objCon, $sql_customer)) {
		echo "<script>alert('เพิ่มข้อมูลลูกค้า');</script>";
        echo "<script>window.location.href='customer.php'</script>";
	 } else {
		echo "Error: " . $sql_customer . "
" . mysqli_error($objCon);
	 }
	 mysqli_close($objCon);
}

if(isset($_POST['save_company']))
{	 
	 $id_company = $_POST['id_company'];
	 $name_company = $_POST['name_company'];
	 $tel_company = $_POST['tel_company'];
    $provinces = $_POST['provinces'];
    $amphures = $_POST['amphures'];
    $districts = $_POST['districts'];
    $zip_code = $_POST['zip_code'];
    $address_company = $_POST['address_company'];
	$email_company = $_POST['email_company'];

	 $sql_company = "INSERT INTO company (id_company, name_company, tel_company, id_provinces, id_amphures, id_districts, zip_code, address_company, email_company)
	 VALUES ('$id_company','$name_company','$tel_company','$provinces','$amphures','$districts','$zip_code','$address_company','$email_company')";
	 if (mysqli_query($objCon, $sql_company)) {
		echo "<script>alert('เพิ่มข้อมูลบริษัทเรียบร้อย');</script>";
        echo "<script>window.location.href='company.php'</script>";
	 } else {
		echo "Error: " . $sql_company . "
" . mysqli_error($objCon);
	 }
	 mysqli_close($objCon);
}

		if(isset($_POST['save_product']))
		{	 
			$id_product = $_POST['id_product'];
			$name_product = $_POST['name_product'];
			$id_type_product = $_POST['id_type_product'];
			$price_sell = $_POST['price_sell'];



			$sql_product = "INSERT INTO product (id_product, name_product, id_type_product,price_sell)
			VALUES ('$id_product','$name_product','$id_type_product','$price_sell')";
			if (mysqli_query($objCon, $sql_product)) {
				echo "<script>alert('เพิ่มข้อมูลสินค้าเรียบร้อย');</script>";
				echo "<script>window.location.href='product.php'</script>";
			} else {
				echo "Error: " . $sql_product . "
		" . mysqli_error($objCon);
			}
			mysqli_close($objCon);
}

if(isset($_POST['save_type_product']))
{	 
	 $id_type_product = $_POST['id_type_product'];
	 $name_type_product = $_POST['name_type_product'];


	 $sql_type_product = "INSERT INTO type_product (id_type_product, name_type_product)
	 VALUES ('$id_type_product','$name_type_product')";
	 if (mysqli_query($objCon, $sql_type_product)) {
		echo "<script>alert('เพิ่มข้อมูลประเภทสินค้าเรียบร้อย');</script>";
        echo "<script>window.location.href='type_product.php'</script>";
	 } else {
		echo "Error: " . $sql_type_product . "
" . mysqli_error($objCon);
	 }
	 mysqli_close($objCon);
}

if(isset($_POST['save_unit']))
{	 
	 $id_unit = $_POST['id_unit'];
	 $name_unit = $_POST['name_unit'];


	 $sql_unit = "INSERT INTO unit (id_unit, name_unit)
	 VALUES ('$id_unit','$name_unit')";
	 if (mysqli_query($objCon, $sql_unit)) {
		echo "<script>alert('เพิ่มข้อมูลหน่วยเรียบร้อย');</script>";
        echo "<script>window.location.href='unit.php'</script>";
	 } else {
		echo "Error: " . $sql_unit . "
" . mysqli_error($objCon);
	 }
	 mysqli_close($objCon);
}


if(trim($_POST["username"]) == "")
	{
		echo "<script>alert('โปรดกรอก Username');</script>";
		exit();	
	}
	
	if(trim($_POST["password"]) == "")
	{
		echo "<script>alert('โปรดกรอก Password');</script>";
		exit();	
	}	
		
	if($_POST["password"] != $_POST["conpassword"])
	{
		echo "<script>alert('เพิ่มข้อมูลพนักงานไม่สำเร็จหรือเนื่องจากรหัสผ่านไม่ตรงกัน');</script>";
		echo "<script>window.location.href='employee_add.php'</script>";
		exit();
	}

	if(trim($_POST["prefix_name"]) == "")
	{
		echo "<script>alert('โปรดกรอก คำนำหน้า');</script>";
		exit();	
	}

    if(trim($_POST["name_employee"]) == "")
	{
		echo "<script>alert('โปรดกรอก ชื่อ - นามสกุล');</script>";
		exit();	
	}
	
	if(trim($_POST["tel_employee"]) == "")
	{
		echo "<script>alert('โปรดกรอก เบอรืโทรศีพท์');</script>";
		exit();	
	}

	if(trim($_POST["provinces"]) == "")
	{
		echo "<script>alert('โปรดกรอก จังหวัด');</script>";
		exit();	
	}

	if(trim($_POST["amphures"]) == "")
	{
		echo "<script>alert('โปรดกรอก อำเภอ');</script>";
		exit();	
	}

	if(trim($_POST["districts"]) == "")
	{
		echo "<script>alert('โปรดกรอก ตำบล');</script>";
		exit();	
	}

	if(trim($_POST["zip_code"]) == "")
	{
		echo "<script>alert('โปรดกรอก รหัสไปรษณี');</script>";
		exit();	
	}

    if(trim($_POST["address_employee"]) == "")
	{
		echo "<script>alert('โปรดกรอกที่อยู่');</script>";
		exit();	
	}

	if(trim($_POST["email_employee"]) == "")
	{
		
		exit();	
	}


	
	$strSQL = "SELECT * FROM employee WHERE username = '".trim($_POST['username'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if($objResult)
	{
		echo "<script>alert('มีพนักงานนี้อยู่แล้ว');</script>";
		echo "<script>window.location.href='employee_add.php'</script>";
	}
	else
	{	
		
		$strSQL = "INSERT INTO employee (username,password,prefix_name,name_employee,tel_employee,address_employee,id_districts,id_amphures,id_provinces,zip_code,status_employee,email_employee) 
		VALUES ('".$_POST["username"]."','".MD5($_POST["password"])."','".$_POST["prefix_name"]."','".$_POST["name_employee"]."','".$_POST["tel_employee"]."','".$_POST["address_employee"]."','".$_POST["districts"]."','".$_POST["amphures"]."','".$_POST["provinces"]."','".$_POST["zip_code"]."','".$_POST["status_employee"]."','".$_POST["email_employee"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		
		echo "<script>alert('เพิ่มข้อมูลพนักงานเรียบร้อย');</script>";
        echo "<script>window.location.href='employee.php'</script>";
		
		mysqli_close($objCon);
	} 

/* echo "<pre>";
  print_r($_POST);
  echo "</pre>";
   exit();  */
/* 	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "project";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$sql = "INSERT INTO customer (id_customer, prefix_name, name_customer, tel_customer, districts, amphures, provinces, zip_code, address_customer) 
		VALUES ('".$_POST["id_customer"]."','
    ".$_POST["prefix_name"]."','
    ".$_POST["name_customer"]."','
    ".$_POST["tel_customer"]."','
    ".$_POST["districts"]."','
    ".$_POST["amphures"]."','
    ".$_POST["provinces"]."','
    ".$_POST["zip_code"]."','
    ".$_POST["address_customer"]."')";

	$query = mysqli_query($objCon,$sql);

	if($query) {
		echo "เพิ่มข้อมูลเรียบร้อย";
	}

	mysqli_close($objCon); */
?>
</body>
</html>