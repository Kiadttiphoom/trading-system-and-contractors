<?php

                          include("/xampp/htdocs/project/condb.php");
	                        $no_buy = $_GET["no_buy"];
                            $sql = "DELETE FROM buy WHERE no_buy = '".$no_buy."' ";

                            $query = mysqli_query($objCon,$sql);

                            echo "<h1>ลบข้อมูลสำเร็จ<h1>";
                            mysqli_close($objCon);



?>