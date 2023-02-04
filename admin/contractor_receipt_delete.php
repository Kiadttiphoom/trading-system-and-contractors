<?php

                          include("/xampp/htdocs/project/condb.php");
	                        $id_receipt_contractor = $_GET["id_receipt_contractor"];
                            $sql1 = "DELETE FROM receipt_contractor WHERE id_receipt_contractor = '".$id_receipt_contractor."' ";
                            $query1 = mysqli_query($objCon,$sql1);
                            $sql2 = "DELETE FROM contractor WHERE id_receipt_contractor = '".$id_receipt_contractor."' ";
                            $query2 = mysqli_query($objCon,$sql2);
                            
                            echo "<script>alert('ลบข้อมูลรับเหมาเรียบร้อย');</script>";
                            echo "<script>window.location.href='contractor.php'</script>";
                            mysqli_close($objCon);




?>