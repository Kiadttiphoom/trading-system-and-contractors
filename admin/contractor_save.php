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

    //$strSQL = "INSERT INTO receipt_contractor (id_employee) VALUES ('".$_POST["id_employee"]."')";
    //$objQuery = mysqli_query($objCon,$strSQL);
?>



<?php

  $date_receipt_contractor = $_POST["date_receipt_contractor"];
  $time_receipt_contractor = $_POST["time_receipt_contractor"];
  $id_receipt_contractor = $_POST["id_receipt_contractor"];
  $address_contractor = $_POST["address_contractor"];
  $detail_contractor = $_POST["detail_contractor"];
  $grand_contractor = $_POST["grand_contractor"];
  $id_customer = $_POST["id_customer"];
  $id_employee = $_POST["id_employee"];
  $status = "2";
    /* echo $date_receipt_contractor;
    echo "<br>";
   echo $time_receipt_contractor;
   echo "<br>";
   echo $id_receipt_contractor;
   echo "<br>";
   echo $id_customer;
   echo "<br>";
   echo $id_employee; */


      $sql1 = "INSERT INTO receipt_contractor (id_receipt_contractor, date_receipt_contractor, time_receipt_contractor, address_contractor, detail_contractor, grand_contractor, id_employee , id_customer , status) 
      VALUES ('$id_receipt_contractor','$date_receipt_contractor','$time_receipt_contractor','$address_contractor','$detail_contractor','$grand_contractor', '$id_employee','$id_customer', '$status')";
      $query1 = mysqli_query($objCon,$sql1);

?>




<?php

/* เพิ่มข้อมูล array */

ini_set('display_errors', 1);
	error_reporting(~0);


	for ($i = 1; $i<= (int)$_POST["hdnCount"]; $i++){
		if(isset($_POST["id_type_work$i"]))
		{
			if($_POST["id_receipt_contractor"] != "" &&
          			$_POST["id_type_work$i"] != "" && 
					$_POST["width_contractor$i"] != "" &&
					$_POST["hight_contractor$i"] != "" &&
					$_POST["contractor_number$i"] != "" && 
          $_POST["total_contractor$i"] != "")
			{
				$sql = "INSERT INTO contractor (id_receipt_contractor, id_type_work, width_contractor, hight_contractor, contractor_number , total_contractor, status) 
					VALUES ('".$_POST["id_receipt_contractor"]."','".$_POST["id_type_work$i"]."','".$_POST["width_contractor$i"]."','".$_POST["hight_contractor$i"]."'
					,'".$_POST["contractor_number$i"]."','".$_POST["total_contractor$i"]."', '$status')";
				$query = mysqli_query($objCon,$sql);
			}
		}
	}

	echo '<script type ="text/JavaScript">';  
	echo 'alert("เพิ่มข้อมูลรับเหมาสำเร็จ")'; 
	echo '</script>';
	echo "<script>window.location.href='contractor.php'</script>"; 
	mysqli_close($objCon);
?>

<!-- <META HTTP-EQUIV="Refresh" CONTENT="2;URL=/project/employee/contractor.php"></META>  -->

