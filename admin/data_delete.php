<?php 

    include_once('functions_edit_delete.php');

    if (isset($_GET['del_company'])) {
        $userid = $_GET['del_company'];
        $deletedata = new DB_con();
        $sql_company = $deletedata->delete_company($userid);

        if ($sql_company) {
            echo "<script>alert('ลบข้อมูลบริษัทเรียบร้อย!');</script>";
            echo "<script>window.location.href='company.php'</script>";
        }
    }

    if (isset($_GET['del_customer'])) {
        $userid = $_GET['del_customer'];
        $deletedata = new DB_con();
        $sql_customer = $deletedata->delete_customer($userid);

        if ($sql_customer) {
            echo "<script>alert('ลบข้อมูลลูกค้าเรียบร้อย');</script>";
            echo "<script>window.location.href='customer.php'</script>";
        }
    }

    if (isset($_GET['del_employee'])) {
        $userid = $_GET['del_employee'];
        $deletedata = new DB_con();
        $sql_employee = $deletedata->delete_employee($userid);

        if ($sql_employee) {
            echo "<script>alert('ลบข้อมูลพนักงานเรียบร้อย');</script>";
            echo "<script>window.location.href='employee.php'</script>";
        }
    }

    if (isset($_GET['del_product'])) {
        $userid = $_GET['del_product'];
        $deletedata = new DB_con();
        $sql_product = $deletedata->delete_product($userid);

        if ($sql_product) {
            echo "<script>alert('ลบข้อมูลสินค้าเรียบร้อย');</script>";
            echo "<script>window.location.href='product.php'</script>";
        }
    }

    if (isset($_GET['del_type_product'])) {
        $userid = $_GET['del_type_product'];
        $deletedata = new DB_con();
        $sql_type_product = $deletedata->delete_type_product($userid);

        if ($sql_type_product) {
            echo "<script>alert('ลบข้อมูลประเภทสินค้าเรียบร้อย');</script>";
            echo "<script>window.location.href='type_product.php'</script>";
        }
    }

    if (isset($_GET['del_type_work'])) {
        $userid = $_GET['del_type_work'];
        $deletedata = new DB_con();
        $sql_type_work = $deletedata->delete_type_work($userid);

        if ($sql_type_work) {
            echo "<script>alert('ลบข้อมูลชนิดงานเรียบร้อย');</script>";
            echo "<script>window.location.href='type_work.php'</script>";
        }
    }

    if (isset($_GET['del_unit'])) {
        $userid = $_GET['del_unit'];
        $deletedata = new DB_con();
        $sql_unit = $deletedata->delete_unit($userid);

        if ($sql_unit) {
            echo "<script>alert('ลบข้อมูลหน่วยนับเรียบร้อย');</script>";
            echo "<script>window.location.href='unit.php'</script>";
        }
    }

    if (isset($_GET['del_unit'])) {
        $userid = $_GET['del_unit'];
        $deletedata = new DB_con();
        $sql_unit = $deletedata->delete_unit($userid);

        if ($sql_unit) {
            echo "<script>alert('ลบข้อมูลหน่วยนับเรียบร้อย');</script>";
            echo "<script>window.location.href='unit.php'</script>";
        }
    }

    if (isset($_GET['del_unit'])) {
        $userid = $_GET['del_unit'];
        $deletedata = new DB_con();
        $sql_unit = $deletedata->delete_unit($userid);

        if ($sql_unit) {
            echo "<script>alert('ลบข้อมูลหน่วยนับเรียบร้อย');</script>";
            echo "<script>window.location.href='unit.php'</script>";
        }
    }

    if (isset($_GET['del_buy_detail'])) {
        $userid = $_GET['del_buy_detail'];
        $deletedata = new DB_con();
        $sql_buy_detail = $deletedata->delete_buy_detail($userid);

        if ($sql_buy_detail) {
            echo "<script>alert('ลบข้อมูลซื้อเรียบร้อย');</script>";
            echo "<script>window.location.href='buy.php'</script>";
        }
    }

    if (isset($_GET['del_sell_detail'])) {
        $userid = $_GET['del_sell_detail'];
        $deletedata = new DB_con();
        $sql_sell_detail = $deletedata->delete_sell_detail($userid);

        if ($sql_sell_detail) {
            echo "<script>alert('ลบข้อมูลขายเรียบร้อย');</script>";
            echo "<script>window.location.href='sell.php'</script>";
        }
    }

    if (isset($_GET['del_delivery_detail'])) {
        $userid = $_GET['del_delivery_detail'];
        $deletedata = new DB_con();
        $sql_delivery_detail = $deletedata->delete_delivery_detail($userid);

        if ($sql_delivery_detail) {
            echo "<script>alert('ลบข้อมูลส่งเรียบร้อย');</script>";
            echo "<script>window.location.href='delivery.php'</script>";
        }
    }


    if (isset($_GET['del_id_receipt_contractor'])) {
        $userid = $_GET['del_id_receipt_contractor'];
        $deletedata = new DB_con();
        $sql_id_receipt_contractor = $deletedata->delete_id_receipt_contractor($userid);

        if ($sql_id_receipt_contractor) {
            echo "<script>alert('ลบข้อมูลรับเหมาเรียบร้อย');</script>";
            echo "<script>window.location.href='contractor.php'</script>";
        }
    }

    if (isset($_GET['del_contractor_detail'])) {
        $userid = $_GET['del_contractor_detail'];
        $deletedata = new DB_con();
        $sql_contractor_detail = $deletedata->delete_contractor_detail($userid);

        if ($sql_contractor_detail) {
            echo "<script>alert('ลบข้อมูลรับเหมาเรียบร้อย');</script>";
            echo "<script>window.location.href='contractor.php'</script>";
        }
    }
    /* if (isset($_GET['del_stoke'])) {
        $userid = $_GET['del_stoke'];
        $deletedata = new DB_con();
        $sql_stoke = $deletedata->delete_stoke($userid);

        if ($sql_stoke) {
            echo "<script>alert('ลบข้อมูลหน่วยนับเรียบร้อย');</script>";
            echo "<script>window.location.href='stoke.php'</script>";
        }
    } */

?>

<?php

/* include("/xampp/htdocs/project/condb.php");
  $sql_id_receipt_delivery = $_GET["id_receipt_delivery"];
  $sql1 = "DELETE FROM receipt_delivery WHERE id_receipt_delivery = '".$id_receipt_delivery."' ";
  $query1 = mysqli_query($objCon,$sql1);
  $sql2 = "DELETE FROM delivery WHERE id_receipt_delivery = '".$id_receipt_delivery."' ";
  $query2 = mysqli_query($objCon,$sql2);
  
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location.href='delivery.php'</script>";
  mysqli_close($objCon);



 */
?>

<?php

/* include("/xampp/htdocs/project/condb.php");
  $id_receipt_buy = $_GET["id_receipt_buy"];
  $sql3 = "DELETE FROM receipt_buy WHERE id_receipt_buy = '".$id_receipt_buy."' ";
  $query3 = mysqli_query($objCon,$sql3);
  $sql4 = "DELETE FROM buy WHERE id_receipt_buy = '".$id_receipt_buy."' ";
  $query4 = mysqli_query($objCon,$sql4);
  
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location.href='buy.php'</script>";
  mysqli_close($objCon);


 */

?>


