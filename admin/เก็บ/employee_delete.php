<?php 

    include_once('employee_functions.php');

    if (isset($_GET['del'])) {
        $userid = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($userid);

        if ($sql) {
            echo "<script>alert('ลบข้อมูลพนักงานเรียบร้อย');</script>";
            echo "<script>window.location.href='employee.php'</script>";
        }
    }

?>