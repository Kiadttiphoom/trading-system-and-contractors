<?php

                          include("/xampp/htdocs/project/condb.php");
	                        $no_sell = $_GET["no_sell"];
                            $sql = "DELETE FROM sell WHERE no_sell = '".$no_sell."' ";

                            $query = mysqli_query($objCon,$sql);

                            echo "<h1>ลบข้อมูลสำเร็จ<h1>";
                            mysqli_close($objCon);



?>