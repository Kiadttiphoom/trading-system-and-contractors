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

    //$strSQL = "INSERT INTO receipt_sell (id_employee) VALUES ('".$_POST["id_employee"]."')";
    //$objQuery = mysqli_query($objCon,$strSQL);
?>
<?php
      $date_receipt_sell = $_POST["date_receipt_sell"];
      $time_receipt_sell = $_POST["time_receipt_sell"];
      $id_receipt_sell = $_POST["id_receipt_sell"];
      $id_customer = $_POST["id_customer"];
      $id_employee = $_POST["id_employee"];
      $address_delivery = $_POST["address_delivery"];
	  $status = "1";
?>

<?php
		if ($_POST['sell']=="1")
		{
			$sql3 = "INSERT INTO receipt_delivery (id_receipt_delivery, date_receipt_delivery, address_delivery, time_receipt_delivery, id_employee , id_customer,  status) 
      VALUES ('$id_receipt_sell','$date_receipt_sell','$address_delivery','$time_receipt_sell','$id_employee','$id_customer','$status')";
      $query3 = mysqli_query($objCon,$sql3);
      
      $sql1 = "INSERT INTO receipt_sell (id_receipt_sell, date_receipt_sell, time_receipt_sell, id_employee, id_customer,  status) 
      VALUES ('$id_receipt_sell','$date_receipt_sell','$time_receipt_sell','$id_employee','$id_customer',  '$status')";
      $query1 = mysqli_query($objCon,$sql1);

      ini_set('display_errors', 1);
	error_reporting(~0);


	foreach($_SESSION["shopping_cart"] as $keys => $values){
		$id_product = $values["id_product"];
		$price_sell = $values["price_sell"];
		$sell_number = $values["sell_number"];
		$total_sell = $values["total_sell"];
	/* echo $id_product; */
	
	$sql = "INSERT INTO sell ( id_receipt_sell,id_product, sell_number,total_sell, price_sell,status) 
			VALUES ('".$_POST["id_receipt_sell"]."','$id_product','$sell_number','$total_sell','$price_sell', '$status')";
				$query = mysqli_query($objCon,$sql);

	$sql2 = "INSERT INTO delivery (id_receipt_delivery, id_product, delivery_number, total_delivery,price_delivery, status) 
			VALUES ('".$_POST["id_receipt_sell"]."','$id_product','$sell_number','$total_sell','$price_sell','$status')";
			$query2 = mysqli_query($objCon,$sql2);
	
	}



	echo '<script type ="text/JavaScript">';  
	echo 'alert("เพิ่มข้อมูลการขายสำเร็จ")'; 
	echo '</script>';
	echo "<script>window.location.href='sell.php'</script>"; 
	mysqli_close($objCon);
			//exit();
      
			
		}
		else
		{

			$sql1 = "INSERT INTO receipt_sell (id_receipt_sell, date_receipt_sell, time_receipt_sell, id_employee , id_customer,  status) 
      VALUES ('$id_receipt_sell','$date_receipt_sell','$time_receipt_sell','$id_employee','$id_customer','$status')";
      $query1 = mysqli_query($objCon,$sql1);

      ini_set('display_errors', 1);
	error_reporting(~0);



	
	/* print_r($_SESSION["shopping_cart"]); */
	foreach($_SESSION["shopping_cart"] as $keys => $values){
		$id_product = $values["id_product"];
		$price_sell = $values["price_sell"];
		$sell_number = $values["sell_number"];
		$total_sell = $values["total_sell"];
	/* echo $id_product; */
	
	$sql = "INSERT INTO sell ( id_receipt_sell,id_product, sell_number, total_sell,price_sell,status) 
					VALUES ('".$_POST["id_receipt_sell"]."','$id_product','$sell_number','$total_sell','$price_sell', '$status')";
				$query = mysqli_query($objCon,$sql);
	
	}
	
	
			
	
	


	



	echo '<script type ="text/JavaScript">';  
	echo 'alert("เพิ่มข้อมูลการขายสำเร็จ")'; 
	echo '</script>';
	echo "<script>window.location.href='sell.php'</script>"; 
	mysqli_close($objCon);
			//exit();
		}
		unset($_SESSION["shopping_cart"]);
?>




