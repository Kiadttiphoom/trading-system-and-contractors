<?php
    session_start();
    if($_SESSION['id_employee'] == "")
    {
        echo "Please Login!";
        exit();
    }

    include("/xampp/htdocs/project/condb.php");
    $sql = "SELECT * FROM provinces";
    $strSQL = "SELECT * FROM employee WHERE id_employee = '".$_SESSION['id_employee']."' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    $query = mysqli_query($objCon, $sql);
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
    <link rel="icon" href="/project/img/headlogo.png">

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
                                    <h5 class="m-0 font-weight-bold "><font color="#000">ข้อมูลบริษัท</h5>
                                
                                </div>
                                <!-- Card Body -->
                                    <div class="container col-lg-12 py-2 " >
     
                                    
                <!-- Fixed header table-->
                <div class="table-responsive">
                    <table class="table table-fixed">
                        
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
         ?>        



<?php

$sql = " SELECT company.id_company, company.name_company, company.tel_company, company.address_company,
company.id_provinces, company.id_districts, company.id_amphures, company.zip_code, email_company,
provinces.name_provinces, districts.name_districts, amphures.name_amphures
FROM company
INNER JOIN provinces ON company.id_provinces = provinces.id_provinces
INNER JOIN districts ON company.id_districts = districts.id_districts
INNER JOIN amphures ON company.id_amphures = amphures.id_amphures;";
$result = $objCon->query($sql);
?>

<a href="company_add.php" class="btn btn-success pull-right" ><font color=#fff><i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูลบริษัท</font></a>  
<style>
td {
  border: 0.5px solid;
}
</style>

    <table id="dataTable" class="table table-striped table-hover" >
            
            <thead style="background-color:#f26b5f;">
                    <th><center><font size=2 color=#FFFFFF>รหัสบริษัท</font></center></th>
                    <th><center><font size=2 color=#FFFFFF>ชื่อบริษัท</font></center></th>
                    <th><center><font size=2 color=#FFFFFF>เบอรโทรศัพท์</font></center></th>
                    <th><center><font size=2 color=#FFFFFF>ที่อยู่</font></center></th>
                    <th><center><font size=2 color=#FFFFFF>อีเมล</font></center></th>
      
                    <th><center><font size=2 color=#FFFFFF><i class="fas fa-align-justify"></font></center></th>
                </thead>
            <tbody>
             
                   
            
                     <?php while($row = $result->fetch_assoc()): ?>
                      <tr>
                          <td><center><font size=2 color="#000"><b><?php echo $row['id_company']; ?></b></font></center></td>
                          <td><center><font size=2 color="#000"><b><?php echo $row['name_company']; ?></b></font></center></td>
                          <td><center><font size=2 color="#000"><b><?php echo $row['tel_company']; ?></b></font></center></td>
                          <td><center><font size=2 color="#000"><b><?php echo $row['address_company']; ?> 
                          <?php echo $row['name_provinces']; ?> 
                          <?php echo $row['name_amphures']; ?> 
                          <?php echo $row['name_districts']; ?></b></font></center></td>
                          <td><center><font size=2 color="#000"><b><?php echo $row['email_company']; ?></font></b></center></td>
                          <td><center><font size=2 color="#000"><b><a href="company_edit.php?id_company=<?php echo $row['id_company']; ?>"><button type="button" class="btn btn-warning btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#edit_data"><i
                                                                        class='fas fa-edit fa-lg'></i></button></a> </font>
                        <font size=2><a href="data_delete.php?del_company=<?php echo $row['id_company']; ?>"><button type="button" class="btn btn-danger btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#delete_data"><i
                                                                        class='fas fa-trash-alt fa-lg '></i></button></a></font></center></td>
                       </tr>
                     <?php endwhile ?>
                    </tbody>

            
        </table>
                    
                  
                
            </div>
            
        </div>
                                        
                                        <br>
                                        
                                        
                                <br>
        
                                <div class="modal fade" id="exampleModal" tabindex="0" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        
        
<form name="addcompany" method="post" action="save_company.php" style="width: 100%; margin: 0 auto;" class="text-center mt-5">
            <div class="container-fluid">


                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 flex-row align-items-center justify-content-between">
                                    <center><h6 class="m-0 font-weight-bold text-primary">เพิ่มข้อมูลบริษัท</h6></center>                           
                                </div>
                                
                                <?php
                                                    $sql= "Select Max(substr(id_company,-2))+1 as MaxID from company";
                                                    $objQuery = mysqli_query($objCon,$sql);
                                                    $data=mysqli_fetch_assoc($objQuery);              
                                                    $new_id = $data['MaxID'];
                                                    if($new_id==''){
                                                        $id_company="F01";
                                                    }else{
                                                        $id_company="F".sprintf("%02d",$new_id);
                                                    }
                                                    ?>
        
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <table style="width:90%" class="text-center"> 

<tr>
    <td style="width:30%">รหัสบริษัท</td>
    <td><input class="form-control text-center" name="id_company" value="<?php echo $id_company; ?>" type="text" id="id_company"  readonly aria-describedby="text" required style="width:50%"/></td>
  </tr>
  <tr>
    <td style="width:30%">ชื่อบริษัท</td>
    <td style="width:100%"><input class="form-control text-center" name="name_company" type="text" id="name_company" class="form-control" placeholder="ชื่อบริษัท" aria-describedby="text" required style="width:50%"/></td>
  </tr>
    <tr>
    <td style="width:30%">เบอรโทรศัพท์</td>
    <td style="width:100%"><input class="form-control text-center" name="tel_company" type="text" id="tel_company" class="form-control" placeholder="เบอร์โทรศัพท์" aria-describedby="text" required style="width:50%"/></td>
  </tr>
  
  <tr>
    <td style="width:30%">จังหวัด</td>
    <td style="width:100%"><select name="province_id" id="province" class="form-control text-center" style="width:50%">
                            <option value="">เลือกจังหวัด</option>
                            <?php while($result = mysqli_fetch_assoc($query)): ?>
                                <option value="<?=$result['id']?>"><?=$result['provinces_name_th']?></option>
                            <?php endwhile; ?>
                        </select></td>
  </tr>
  <tr>
    <td style="width:30%">อำเภอ</td>
    <td style="width:100%"><select name="amphure_id" id="amphure" class="form-control text-center" style="width:50%">
                            <option value="">เลือกอำเภอ</option>
                        </select></td>
  </tr>
  </tr>
    <tr>
    <td style="width:30%">ตำบล</td>
    <td style="width:100%"><select name="district_id" id="district" class="form-control text-center" style="width:50%">
                            <option value="">เลือกตำบล</option>
                        </select></td>
  </tr>
  <tr>
    <td style="width:30%">ที่อยู่</td>
    <td style="width:100%"><textarea input class="form-control text-center" name="address_company" type="text" id="address_company" class="form-control" placeholder="ที่อยู่" aria-describedby="text" required style="width:"></textarea></td>
  </tr>
</table>
                                <br> 
                                <div>
                <button type="submit" name="submit" value="Save" class="btn btn-primary" >เพิ่มข้อมูล</button>
                <a class="btn btn-danger" href="company.php" >ยกเลิก</a>
            </div> <br>
            </div>  
            <br>   
            
            </div>
                                
            </div>  
    </div>
     </form>
      <div>
       
      </div>
        <br>
    </div>
  </div>
</div>
    </div>
                     <br>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Pie Chart -->



                <!-- /.container-fluid -->


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
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>      

<script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</body>

</html>