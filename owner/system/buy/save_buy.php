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
    echo $date_receipt_buy;
    echo "<br>";
   echo $time_receipt_buy;
   echo "<br>";
   echo $id_receipt_buy;
   echo "<br>";
   echo $id_company;
   echo "<br>";
   echo $id_employee;


      /* $sql1 = "INSERT INTO receipt_buy (id_receipt_buy, date_receipt_buy, time_receipt_buy, id_employee , id_company) 
      VALUES ('$id_receipt_buy','$date_receipt_buy','$time_receipt_buy','$id_employee','$id_company')";
      $query1 = mysqli_query($objCon,$sql1); */

?>

<?php
include("/xampp/htdocs/project/condb.php");
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
   exit(); 

 $res_items_track = array('id_product');

 echo ($res_items_track);
 
 /* foreach ($res_items_track as $key => $value) {
     $id_product = $value['id_product'];
     $buy_number =$value['buy_number'];
     $price_buy = $value['price_buy'];
     $total_buy = $value['total_buy'];
      */
    /*  $sql2 = "INSERT INTO buy (id_product,buy_number,price_buy,total_buy)
     VALUES ('$id_product','$buy_number','$price_buy','$total_buy')";
     $query2 = mysqli_query($objCon, $sql2) or die(mysqli_error($objCon)); */
     
    
 //}
 














 //for ($i = 1; $i<= (int)$_POST["hdnCount"]; $i++){
//		if(isset($_POST["id_receipt_buy$i"]))
//		{
//			if($_POST["id_receipt_buy$i"] != "" &&             
//$_POST["id_product$i"] != "" && 
//$_POST["buy_number$i"] != "" && 
//$_POST["price_buy$i"] != "" && 
//$_POST["total_buy$i"] != "") 
      
//{
//				$sql2 = "INSERT INTO buy (id_receipt_buy, id_product, buy_number, price_buy, total_buy) 
//					VALUES ('".$_POST["id_receipt_buy$i"]."','".$_POST["id_product$i"]."','".$_POST["buy_number$i"]."','".$_POST["price_buy$i"]."'
//					,'".$_POST["total_buy$i"]."')";
//				$query2 = mysqli_query($objCon,$sql2);
//
//        echo $sql1;
//                
//			}
//		}
//	}

//	echo "Record add successfully";
//	mysqli_close($objCon);
//?>
  <META HTTP-EQUIV="Refresh" CONTENT=";URL=/project/system/buy/buy.php"></META>
<?php

    //$id_company = $_POST['id_company'];
   //  echo $objResult["id_employee"];
   // echo "<br>";
  //  echo $id_company;

 //   echo "<pre>";
 //   print_r($_POST);
 //  echo "</pre>";
//   exit();
//	ini_set('display_errors', 1);
//	error_reporting(~0);


  //  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

//	$sql1 = "INSERT INTO buy (id_product, buy_number, price_buy, total_buy) VALUES ('$id_product','$buy_number','$price_buy','$total_buy')";
  //  $result1 = mysqli_query($objCon,$sql1) or die ("Error in query: $sql1".mysqli_query());

  //  $sql2 = "INSERT INTO receipt_buy (id_company, date_receipt_buy, time_receipt_buy) VALUES ('$id_company','$date_receipt_buy','$time_receipt_buy')";
	//$result2 = mysqli_query($objCon,$sql2) or die ("Error in query: $sql2".mysqli_query());

   // mysqli_close($objCon);
    
   // if($result1 && $result2){

   // }else{

   // }
 ?>   
    <?php
       // include("/xampp/htdocs/project/condb.php");

    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    //exit();
    //$date_receipt_buy = $_POST['date_receipt_buy'];
    //$time_receipt_buy = $_POST['time_receipt_buy'];
	//$id_company = $_POST['id_company'];
  //  $id_product = $_POST['id_product'];
  //  $buy_number = $_POST['buy_number'];
 //   $price_buy = $_POST['price_buy'];
 //   $total_buy = $_POST['total_buy'];

 //   $SQL1 = "INSERT INTO buy (id_product,buy_number,price_buy,total_buy) VALUES ('$id_product','$buy_number','$price_buy','$total_buy')";
