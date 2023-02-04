<?php

                          include("/xampp/htdocs/project/condb.php");
	                        $id_receipt_buy = $_GET["id_receipt_buy"];
                            $sql1 = "DELETE FROM receipt_buy WHERE id_receipt_buy = '".$id_receipt_buy."' ";
                            $query1 = mysqli_query($objCon,$sql1);
                            $sql2 = "DELETE FROM buy WHERE id_receipt_buy = '".$id_receipt_buy."' ";
                            $query2 = mysqli_query($objCon,$sql2);
                            
                            echo "<script>alert('ลบข้อมูลซื้อเรียบร้อย');</script>";
                            echo "<script>window.location.href='buy.php'</script>";
                            mysqli_close($objCon);




?>