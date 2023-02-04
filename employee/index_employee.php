<?php
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
<html lang="en">

<head>
    
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/sb-admin-2.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sirisuwan Aluminum Glass</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/headlogo.png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    <!-- Swal.fire -->
    <script src="sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/project/employee/index_employee.php">
    <div class="sidebar-brand-icon rotate-n-15">
    <img src="img/logo.png" alt="Girl in a jacket" width="60" height="60">
    </div>
    <div class="sidebar-brand-text mx-3">Employee</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/project/employee/index_employee.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>หน้าหลัก</span></a>
</li>

<hr class="sidebar-divider">

<!--   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone"
        aria-expanded="true" aria-controls="collapseone">
        <i class="fas fa-fw fa-cog"></i>
        <span>ข้อมูลลูกค้า</span>
    </a>
    <div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/project/system/customer/customer.php">ข้อมูลลูกค้า</a>
            <a class="collapse-item" href="/project/system/customer/addcustomer.php">เพิ่มข้อมูลลูกค้า</a>
        </div>
    </div>
</li> -->

 <li class="nav-item">
    <a class="nav-link" href="/project/employee/customer.php">
        <i class="fa fa-address-card" aria-hidden="true"></i>
        <span>ข้อมูลลูกค้า</span></a>
</li>


<li class="nav-item">
    <a class="nav-link" href="/project/employee/company.php">
        <i class="fa fa-building" aria-hidden="true"></i>
        <span>ข้อมูลบริษัท</span></a>
</li>




<!--    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetwo"
        aria-expanded="true" aria-controls="collapsetree">
        <i class="fa fa-building" aria-hidden="true"></i>
        <span>ข้อมูลบริษัท</span>
    </a>
    <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/project/system/company/company.php">ข้อมูลบริษัท</a>
            <a class="collapse-item" href="/project/system/company/addcompany.php">เพิ่มข้อมูลบริษัท</a>
        </div>
    </div>
</li> -->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree"
        aria-expanded="true" aria-controls="collapsethree">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        <span>ข้อมูลสินค้า</span>
    </a>
    <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/project/employee/product.php">ข้อมูลสินค้า</a>
            <a class="collapse-item" href="/project/employee/type_product.php">ประเภทสินค้า</a>
            <a class="collapse-item" href="/project/employee/type_work.php">ชนิดงาน</a>
            <a class="collapse-item" href="/project/employee/unit.php">หน่วยนับ</a>
        </div>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link" href="/project/employee/stock.php">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
        <span>ข้อมูลคลังสินค้า</span></a>
</li>
 <hr class="sidebar-divider">
<!-- Nav Item - Utilities Collapse Menu -->


<!--  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetwo"
        aria-expanded="true" aria-controls="collapsetwo">
        <i class="fas fa-fw fa-wrench"></i>
        <span>ข้อมูลพนักงาน</span>
    </a>
    <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="employee.php">ข้อมูลพนักงาน</a>
            <a class="collapse-item" href="employee_update.php">เพิ่มข้อมูลพนักงาน</a>

        </div>
    </div>
</li> -->


<!-- Nav Item - Tables -->
 <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour"
        aria-expanded="true" aria-controls="collapsefour">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        <span>ข้อมูลซื้อสินค้า</span>
    </a>
    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/project/employee/buy.php">ข้อมูลซื้อ</a>
            <a class="collapse-item" href="/project/employee/buy_add.php">เพิ่มข้อมูลซื้อ</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefive"
        aria-expanded="true" aria-controls="collapsefive">
        <i class="fas fa-comment-dollar"></i>
        <span>ข้อมูลขายสินค้า</span>
    </a>
    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/project/employee/sell.php">ข้อมูลขาย</a>
            <a class="collapse-item" href="/project/employee/sell_add.php">เพิ่มข้อมูลขาย</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesix"
        aria-expanded="true" aria-controls="collapsesix">
        <i class="fas fa-truck-moving"></i>
        <span>ข้อมูลส่งสินค้า</span>
    </a>
    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/project/employee/delivery.php">ข้อมูลการส่ง</a>
            <a class="collapse-item" href="/project/employee/sell_add.php">เพิ่มข้อมูลการส่ง</a>
        </div>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseseven"
        aria-expanded="true" aria-controls="collapseseven">
        <i class="fa fa-table" aria-hidden="true"></i>
        <span>ข้อมูลการรับเหมา</span>
    </a>
    <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/project/employee/contractor.php">ข้อมูลการรับเหมา</a>
            <a class="collapse-item" href="/project/employee/contractor_add.php">เพิ่มข้อมูลการรับเหมา</a>
        </div>
    </div>
