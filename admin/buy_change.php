<?php
	include("/xampp/htdocs/project/condb.php");  
?>    

<?PHP 
  

   /* $id_receipt_buy = $_GET['id_receipt_buy'];
   $status = $_POST['status'];
   

   $sql = "SELECT * FROM receipt_buy WHERE id_receipt_buy = '$id_receipt_buy'";
   $result = $objCon->query($sql);
    while($row = $result->fetch_assoc())

   
   $sql = "UPDATE receipt_buy SET status = '$status' WHERE id_receipt_buy = '$id_receipt_buy'";
  $result = $objCon->query($sql); */


   if($_GET["Action"] == "Change"){

   $id_receipt_buy = $_GET['id_receipt_buy'];

   $sql = "SELECT * FROM receipt_buy WHERE id_receipt_buy = '$id_receipt_buy'";
   $result = $objCon->query($sql);
    while($row = $result->fetch_assoc())

   if($row['status'] == "0"){
      $status = 1;
   }
   elseif($row['status'] == "4"){
    $status = 0;
 }
   
   else{
      $status = 1;
   }
   $sql = "UPDATE receipt_buy SET status = '$status' WHERE id_receipt_buy = '$id_receipt_buy'";
  $result = $objCon->query($sql); 
   }

   echo "<script>window.location.href='buy.php'</script>";
?>