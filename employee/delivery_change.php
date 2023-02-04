<?php
	include("/xampp/htdocs/project/condb.php");  
?>    

<?PHP 
  

   /* $id_receipt_sell = $_GET['id_receipt_sell'];
   $status = $_POST['status'];
   

   $sql = "SELECT * FROM receipt_sell WHERE id_receipt_sell = '$id_receipt_sell'";
   $result = $objCon->query($sql);
    while($row = $result->fetch_assoc())

   
   $sql = "UPDATE receipt_sell SET status = '$status' WHERE id_receipt_sell = '$id_receipt_sell'";
  $result = $objCon->query($sql); */


   if($_GET["Action"] == "Change"){

   $id_receipt_delivery = $_GET['id_receipt_delivery'];

   $sql = "SELECT * FROM receipt_delivery WHERE id_receipt_delivery = '$id_receipt_delivery'";
   $result = $objCon->query($sql);
    while($row = $result->fetch_assoc())

   if($row['status'] == "1"){
      $status = 0;
   }
   else{
      $status = 1;
   }
   $sql = "UPDATE receipt_delivery SET status = '$status' WHERE id_receipt_delivery = '$id_receipt_delivery'";
  $result = $objCon->query($sql);
  $sql1 = "UPDATE delivery SET status = '$status' WHERE id_receipt_delivery = '$id_receipt_delivery'";
  $result1 = $objCon->query($sql1);  
   }

    echo "<script>window.location.href='delivery.php'</script>"; 
?>