</li>




<hr class="sidebar-divider">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->


</ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <marquee direction="left"><font size=5 color=#000><i class="fas fa-bullhorn fa-sm fa-fw mr-2 text-gray-800"></i>  ร้ า น สิ ริ สุ ว ร ร ณ ก ร ะ จ ก อ ลู มิ เ นี ย ม ยิ น ดี ต้ อ น รั บ</font></marquee>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800 small"><font color=#000><?php echo $objResult["status_employee"];?>, <?php echo $objResult["name_employee"];?></font></span>
                                <img class="img-profile rounded-circle"
                                    src="img/user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php" >
                                    <i class="far fa-address-card mr-2 text-gray-400"></i>
                                    ข้อมูลส่วนตัว
                                </a>
                                <a class="dropdown-item" href="/project/login.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    ออกระบบ
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


<!-- Page Heading -->
<?php

        $ds = date("Y/m/d");
        $de = date("Y/m/d");
        $query = "SELECT 
        Count(receipt_buy.id_receipt_buy) AS Countbill_buy,
        Sum(buy.total_buy) AS total, DATE_FORMAT(date_receipt_buy, '%d-%M-%Y') AS datesave
        FROM receipt_buy
        INNER JOIN buy ON receipt_buy.id_receipt_buy=buy.id_receipt_buy

        AND date_receipt_buy BETWEEN '$ds 00:00:00.000000'
        AND '$de 23:59:59.000000'

        GROUP BY DATE_FORMAT(date_receipt_buy, '%Y-%m-%d')
        ORDER BY DATE_FORMAT(date_receipt_buy, '%Y-%m-%d') DESC
        ";
        $result = mysqli_query($objCon, $query);
        $resultchart = mysqli_query($objCon, $query);
        //for chart
        $datesave = array();
        $total = array();
        while($rs = mysqli_fetch_array($resultchart)){
        $datesave[] = "\"".$rs['datesave']."\"";
        $total[] = "\"".$rs['total']."\"";
        }
        $datesave = implode(",", $datesave);
        $total = implode(",", $total);
?>
<?php

                $ds = date("Y/m/d");
                $de = date("Y/m/d");
                $query2 = "SELECT 
                Count(receipt_sell.id_receipt_sell) AS Countbill_sell,
                Sum(sell.total_sell) AS total2, DATE_FORMAT(date_receipt_sell, '%d-%M-%Y') AS datesave2
                FROM receipt_sell
                INNER JOIN sell ON receipt_sell.id_receipt_sell=sell.id_receipt_sell

                AND date_receipt_sell BETWEEN '$ds 00:00:00.000000'
                AND '$de 23:59:59.000000'

                GROUP BY DATE_FORMAT(date_receipt_sell, '%Y-%m-%d')
                ORDER BY DATE_FORMAT(date_receipt_sell, '%Y-%m-%d') DESC
                ";
                $result2 = mysqli_query($objCon, $query2);
                $resultchart2 = mysqli_query($objCon, $query2);
                //for chart
                $datesave2 = array();
                $total2 = array();
                while($rs = mysqli_fetch_array($resultchart2)){
                $datesave2[] = "\"".$rs['datesave2']."\"";
                $total2[] = "\"".$rs['total2']."\"";
                }
                $datesave2 = implode(",", $datesave2);
                $total2 = implode(",", $total2);

?>
<?php

$ds = date("Y/m/d");
$de = date("Y/m/d");
$query3 = "SELECT 
Count(receipt_sell.id_receipt_sell) AS Countbill_sell,
Sum(sell.total_sell) AS total3, DATE_FORMAT(date_receipt_sell, '%d-%M-%Y') AS datesave3
FROM receipt_sell
INNER JOIN sell ON receipt_sell.id_receipt_sell=sell.id_receipt_sell

AND date_receipt_sell BETWEEN '$ds 00:00:00.000000'
AND '$de 23:59:59.000000'

