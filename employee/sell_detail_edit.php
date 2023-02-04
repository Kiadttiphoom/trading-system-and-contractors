<?php
	include("/xampp/htdocs/project/condb.php");
     
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
    
    
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sirisuwan Aluminum Glass</title>

    <!-- Favicon  -->
    <link rel="icon" href="/project/employee/img/headlogo.png">

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
        <span>ข้อมูลการรับเหมาสินค้า</span>
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

                            <div class="card shadow-lg mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h5 class="m-0 font-weight-bold "><font color="#000">ข้อมูลขายสินค้า</font></h5>
                                
                                </div>
                                <!-- Card Body -->
                                    <div class="container col-lg-12 py-2 " >

            
  

                <!-- Fixed header table-->
                <div class="table-responsive">
                    <table class="table table-fixed" >
                     <?php
	include("/xampp/htdocs/project/condb.php");
    
     
    ?>   


                        
<form action="" method="post">
<?php 

include_once('functions_edit_delete.php');

$updatedata = new DB_con();

if (isset($_POST['update_sell_detail'])) {

    $userid = $_GET['no_sell'];
    $id_product = $_POST['id_product'];
    $sell_number= $_POST['sell_number'];
    $price_sell= $_POST['price_sell'];
    $total_sell = $_POST['total_sell'];

    $sql_sell_detail = $updatedata->update_sell_detail($id_product, $sell_number, $price_sell , $total_sell ,$userid);
    if ($sql_sell_detail) {
        echo "<script>alert('แก้ไขข้อมูลซื้อเรียบร้อย!');</script>";
        echo "<script>window.location.href='sell.php'</script>"; 
    } else {
        echo "<script>alert('บางอย่างผิดพลาด กรุณาลองอีกครั้ง!');</script>";
        echo "<script>window.location.href='sell.php'</script>";
    }
}


?>       
    <?php 

        $userid = $_GET['no_sell'];
        $updateuser = new DB_con();
        $sql_sell_detail = $updateuser->fetchonerecord_sell_detail($userid);
        while($row = mysqli_fetch_array($sql_sell_detail)) {
    ?>
    <style>
    table, th, td {
                            border:0px solid black;
                            }
                            table.center {
  margin-left: auto; 
  margin-right: auto;
}
                            </style>
   <center> <table style="width:50%" class="center text-center"> 
   <?php
                        $no_sell = $_GET['no_sell'];
            ?>
   <?php
                    $sql = " SELECT sell.no_sell, product.name_product, sell.sell_number,sell.price_sell, sell.total_sell
                    FROM sell 
                    INNER JOIN product  on sell.id_product  = product .id_product Where no_sell='$no_sell'";
                    $result = $objCon->query($sql);    
            ?>  
    

   
            <tr>
                <div class="mb-3 ">
                        <td style="width:10%"><label for="id_receipt_sell" class="py-3"><font color="#000"><b>เลขที่ใบเสร็จขาย</b></font></label></td>
                        <td style="width:20%"><input class="form-control text-center" name="id_receipt_sell" value="<?php echo $row['id_receipt_sell']; ?>" type="text" id="id_receipt_buy"  readonly aria-describedby="text" required style="width:100%"/></td>
                        
                </div>
            </tr>
            <tr>
                
            
                    <td style="width:5%"><label for="id_product" class="py-3"><font color="#000"><b>ชื่อสินค้า</b></font></label></td>
                    <td style="width:10%"><input class="form-control text-center" id="id_product" name="id_product" value="<?php echo $row['id_product']; ?>" type="text" aria-describedby="text" readonly required style="width:100%"/>
                    </td>
            </tr>
            <tr>        
                    <div class="mb-3">
                    <td style="width:5%"><label for="sell_number" class="py-3"><font color="#000"><b>จำนวน</b></font></label></td>
                    <td style="width:5%"><input onfocus="sum()"  onblur="sum()" onchange="sum()" onkeyup="sum()" class="form-control text-center" id="sell_number" name="sell_number" value="<?php echo $row['sell_number']; ?>" type="text" aria-describedby="text" required style="width:100%"/></td></td>
                    </div>
            </tr>
            <tr>        
                    <div class="mb-3">
                    <td style="width:5%"><label for="price_sell" class="py-3"><font color="#000"><b>ราคา</b></font></label></td>
                    <td style="width:5%"><input onfocus="sum()"  onblur="sum()" onchange="sum()" onkeyup="sum()" class="form-control text-center" id="price_sell" name="price_sell" value="<?php echo $row['price_sell']; ?>" type="text" aria-describedby="text" required style="width:100%"/></td></td>
                    </div>
            </tr>
            <tr>        
                    <div class="mb-3">
                    <td style="width:5%"><label for="total_sell" class="py-3"><font color="#000"><b>ราคารวม</b></font></label></td>
                    <td style="width:5%"><input readonly onfocus="sum()"  onblur="sum()" onchange="sum()" onkeyup="sum()" class="form-control text-center" id="total_sell" name="total_sell" value="<?php echo $row['total_sell']; ?>" type="text" aria-describedby="text" required style="width:100%"/></td></td>
                    </div>
            </tr>

            <script language="javascript">
var obj= document.all;
function sum(){
	obj.total_sell.value=parseInt(obj.sell_number.value)*parseInt(obj.price_sell.value);
}
</script>
          
            <?php  }   ?>
        </table>  </center>  
        
		<br>
        <center><button type="submit" name="update_sell_detail" class="btn btn-success">แก้ไขข้อมูล</button>
        <a href=javascript:window.history.back()  name="back" class="btn btn-danger">ยกเลิก</a></center>
        <br>
                    
        
    </form>
                    
                    </table>
                
            </div>
            
        </div>
                                        
                                   
    </div>
                                </div>
                       
                            
                    

                        <!-- Pie Chart -->
        

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
</body>

</html>