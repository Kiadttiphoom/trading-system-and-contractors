<?php
	include("/xampp/htdocs/project/condb/condb.php");
	
		
    $date_receipt_sell = $_POST['date_receipt_sell'];
	$time_receipt_sell = $_POST['time_receipt_sell'];
	$id_custumer = $_POST['id_custumer'];
    $id_product = $_POST['id_product'];
    $sell_number = $_POST['sell_number'];
    $total_sell = $_POST['total_sell'];
   
    

    
        $sql = "insert into buy (id_custumer,id_product,sell_number,price_sell,total_sell)values('$id_custumer','$id_product',$sell_number,$price_sell,$total_sell)";
	       $result = $objCon->query($sql);


        $sql = "insert into receipt_buy (date_receipt_sell,time_receipt_sell)values('$date_receipt_sell','$time_receipt_sell')";
	       $result = $objCon->query($sql);

        
       
        $sql = "update product set stock_leftovers=stock_leftovers - '$sell_number' where id_product='$id_product' ";
		  $result = $objCon->query($sql);


            
        
        $objQuery = mysqli_query($objCon,$sql);


		

	mysqli_close($objCon);
?>