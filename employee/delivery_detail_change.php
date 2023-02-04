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

   $no_delivery = $_GET['no_delivery'];

   $sql = "SELECT * FROM delivery WHERE no_delivery = '$no_delivery'";
   $result = $objCon->query($sql);
    while($row = $result->fetch_assoc())

   if($row['status'] == "1"){
      $status = 0;
   }
   else{
      $status = 1;
   }
   $sql = "UPDATE delivery SET status = '$status' WHERE no_delivery = '$no_delivery'";
  $result = $objCon->query($sql);
  $sql1 = "UPDATE delivery SET status = '$status' WHERE no_delivery = '$no_delivery'";
  $result1 = $objCon->query($sql1);  
   }
    echo "<script>window.location.href='javascript:window.history.back()'</script>"; 
?>