GROUP BY DATE_FORMAT(date_receipt_sell, '%Y-%m-%d')
ORDER BY DATE_FORMAT(date_receipt_sell, '%Y-%m-%d') DESC
";
$result3 = mysqli_query($objCon, $query3);
$resultchart3 = mysqli_query($objCon, $query3);
//for chart
$datesave3 = array();
$total3 = array();
while($rs = mysqli_fetch_array($resultchart3)){
$datesave3[] = "\"".$rs['datesave3']."\"";
$total3[] = "\"".$rs['total3']."\"";
}
$datesave3 = implode(",", $datesave3);
$total3 = implode(",", $total3);

?>
<?php

$ds = date("Y/m/d");
$de = date("Y/m/d");
$query4 = "SELECT 
Count(receipt_sell.id_receipt_sell) AS Countbill_sell,
Sum(sell.total_sell) AS total4, DATE_FORMAT(date_receipt_sell, '%d-%M-%Y') AS datesave4
FROM receipt_sell
INNER JOIN sell ON receipt_sell.id_receipt_sell=sell.id_receipt_sell

AND date_receipt_sell BETWEEN '$ds 00:00:00.000000'
AND '$de 23:59:59.000000'

GROUP BY DATE_FORMAT(date_receipt_sell, '%Y-%m-%d')
ORDER BY DATE_FORMAT(date_receipt_sell, '%Y-%m-%d') DESC
";
$result4 = mysqli_query($objCon, $query4);
$resultchart4 = mysqli_query($objCon, $query4);
//for chart
$datesave4 = array();
$total4 = array();
while($rs = mysqli_fetch_array($resultchart4)){
$datesave4[] = "\"".$rs['datesave4']."\"";
$total4[] = "\"".$rs['total4']."\"";
}
$datesave4 = implode(",", $datesave4);
$total4 = implode(",", $total4);

?>
<!-- Content Row -->
<div class="row">
<?php $sql = "SELECT Count(receipt_buy.id_receipt_buy) AS Countbill_buy,Sum(buy.buy_number) AS buy_number,Sum(buy.total_buy) As total_buy
            FROM receipt_buy
            INNER JOIN buy ON receipt_buy.id_receipt_buy=buy.id_receipt_buy
            WHERE receipt_buy.date_receipt_buy = '$ds';";
                  $result = $objCon->query($sql);?>
            <?php while($row = $result->fetch_assoc()): ?>
                
                
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-5 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#buy_day">
        <style>
            
        </style>
        <div class="card border-left-primary shadow-lg h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        รายการซื้อสินค้า</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                        <?php echo @$row['Countbill_buy']; ?> รายการ
                    </div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-shopping-cart fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
             
    <!-- Earnings (Monthly) Card Example -->
    <!-- <div class="col-xl-4 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#buy_day">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        จำนวนรายการซื้อวันนี้</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php /* echo @$row['buy_number'];  */?> จำนวน

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="col-xl-5 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#buy_day">
        <div class="card border-left-primary shadow-lg h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        จำนวนเงินที่จ่ายวันนี้</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php echo @$row['total_buy']; ?> บาท

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile ?> 
    <br>
    <?php  $sql2 = "SELECT Count(receipt_sell.id_receipt_sell) AS Countbill_sell,Sum(sell.sell_number) AS sell_number,Sum(sell.total_sell) As total_sell
            FROM receipt_sell
            INNER JOIN sell ON receipt_sell.id_receipt_sell=sell.id_receipt_sell
            WHERE receipt_sell.date_receipt_sell = '$ds';";
                  $result2 = $objCon->query($sql2); ?>
            <?php while($row2 = $result2->fetch_assoc()): ?>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-5 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#sell_day">
        <div class="card border-left-info shadow-lg h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        รายการขายสินค้า</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                        <?php echo @$row2['Countbill_sell']; ?> รายการ
                    </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments-dollar fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <!-- <div class="col-xl-4 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#sell_day">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        จำนวนรายการขายวันนี้</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php /* echo @$row['sell_number'];  */?> จำนวน

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="col-xl-5 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#sell_day">
        <div class="card border-left-info shadow-lg h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        จำนวนเงินที่ได้รับวันนี้</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php echo @$row2['total_sell']; ?> บาท

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php endwhile ?> 
<!-- Content Row -->

