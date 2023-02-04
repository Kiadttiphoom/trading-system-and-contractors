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
    <link rel="icon" href="/project/owner/img/headlogo.png">

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
                       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/project/owner/index_owner.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Owner</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/project/owner/index_owner.php">
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
                <a class="nav-link" href="/project/owner/system/customer/customer.php">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <span>ข้อมูลลูกค้า</span></a>
            </li>
            
            
           <li class="nav-item">
                <a class="nav-link" href="/project/owner/system/company/company.php">
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
                <a class="nav-link" href="/project/owner/system/product/stock.php">
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
                <a class="nav-link" href="/project/owner/system/buy/buy.php">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span>ข้อมูลซื้อสินค้า</span></a>
            </li>
                    
            <li class="nav-item">
                <a class="nav-link" href="/project/owner/system/sell/sell.php">
                    <i class="fas fa-comment-dollar" aria-hidden="true"></i>
                    <span>ข้อมูลขายสินค้า</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="/project/owner/system/sell/sell.php">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                    <span>ข้อมูลการส่งสินค้าสินค้า</span></a>
            </li>                
                    
             <hr class="sidebar-divider"> 
                           
            <li class="nav-item">
                <a class="nav-link" href="/project/owner/system/buy/approve_buy.php">
                    <i class="fa fa-shopping-cart"></i>
                    <span>อนุมัติการสั่งซื้อสินค้า</span></a>
            </li>
                           
            
            
            <li class="nav-item">
                <a class="nav-link" href="/project/owner/system/delivery/approve_delivery.php">
                    <i class="fa fa-truck"></i>
                    <span>อนุมัติการส่งสินค้า</span></a>
            </li>
                           
                                   <li class="nav-item">
                <a class="nav-link" href="/project/owner/system/contractor/apptove_contractor.php">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <span>อนุมัติการรับเหมา</span></a>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone"
                    aria-expanded="true" aria-controls="collapseone">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    <span>รายงานย้อนหลัง</span>
                </a>
                <div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/project/owner/system/report/report_buy.php">Report การซื้อสินค้า</a>
                        <a class="collapse-item" href="/project/owner/system/report/report_sell.php">Report การขายสินค้า</a>
                        <a class="collapse-item" href="/project/owner/system/report/report_delivery.php">Report การส่งสินค้า</a>
                        <a class="collapse-item" href="/project/owner/system/report/report_inout_product.php">Report การเข้าออกสินค้า</a>
                        <a class="collapse-item" href="/project/owner/system/report/report_contractor.php">Report การรับเหมา</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/project/owner/system/report/dashboard.php">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    <span>Dashboard</span></a>
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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $objResult["status_employee"];?>, <?php echo $objResult["name_employee"];?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="/project/system/login/login.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    ออกระบบ
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
      
      
                <form id="frmMain" name="frmMain" method="post" action="save_sell.php" style="" class="text-center mt-5" >
                  
                    <div class="container-fluid ">

                    <center><div class="card shadow mb-4" style="width:80%">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 flex-row align-items-center justify-content-between">
                                    <center><h6 class="m-0 font-weight-bold text-primary">เพิ่มข้อมูลการขาย</h6></center>                           
                                </div><br>
                                
                                <div id="datetime"></div>
                                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                                <script>
                                    setInterval(() => {
                                        $.get( "date.php", function( data ) {
                                            $( "#datetime" ).html( data );
                                        });        
                                    }, 1000);
                                </script>
                                
                                <?php
                                    $date_receipt_sell = date("Y-m-d");
                                    $time_receipt_sell = date("H:i:s");
                                    $id_employee = $objResult["username"];
                                     
                                ?>
                                <br>
                                <td>วันที่ <?php echo $date_receipt_sell; ?></td>  
                                <td>เวลา<?php echo $time_receipt_sell; ?></td>
                                
                                <input type="hidden" name="id_employee" value="<?php echo $id_employee; ?>">
                                <input type="hidden" name="date_receipt_sell" value="<?php echo $date_receipt_sell; ?>">
                                <input type="hidden" name="time_receipt_sell" value="<?php echo $time_receipt_sell; ?>">
                                <?php
                                                    $sql= "Select Max(substr(id_receipt_sell,-4))+1 as MaxID from receipt_sell";
                                                    $objQuery = mysqli_query($objCon,$sql);
                                                    $data=mysqli_fetch_assoc($objQuery);              
                                                    $new_id = $data['MaxID'];
                                                    if($new_id==''){
                                                        $id_receipt_sell="S0001";
                                                    }else{
                                                        $id_receipt_sell="S".sprintf("%04d",$new_id);
                                                    }
                                                    ?>
                                
                                
                                <td><center>เลขที่ใบเสร็จ<input name="id_receipt_sell" value="<?php echo $id_receipt_sell; ?>" type="text" id="id_receipt_sell" class="form-control text-center" placeholder="วันเวลา" readonly style="width:30%"/></center>
                                
                               
                                </td>

                    
                                          <td><div><center>ลูกค้า</center></div></td>
                     <td><center><select class="form-control text-center" name="id_customer" id="id_customer " style="width:50%">
                        <?php
                                $sql = " SELECT * FROM customer ORDER BY id_customer ASC";
                                $result = $objCon->query($sql);
                                
                            while($data = $result->fetch_assoc()):
                        
                        ?> 
                        <option value="<?php echo $data['id_customer']?>"><?php echo $data['name_customer']?></option>
                        <?php endwhile ?> 
                                    </select></center></td>


                    </div>
                        
            

                
              
                <div class="container-fluid ">
                                          
                                    


                             <script>
                                    function deleteRow(r) {
                                    var i = r.parentNode.parentNode.rowIndex;
                                    if (confirm("ต้องการลบหรือไม่")) {
                                        //break;
                                        document.getElementById("myTable").deleteRow(i);
                                    } else {
                                        //txt = "You pressed Cancel!";
                                    }
                                    }
                            </script>


                                <script type="text/javascript">
                                     function sum() {
                                    var sell_number = document.getElementById('sell_number').value; 
                                    var price_sell = document.getElementById('price_sell').value;
                                    var result = parseInt(sell_number)*parseInt(price_sell);
                                    document.getElementById('total_sell').value = result;
                                        

                                            } //close func
                                </script>

                                                    
                            <script type="text/javascript">
                            
                                
                        $(document).ready(function(){
                            

                            var rows = 1;
                            $("#createRows").click(function(){
                                
                                                
                                                var tr = "<tr>";
                                                tr = tr + "<td><select class='id_product form-control text-center' style='width:100%' id='id_product"+rows+"' name='id_product"+rows+"'><?php $sql = ' SELECT * FROM product ORDER BY id_product ASC'; $result = $objCon->query($sql); while($data = $result->fetch_assoc()): ?><option value='<?php echo $data['id_product']?>'><?php echo $data['name_product']?></option><?php endwhile ?></select></td>";
                                                tr = tr + "<td><input  OnChange='sum();' name='sell_number"+rows+"'  type='text' id='sell_number"+rows+"' class='form-control text-center'  required style='width:'/></td>";
                                                tr = tr + "<td><input OnChange='sum();' name='price_sell"+rows+"'  type='text' id='price_sell"+rows+"' class='form-control text-center' placeholder='' required style='width:'/></td>";
                                                tr = tr + "<td><input name='total_sell"+rows+"' type='text' id='total_sell"+rows+"'  class='form-control text-center' readonly placeholder='' required style='width:'/></td>";
                                                tr = tr + "<td><input type='button' value='ลบ' class='btn btn-danger' onclick='deleteRow(this);'></td>";
                                                tr = tr + "</tr>";
                                                $('#myTable > tbody:last').append(tr);
                                            
                                                $('#hdnCount').val(rows);
                                                rows = rows + 1;
                                });

                            });    
                        </script>                            
                                                        
                                                    <table border="0" id="myTable">
                            <tr>
                            <td class="text-center">สินค้า</td>
                            <td class="text-center">จำนวน</td>
                            <td class="text-center">ราคา</td>
                            <td class="text-center">ราคารวม</td>
                            <td class="text-center"></td>     
                            </tr>
                            <tr>
                            <td ><select class="id_product form-control text-center" style="width:100%" id="id_product" name="id_product">
                                    <?php
                                            $sql = " SELECT * FROM product ORDER BY id_product ASC";
                                            $result = $objCon->query($sql);
                                            
                                        while($data = $result->fetch_assoc()):
                                    ?>        
                                    <option value="<?php echo $data['id_product']?>"><?php echo $data['name_product']?></option>

                                        
                                    <?php endwhile ?> 
                                            </select></td>
                                
                                
                            <td><input name="sell_number" type="text" id="sell_number" OnChange="sum();" class="form-control text-center" placeholder=""  required style="width:"/></td>
                            <td><input name="price_sell" type="text" id="price_sell" OnChange="sum();" class="form-control text-center"  placeholder=""  required style="width:"/></td>
                            <td><input name="total_sell" type="text" id="total_sell"  class="form-control text-center" placeholder=""   readonly style="width:"/></td> 
                            <td><input type="button" value="ลบ" class="btn btn-danger" onclick="deleteRow(this)"></td>       
                            </tr>
                            </table>    
                                                        
                                                        <br>
                                        <div>
                                            
                                        <input type="button" id="createRows" class="btn btn-info" value="เพิ่มข้อมูล">
                                        <a href="sell.php"><input type="button" class="btn btn-warning" value="ยกเลิก"></a>    
                                        <center>
                        <br>
                        <input type="hidden" id="hdnCount" name="hdnCount">
                                </center>
                             </div>
                               <br> 
                                 </div>
                              </center>
                            </div>
                            
                                                    
                                    

                                
                    
                    <input type="submit" class="btn btn-success" value="บันทึกข้อมูล">
                    
                </form>
                

                
               
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
                    <a class="btn btn-primary" href="/project/login/login.php">ออกระบบ</a>
                </div>
            </div>
        </div>
    </div>
      
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
        

        



     
        
   
                </div>
            </div>
     
      </div>
  </body>
</html>