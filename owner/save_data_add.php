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



			$sql_product = "INSERT INTO product (id_product, name_product, id_type_product, price_sell)
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

if(isset($_POST['save_type_work']))
{	 
	 $id_type_work = $_POST['id_type_work'];
	 $name_type_work = $_POST['name_type_work'];


	 $sql_type_work = "INSERT INTO type_work (id_type_work, name_type_work)
	 VALUES ('$id_type_work','$name_type_work')";
	 if (mysqli_query($objCon, $sql_type_work)) {
		echo "<script>alert('เพิ่มข้อมูลชนิดงานเรียบร้อย');</script>";
        echo "<script>window.location.href='type_work.php'</script>";
	 } else {
		echo "Error: " . $sql_type_work . "
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

<?php

    session_start();
    if($_SESSION['id_employee'] == "")
    {
        echo "Please Login!";
        exit();
    }

    include("/xampp/htdocs/project/condb.php");

    $strSQL = "SELECT * FROM employee WHERE id_employee = '".$_SESSION['id_employee']."' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

    //$strSQL = "INSERT INTO receipt_buy (id_employee) VALUES ('".$_POST["id_employee"]."')";
    //$objQuery = mysqli_query($objCon,$strSQL);
?>



<?php

  $date_receipt_buy = $_POST["date_receipt_buy"];
  $time_receipt_buy = $_POST["time_receipt_buy"];
  $id_receipt_buy = $_POST["id_receipt_buy"];
  $id_company = $_POST["id_company"];
  $id_employee = $_POST["id_employee"];
  $grand_buy = $_POST["grand_buy"];
    /* echo $date_receipt_buy;
    echo "<br>";
   echo $time_receipt_buy;
   echo "<br>";
   echo $id_receipt_buy;
   echo "<br>";
   echo $id_company;
   echo "<br>";
   echo $id_employee; */


      $sql1 = "INSERT INTO receipt_buy (id_receipt_buy, date_receipt_buy, time_receipt_buy, id_employee , id_company, grand_buy) 
      VALUES ('$id_receipt_buy','$date_receipt_buy','$time_receipt_buy','$id_employee','$id_company','$grand_buy')";
      $query1 = mysqli_query($objCon,$sql1);

?>




<?php

/* เพิ่มข้อมูล array */

ini_set('display_errors', 1);
	error_reporting(~0);


	for ($i = 1; $i<= (int)$_POST["hdnCount"]; $i++){
		if(isset($_POST["id_product$i"]))
		{
			if($_POST["id_receipt_buy"] != "" &&
          $_POST["id_product$i"] != "" && 
					$_POST["buy_number$i"] != "" &&
					$_POST["price_buy$i"] != "" &&
					$_POST["total_buy$i"] != "" )
			{
				
        /* $sql3 = "SELECT stock from product where id_product='".$_POST["id_product$i"]."' ";
          $query3 = mysqli_query($objCon,$sql3); */
        
        $sql = "INSERT INTO buy (id_receipt_buy, id_product, buy_number, price_buy, total_buy) 
					VALUES ('".$_POST["id_receipt_buy"]."','".$_POST["id_product$i"]."','".$_POST["buy_number$i"]."','".$_POST["price_buy$i"]."'
					,'".$_POST["total_buy$i"]."')";
				$query = mysqli_query($objCon,$sql);


        /* $sql2 = "UPDATE product SET stock='".$_POST["buy_number$i"]."' WHERE id_product='".$_POST["id_product$i"]."'";
				$query2 = mysqli_query($objCon,$sql2); */
			}
		}
	}

	echo "<script>alert('เพิ่มข้อมูลการซื้อเรียบร้อย');</script>";
  echo "<script>window.location.href='buy.php'</script>";
	mysqli_close($objCon);
?>
</body>
</html>