<div class="row">
<?php $sql3 = "SELECT Count(receipt_contractor.id_receipt_contractor) AS Countbill_contractor,Sum(contractor.contractor_number) AS contractor_number,Sum(contractor.total_contractor) As total_contractor
            FROM receipt_contractor
            INNER JOIN contractor ON receipt_contractor.id_receipt_contractor=contractor.id_receipt_contractor
            WHERE receipt_contractor.date_receipt_contractor = '$ds';";
                  $result3 = $objCon->query($sql3);?>
            <?php while($row3 = $result3->fetch_assoc()): ?>
                
                
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-5 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#contractor_day">
        <div class="card border-left-danger shadow-lg h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        รายการรับเหมา</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                        <?php echo @$row3['Countbill_contractor']; ?> รายการ
                    </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tasks fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
             
    <!-- Earnings (Monthly) Card Example -->
    <!-- <div class="col-xl-4 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#buy_day">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        จำนวนรายการซื้อวันนี้</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php /* echo @$row['buy_number'];  */?> จำนวน

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="col-xl-5 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#contractor_day">
        <div class="card border-left-danger shadow-lg h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        จำนวนเงินที่ได้รับวันนี้</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php echo @$row3['total_contractor']; ?> บาท

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile ?> 
    <br>
    <?php  $sql4 = "SELECT Count(receipt_delivery.id_receipt_delivery) AS Countbill_delivery,Sum(delivery.delivery_number) AS delivery_number,Sum(delivery.total_delivery) As total_delivery
            FROM receipt_delivery
            INNER JOIN delivery ON receipt_delivery.id_receipt_delivery=delivery.id_receipt_delivery
            WHERE receipt_delivery.date_receipt_delivery = '$ds';";
                  $result4 = $objCon->query($sql4); ?>
            <?php while($row4 = $result4->fetch_assoc()): ?>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-5 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#delivery_day">
        <div class="card border-left-warning shadow-lg h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        รายการส่งสินค้า</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                        <?php echo @$row4['Countbill_delivery']; ?> รายการ
                    </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-shipping-fast fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <!-- <div class="col-xl-4 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#delivery_day">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        จำนวนรายการขายวันนี้</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php /* echo @$row['delivery_number'];  */?> จำนวน

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="col-xl-5 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#delivery_day">
        <div class="card border-left-warning shadow-lg h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        จำนวนเงินที่ได้รับวันนี้</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php echo @$row4['total_delivery']; ?> บาท

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php endwhile ?>  
<div class="row">

