<?php
	include("/xampp/htdocs/project/condb.php");
     
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
?>
<?php
                        

                       
    
                        $sql = " SELECT  COUNT(DISTINCT delivery.status)  As cou_delivery, delivery.status AS status_delivery
                        FROM receipt_delivery 
                        INNER JOIN delivery ON receipt_delivery.id_receipt_delivery=delivery.id_receipt_delivery
                        WHERE delivery.id_receipt_delivery = 'SA0005'";
                        $result = $objCon->query($sql);
                        while($row = $result->fetch_assoc()):
                            
                        $cou_delivery = $row['cou_delivery'];
                        $status_delivery = $row['status_delivery'];
                        
                        echo $cou_delivery;
                        echo $status_delivery;
            ?>   
                
                
                                    <br>
            <?php   
                        if($cou_delivery >1 || $status_delivery != 1  ){
                             echo '0';
                             
                        }else{
                            echo '1';
                        }
                    
            ?>
            
            <?php endwhile?>