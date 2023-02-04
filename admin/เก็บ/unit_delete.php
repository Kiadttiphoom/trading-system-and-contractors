<?php 

    include_once('unit_functions.php');

    if (isset($_GET['del'])) {
        $userid = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($userid);

        if ($sql) {
            echo "<script>alert('ลบข้อมูลหน่วยนับเรียบร้อย');</script>";
            echo "<script>window.location.href='unit.php'</script>";
        }
    }

?>