<!-- Area Chart -->
<div class="col-xl-6 col-lg-7">
    <div class="card shadow-lg mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h5 class="m-0 font-weight-bold text-gray-800">ยอดซื้อวันนี้</h5>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-area">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <canvas id="Area" width="800px" height="400px"></canvas>
                <script>
                var ctx = document.getElementById("Area").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['<?php echo $datesave;?>'],
                        datasets: [{
                            label: 'ภาพรวม',
                            data: [<?php echo $total;?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
                </script>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-lg-7">
    <div class="card shadow-lg mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h5 class="m-0 font-weight-bold text-gray-800">ยอดขายวันนี้</h5>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-area">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <canvas id="Area2" width="800px" height="400px"></canvas>
                <script>
                var ctx = document.getElementById("Area2").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?php echo $datesave2;?>

                        ],
                        datasets: [{
                            label: 'ยอดขายวันนี้ (บาท)',
                            data: [<?php echo $total2; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
                </script>
            </div>
        </div>
    </div>
</div>
</div>








</div>
</div>

<!-- Content Row -->


        <!-- Color System -->
        

   
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">คุณแน่ใจหรือไม่?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-footer">
<button class="btn btn-danger" type="button" data-dismiss="modal">ยกเลิก</button>
<a class="btn btn-primary" href="/project/login.php">ออกระบบ</a>
</div>
</div>
</div>
</div>
<script src="data/model.php"></script>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

                    <!-- Content Row -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">คุณแน่ใจหรือไม่?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">ยกเลิก</button>
                    <a class="btn btn-primary" href="/project/login.php">ออกระบบ</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="buy_day" tabindex="-1" aria-labelledby="buy_day" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="buy_day">รายการซื้อสินค้าวันนี้</h4>
                </div>
                <style>
table, th, td {
  border: 0.5px solid;
}
</style>
                <div class="modal-body">
                <table id="dataTable" class="table table-striped table-hover ">
                        <?php include("/xampp/htdocs/project/condb.php");?>
                        <thead>
                            <tr class="bg-secondary">
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>รหัสบิล</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>วัน/เวลา</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>ชื่อบริษัท</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>จำนวนซื้อ</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>ราคา</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>ราคารวม</b></font>
                                    </center>
                                </th>
                            </tr>
                        </thead>
                        
                        
                </div>
            
    </div>
    <thead>
    <?php 
                            $date = date("Y/m/d");
                            $sql = " SELECT receipt_buy.id_receipt_buy, company.id_company, company.name_company, buy.total_buy,buy.id_product,  product.name_product,
                            receipt_buy.date_receipt_buy, receipt_buy.time_receipt_buy, buy.buy_number, buy.price_buy   
                            FROM receipt_buy 
                            INNER JOIN company ON receipt_buy.id_company=company.id_company
                            INNER JOIN buy ON receipt_buy.id_receipt_buy=buy.id_receipt_buy
                             INNER JOIN product ON buy.id_product=product.id_product
                            WHERE receipt_buy.date_receipt_buy = '$date' 
                            ORDER BY receipt_buy.id_receipt_buy DESC;";
                                                        $result = $objCon->query($sql); ?>
                            <?php while($row = $result->fetch_assoc()):  ?>
                                <tr>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row['id_receipt_buy']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row['date_receipt_buy']."  ".$row['time_receipt_buy']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><font color=#000 size=2><b> <center><?php echo $row['name_company']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row['buy_number']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row['price_buy']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row['total_buy']; ?></center></b></font>
                                </td>
                            </tr>
                            </thead>
                            <?php endwhile ?>
                            
                            </table>
                            <button type="button" class="btn btn-danger pull-right" data-bs-dismiss="modal">Close</button>
                </div>
                
            </div>
        </div>
    </div>
    <div class="modal fade" id="sell_day" tabindex="-1" aria-labelledby="sell_day" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="sell_day">รายการขายสินค้าวันนี้</h4>
                </div>
                
                <div class="modal-body">
                <table id="dataTable" class="table table-striped table-hover ">
                        <?php include("/xampp/htdocs/project/condb.php");?>
                        <style>
table, th, td {
  border: 0.5px solid;
}
</style>
                        <thead>
                            <tr  class="bg-secondary">
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>รหัสบิล</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>วัน/เวลา</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>ชื่อลูกค้า</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>จำนวนขาย</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>ราคา</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>ราคารวม</b></font>
                                    </center>
                                </th>
                            </tr>
                        </thead>
                        
                        
                </div>
            
    </div>
    <thead>
    <?php 
                            $date2 = date("Y/m/d");
                            $sql = " SELECT receipt_sell.id_receipt_sell, customer.id_customer, customer.name_customer, sell.total_sell,sell.id_product,  product.name_product,
                            receipt_sell.date_receipt_sell, receipt_sell.time_receipt_sell, sell.sell_number, sell.price_sell   
                            FROM receipt_sell 
                            INNER JOIN customer ON receipt_sell.id_customer=customer.id_customer
                            INNER JOIN sell ON receipt_sell.id_receipt_sell=sell.id_receipt_sell
                             INNER JOIN product ON sell.id_product=product.id_product
                            WHERE receipt_sell.date_receipt_sell = '$date2' 
                            ORDER BY receipt_sell.id_receipt_sell DESC;";
                                                        $result2 = $objCon->query($sql); ?>
                            <?php while($row2 = $result2->fetch_assoc()):  ?>
                            <tr>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row2['id_receipt_sell']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row2['date_receipt_sell']."  ".$row2['time_receipt_sell']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row2['name_customer']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row2['sell_number']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row2['price_sell']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row2['total_sell']; ?></center></b></font>
                                </td>
                            </tr>
                            </thead>
                            <?php endwhile ?>
                            </table>
                            <button type="button" class="btn btn-danger pull-right" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="contractor_day" tabindex="-1" aria-labelledby="contractor_day" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="contractor_day">รายการรับเหมาวันนี้</h4>
                </div>
                
                <div class="modal-body">
                <table id="dataTable" class="table table-striped table-hover ">
                        <?php include("/xampp/htdocs/project/condb.php");?>
                        <style>
table, th, td {
  border: 0.5px solid;
}
</style>
                        <?php include("/xampp/htdocs/project/condb.php");?>
                        <thead>
                            <tr  class="bg-secondary ">
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>รหัสบิล</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>วัน/เวลา</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>ชื่อผู้รับเหมา</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>จำนวนซื้อ</b></font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2><b>ราคารวม</b></font>
                                    </center>
                                </th>
                            </tr>
                        </thead>
                        
                        
                </div>
            
    </div>
    <thead>
    <?php 
                            $date3 = date("Y/m/d");
                            $sql = " SELECT receipt_contractor.id_receipt_contractor, customer.id_customer, customer.name_customer, contractor.total_contractor,contractor.id_type_work,  type_work.name_type_work,
                            receipt_contractor.date_receipt_contractor, receipt_contractor.time_receipt_contractor, contractor.contractor_number 
                            FROM receipt_contractor 
                            INNER JOIN customer ON receipt_contractor.id_customer=customer.id_customer
                            INNER JOIN contractor ON receipt_contractor.id_receipt_contractor=contractor.id_receipt_contractor
                             INNER JOIN type_work ON contractor.id_type_work=type_work.id_type_work
                            WHERE receipt_contractor.date_receipt_contractor = '$date3' 
                            ORDER BY receipt_contractor.id_receipt_contractor DESC;";
                                                        $result3 = $objCon->query($sql); ?>
                            <?php while($row3 = $result3->fetch_assoc()):  ?>
                            <tr>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row3['id_receipt_contractor']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row3['date_receipt_contractor']."  ".$row3['time_receipt_contractor']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row3['name_customer']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row3['contractor_number']; ?></center></b></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row3['total_contractor']; ?></center></b></font>
                                </td>
                            </tr>
                            </thead>
                            <?php endwhile ?>
                            </table>
                            <button type="button" class="btn btn-danger pull-right" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delivery_day" tabindex="-1" aria-labelledby="delivery_day" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="delivery_day">รายการส่งสินค้าวันนี้</h4>
                </div>
                
                <div class="modal-body">
                <table id="dataTable" class="table table-striped table-hover ">
                        <?php include("/xampp/htdocs/project/condb.php");?>
                        <style>
table, th, td {
  border: 0.5px solid;
}
</style>
                        <?php include("/xampp/htdocs/project/condb.php");?>
                        <thead>
                            <tr  class="bg-secondary ">
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2>รหัสบิล</font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2>วัน/เวลา</font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2>ชื่อลูกค้า</font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2>จำนวนซื้อ</font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size=2>ราคารวม</font>
                                    </center>
                                </th>
                            </tr>
                        </thead>
                        
                        
                </div>
            
    </div>
    <thead>
    <?php 
                            $date4 = date("Y/m/d");
                            $sql = " SELECT receipt_delivery.id_receipt_delivery, customer.id_customer, customer.name_customer, delivery.total_delivery,delivery.id_product,  product.name_product,
                            receipt_delivery.date_receipt_delivery, receipt_delivery.time_receipt_delivery, delivery.delivery_number 
                            FROM receipt_delivery 
                            INNER JOIN customer ON receipt_delivery.id_customer=customer.id_customer
                            INNER JOIN delivery ON receipt_delivery.id_receipt_delivery=delivery.id_receipt_delivery
                             INNER JOIN product ON delivery.id_product=product.id_product
                            WHERE receipt_delivery.date_receipt_delivery = '$date4' 
                            ORDER BY receipt_delivery.id_receipt_delivery DESC;";
                                                        $result4 = $objCon->query($sql); ?>
                            <?php while($row4 = $result4->fetch_assoc()):  ?>
                            <tr>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row4['id_receipt_delivery']; ?></b></center></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row4['date_receipt_delivery']."  ".$row4['time_receipt_delivery']; ?></b></center></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row4['name_customer']; ?></b></center></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row4['delivery_number']; ?></b></center></font>
                                </td>
                                <td>
                                <font color=#000 size=2><b><center><?php echo $row4['total_delivery']; ?></b></center></font>
                                </td>
                            </tr>
                            </thead>
                            <?php endwhile ?>
                            </table>
                            <button type="button" class="btn btn-danger pull-right" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Delete Button -->
    </center>
   
    
    

    
        
     
 
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Page level custom scripts -->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>