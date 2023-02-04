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

   $id_receipt_sell = $_GET['id_receipt_sell'];

   $sql = "SELECT * FROM receipt_sell WHERE id_receipt_sell = '$id_receipt_sell'";
   $result = $objCon->query($sql);
    while($row = $result->fetch_assoc())

   if($row['status'] == "1"){
      $status = 0;
   }
   else{
      $status = 1;
   }
   $sql = "UPDATE receipt_sell SET status = '$status' WHERE id_receipt_sell = '$id_receipt_sell'";
  $result = $objCon->query($sql); 
   }

    echo "<script>window.location.href='sell.php'</script>"; 
?>