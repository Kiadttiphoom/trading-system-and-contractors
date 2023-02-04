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
  $grand_total = $_POST["grand_total"];
    /* echo $date_receipt_buy;
    echo "<br>";
   echo $time_receipt_buy;
   echo "<br>";
   echo $id_receipt_buy;
   echo "<br>";
   echo $id_company;
   echo "<br>";
   echo $id_employee; */


      $sql1 = "INSERT INTO receipt_buy (id_receipt_buy, date_receipt_buy, time_receipt_buy, id_employee , id_company, grand_total) 
      VALUES ('$id_receipt_buy','$date_receipt_buy','$time_receipt_buy','$id_employee','$id_company','$grand_total')";
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

	echo '<script type ="text/JavaScript">';  
	echo 'alert("เพิ่มข้อมูลการส่งสำเร็จ")'; 
	echo '</script>';
	echo "<script>window.location.href='buy.php'</script>"; 
	mysqli_close($objCon);
?>


  <META HTTP-EQUIV="Refresh" CONTENT=";URL=/project/system/buy/buy.php"></META>

 

<!-- <center><font color=#000000 size=5 class="ff-thai">เพิ่มข้อมูลสินค้าเรียบร้อย</font></center>
    <center>
    <div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
    </center> -->