//    $result1 = mysqli_query($objCon,$SQL1) or die ("Error in query: $SQL1".mysqli_query());
    
 //   $SQL2 = "INSERT INTO receipt_buy (id_company,date_receipt_buy,time_receipt_buy) VALUES ('$id_company','$date_receipt_buy','$time_receipt_buy')";
 //   $result2 = mysqli_query($objCon,$SQL2) or die ("Error in query: $SQL2".mysqli_query());
   
//    mysqli_close($objCon);
 //   if($result1 && $result2){

 //   }else{
//
 //   }
?>
    <?php

    //$SQL1 = "INSERT INTO buy (Billbuy_no,Cus_id,Billbuy_date,Billbuy_time) VALUES ('$txtbill','$txtname','$date','$time')";
    //$result1 = mysqli_query($objCon,$SQL1) or die ("Error in query: $SQL1".mysqli_query());
    
    //$SQL2 = "INSERT INTO billbuy_detail (Billbuy_no,Dry_latex,Price_id,Total) VALUES ('$txtbill','$drylatex','$price','$total')";
    //$result2 = mysqli_query($objCon,$SQL2) or die ("Error in query: $SQL2".mysqli_query());
   
    

	//if($query) {
	//	echo "Record add successfully";
	//}

	//mysqli_close($conn);
    
    

	//$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	//for ($i = 1; $i<= (int)$_POST["add_databuying"]; $i++){
	//	if(isset($_POST["txtid_product$i"]))
	//	{
	//		if($_POST["txtid_product$i"] != "" && 
	//				$_POST["txtbuy_number$i"] != "" &&
	////				$_POST["txtprice_buy$i"] != "" &&
	//				$_POST["txttotal_buy$i"] != "")
    
		//	{
	//			$sql = "INSERT INTO buy (id_product, buy_number, price_buy, total_buy) VALUES //('".$_POST["txtid_product$i"]."','".$_POST["txtbuy_number$i"]."','".$_POST["txtprice_buy$i"]."','".$_POST["txttotal_buy$i"]."')";
	//			$query = mysqli_query($conn,$sql);
	//		}
	//	}
//	}
    
//	echo "เพิ่มข้อมูลเรียบร้อย";
//	mysqli_close($conn);
    
?>

<?php
//$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
	//mysqli_close($objCon);

   	
    //$date_receipt_buy = $_POST['date_receipt_buy'];
 	//$time_receipt_buy = $_POST['time_receipt_buy'];
	//$id_company = $_POST['id_company'];
    //$id_product = $_POST['id_product'];
    //$buy_number = $_POST['buy_number'];
    //$price_buy = $_POST['price_buy'];
    //$total_buy = $_POST['total_buy'];


        //$objsql = "SELECT * FROM product WHERE id_product = 'A007'";
        //$qurey = mysqli_query($objCon, $objsql);
            //$objresult = $objCon->objquery($objsql);

        //$objresult1 = mysqli_fetch_array($qurey,MYSQLI_ASSOC);
        //echo $objresult1['stock_leftovers'];
             
        
        //$sql1 = "insert into buy (id_company,id_product,buy_number,price_buy,total_buy)values('$id_company','$id_product',$buy_number,$price_buy,$total_buy)";
	       //$result1 = $objCon->query($sql1);


       // $sql2 = "insert into receipt_buy (date_receipt_buy,time_receipt_buy)values('$date_receipt_buy','$time_receipt_buy')";
	    //   $result2 = $objCon->query($sql2);

        
      //  $sql3 = "update product set price_buy='$price_buy' where id_product='$id_product' ";
	//	  $result3 = $objCon->query($sql3);

     //   $sql4 = "update product set stock_leftovers=stock_leftovers + '$buy_number' where id_product='$id_product' ";
		//  $result4 = $objCon->query($sql4);

//echo "$sql1 <br>";
//echo "$sql2 <br>";
//echo "$sql3 <br>";
//echo "$sql4 <br>";


//$objQuery = mysqli_query($objCon,$sql);
//        $objQuery = mysqli_query($objCon,$sql1);
//$objQuery = mysqli_query($objCon,$sql2);
//$objQuery = mysqli_query($objCon,$sql3);
//$objQuery = mysqli_query($objCon,$sql4);


		

?>

<!-- <center><font color=#000000 size=5 class="ff-thai">เพิ่มข้อมูลสินค้าเรียบร้อย</font></center>
    <center>
    <div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
    </center> -->

