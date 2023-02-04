<?php

                          include("/xampp/htdocs/project/condb.php");
	                        $id_receipt_sell = $_GET["id_receipt_sell"];
                            $sql1 = "DELETE FROM receipt_sell WHERE id_receipt_sell = '".$id_receipt_sell."' ";
                            $query1 = mysqli_query($objCon,$sql1);
                            $sql2 = "DELETE FROM sell WHERE id_receipt_sell = '".$id_receipt_sell."' ";
                            $query2 = mysqli_query($objCon,$sql2);


                            $id_receipt_delivery = $_GET["id_receipt_sell"];
                            $sql3 = "DELETE FROM receipt_delivery WHERE id_receipt_delivery = '".$id_receipt_delivery."' ";
                            $query3 = mysqli_query($objCon,$sql3);
                            $sql4 = "DELETE FROM delivery WHERE id_receipt_delivery = '".$id_receipt_delivery."' ";
                            $query4 = mysqli_query($objCon,$sql4);
                            
                            
                            echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
                             echo "<script>window.location.href='sell.php'</script>";
                            mysqli_close($objCon);




?>