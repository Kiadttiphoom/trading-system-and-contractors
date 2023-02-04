<?php

                          include("/xampp/htdocs/project/condb.php");
	                        $id_receipt_delivery = $_GET["id_receipt_delivery"];
                            $sql1 = "DELETE FROM receipt_delivery WHERE id_receipt_delivery = '".$id_receipt_delivery."' ";
                            $query1 = mysqli_query($objCon,$sql1);
                            $sql2 = "DELETE FROM delivery WHERE id_receipt_delivery = '".$id_receipt_delivery."' ";
                            $query2 = mysqli_query($objCon,$sql2);
                            
                            echo "<script>alert('ลบข้อมูลการส่งเรียบร้อย');</script>";
                            echo "<script>window.location.href='delivery.php'</script>";
                            mysqli_close($objCon);




?>