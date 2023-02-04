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
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/project/admin/index_admin.php">
<div class="sidebar-brand-icon rotate-n-15">
<img src="img/logo.png" alt="Girl in a jacket" width="60" height="60">
</div>
<div class="sidebar-brand-text mx-3">admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/project/admin/index_admin.php">
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
    <a class="nav-link" href="/project/admin/customer.php">
        <i class="fa fa-address-card" aria-hidden="true"></i>
        <span>ข้อมูลลูกค้า</span></a>
</li>


<li class="nav-item">
    <a class="nav-link" href="/project/admin/company.php">
        <i class="fa fa-building" aria-hidden="true"></i>
        <span>ข้อมูลบริษัท</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="/project/admin/employee.php">
        <i class="fa fa-user" aria-hidden="true"></i>
        <span>ข้อมูลพนักงาน</span></a>
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
            <a class="collapse-item" href="/project/admin/product.php">ข้อมูลสินค้า</a>
            <a class="collapse-item" href="/project/admin/type_product.php">ประเภทสินค้า</a>
            <a class="collapse-item" href="/project/admin/type_work.php">ชนิดงาน</a>
            <a class="collapse-item" href="/project/admin/unit.php">หน่วยนับ</a>
        </div>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link" href="/project/admin/stock.php">
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
            <a class="collapse-item" href="admin.php">ข้อมูลพนักงาน</a>
            <a class="collapse-item" href="admin_update.php">เพิ่มข้อมูลพนักงาน</a>

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
            <a class="collapse-item" href="/project/admin/buy.php">ข้อมูลซื้อ</a>
            <a class="collapse-item" href="/project/admin/buy_add.php">เพิ่มข้อมูลซื้อ</a>
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
            <a class="collapse-item" href="/project/admin/sell.php">ข้อมูลขาย</a>
            <a class="collapse-item" href="/project/admin/sell_add.php">เพิ่มข้อมูลขาย</a>
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
            <a class="collapse-item" href="/project/admin/delivery.php">ข้อมูลการส่ง</a>
            <a class="collapse-item" href="/project/admin/sell_add.php">เพิ่มข้อมูลการส่ง</a>
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
            <a class="collapse-item" href="/project/admin/contractor.php">ข้อมูลการรับเหมา</a>
            <a class="collapse-item" href="/project/admin/contractor_add.php">เพิ่มข้อมูลการรับเหมา</a>
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
      
      
                <form id="frmMain" name="frmMain" method="post" action="buy_save.php" style="" class="text-center mt-5" >
                  
                    <div class="container-fluid ">

                    <center><div class="card shadow-lg mb-4" style="width:80%">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 flex-row align-items-center justify-content-between">
                                    <center><h5 class="m-0 font-weight-bold "><font color="#000">เพิ่มข้อมูลการซื้อ</font></h5></center>                           
                                </div><br>
                                
                                
                                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                                <?php date_default_timezone_set("Asia/Bangkok"); ?>
                                <?php
                                
                                    $date_receipt_buy = date("Y-m-d");
                                    $time_receipt_buy = date("H:i:s");
                                    $id_employee = $objResult["username"];
                                     
                                ?>
                               
                        <center><table border="0" style="width:90%">
                            <tr>
                                <td style="width:15%"><center><img src="img/logo.png" alt="Girl in a jacket" width="150" height="150"></center></td>
                                <td style="width:30%" class="text-center"><font color="#000" size=4><b>ร้านสิริสุวรรณ์กระจกอลูมิเนียม</b></font></td>
                                <td style="width:15%" class="text-right"><font color="#000"><b>วันที่ <?php echo $date_receipt_buy; ?>
                                <br> เวลา <?php echo $time_receipt_buy; ?></b></font></td>   
                            </tr>

                            </table></center>         
                                <input type="hidden" name="id_employee" value="<?php echo $id_employee; ?>">
                                <input type="hidden" name="date_receipt_buy" value="<?php echo $date_receipt_buy; ?>">
                                <input type="hidden" name="time_receipt_buy" value="<?php echo $time_receipt_buy; ?>">
                                <?php
                                                    $sql= "Select Max(substr(id_receipt_buy,-4))+1 as MaxID from receipt_buy";
                                                    $objQuery = mysqli_query($objCon,$sql);
                                                    $data=mysqli_fetch_assoc($objQuery);              
                                                    $new_id = $data['MaxID'];
                                                    if($new_id==''){
                                                        $id_receipt_buy="B0001";
                                                    }else{
                                                        $id_receipt_buy="B".sprintf("%04d",$new_id);
                                                    }
                                                    ?>
                                <br> 
                                <center><table border="0" style="width:90%">
                                <tr>
                                <td style="width:70%" class="text-right"><font color="#000"><b>เลขที่ใบเสร็จ&nbsp;&nbsp;</b></font></td>       
                                <td style="width:15%"><center><font color="#000"><b></b></font><input name="id_receipt_buy" value="<?php echo $id_receipt_buy; ?>" type="text" id="id_receipt_buy" class="form-control text-center" placeholder="วันเวลา" readonly style="width:100%"/></center>
                                </td>
                                </table></center>
                                                
                                                <center><table border="0" style="width:90%">                        
                                                <tr>
                    
                                          <td style="width:5.3%"><center><font color="#000"><b>บริษัท</b></font></center></td>
                     <td style="width:14%"><select class="form-control text-center" name="id_company" id="id_company " style="width:50%">
                        <?php
                                $sql = " SELECT * FROM company ORDER BY id_company ASC";
                                $result = $objCon->query($sql);
                                
                            while($data = $result->fetch_assoc()):
                        
                        ?> 
                        <option value="<?php echo $data['id_company']?>"><?php echo $data['name_company']?></option>
                        <?php endwhile ?> 
                                    </select></center></td>


                            </tr>
                        
            

                
              
                
                                          
                                    


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
                                    var buy_number = document.getElementById('buy_number').value; 
                                    var price_buy = document.getElementById('price_buy').value;
                                    var result = parseInt(buy_number)*parseInt(price_buy);
                                    document.getElementById('total_buy').value = result;
                                        

                                            } //close func
                                </script>



                                

                                                    
                            <script type="text/javascript">
                            
                                
                        $(document).ready(function(){
                            

                            var rows = 1;
                            $("#createRows").click(function(){
                                
                                                
                                                var tr = "<tr>";
                                                tr = tr + "<td><select class='id_product form-control text-center' style='width:100%' id='id_product"+rows+"' name='id_product"+rows+"'><?php $sql = ' SELECT * FROM product ORDER BY id_product ASC'; $result = $objCon->query($sql); while($data = $result->fetch_assoc()): ?><option value='<?php echo $data['id_product']?>'><?php echo $data['name_product']?></option><?php endwhile ?></select></td>";
                                                tr = tr + "<td><input  OnChange='sum();' name='buy_number"+rows+"'  type='text' id='buy_number"+rows+"' class='form-control text-center'  required style='width:'/></td>";
                                                tr = tr + "<td><input  OnChange='sum();' name='price_buy"+rows+"'  type='text' id='price_buy"+rows+"' class='form-control text-center' placeholder='' required style='width:'/></td>";
                                                tr = tr + "<td><input name='total_buy"+rows+"' type='text' id='total_buy"+rows+"'  class='form-control text-center'  placeholder='' required style='width:'/></td>";
                                                tr = tr + "<td><input type='button' value='ลบ' class='btn btn-danger' onclick='deleteRow(this);'></td>";
                                                tr = tr + "</tr>";
                                                $('#myTable > tbody:last').append(tr);
                                            
                                                $('#hdnCount').val(rows);
                                                rows = rows + 1;
                                });

                            });    
                        </script>                            
                              </table></center>   
                              <br>                         
                                                    <center><table border="0" id="myTable" style="width:90%" >
                            <tr>
                            <td class="text-center"><font color="#000"><b>สินค้า</b></font></td>
                            <td class="text-center"><font color="#000"><b>จำนวน</b></font></td>
                            <td class="text-center"><font color="#000"><b>ราคา</b></font></td>
                            <td class="text-center"><font color="#000"><b>ราคารวม</b></font></td>
                            <td class="text-center"></td>     
                            </tr>
                            <!-- <tr>
                            <td ><select class="id_product form-control text-center" style="width:100%" id="id_product" name="id_product">
                                    <?php
                                            $sql = " SELECT * FROM product ORDER BY id_product ASC";
                                            $result = $objCon->query($sql);
                                            
                                        while($data = $result->fetch_assoc()):
                                    ?>        
                                    <option value="<?php echo $data['id_product']?>"><?php echo $data['name_product']?></option>

                                        
                                    <?php endwhile ?> 
                                            </select></td>
                                
                                
                            <td><input name="buy_number" type="text" id="buy_number" OnChange="sum();" class="form-control text-center" placeholder=""  required style="width:"/></td>
                            <td><input name="price_buy" type="text" id="price_buy" OnChange="sum();" class="form-control text-center"  placeholder=""  required style="width:"/></td>
                            <td><input name="total_buy" type="text" id="total_buy"  class="form-control text-center" placeholder=""    style="width:"/></td> 
                            <td><input type="button" value="ลบ" class="btn btn-danger" onclick="deleteRow(this)"></td>       
                            </tr> -->
                                                        </table></center>
                                                        <br>    
                                                        <center><table border="0" id="myTable" style="width:90%" >
                            <tr>
                            <td class="text-center" style="width:14%"><font color="#000"><b></b></font></td>
                            <td class="text-center" style="width:14%"><font color="#000"><b></b></font></td>
                            <td class="text-center" style="width:14%"><font color="#000"><b></b></font></td>
                            <td class="text-right" style="width:30.2%"><font color="#000"><b>ราคารวมทั้งหมด&nbsp</b></font></td>
                            <td><font color="#000" style="width:14%"></b></font><input type="text" class="form-control text-center" id="grand_buy" name="grand_buy"></td>   
                            <td class="text-center" style="width:5.5%"><font color="#000"><b></b></font></td>    
                        </tr>
                            </table></center> 
                                                        <br>
                                        <div class="container">
                                        <div class="row">
                                           
                                            
                                         
                                            
                                        
                                            
                                        </div>
                                        </div>
                                        <div>
                                        <input type="button" id="createRows" class="btn btn-warning" value="เพิ่มข้อมูล">
                                        <a href="buy.php"><input type="button" class="btn btn-danger" value="ยกเลิก"></a>
                                        <input type="hidden" id="hdnCount" name="hdnCount">
                                        <input type="submit" class="btn btn-success" value="บันทึกข้อมูล">
                                        <center>
                        <br>
                                </center>
                             </div>
                               <br> 
                        </div>
                              </center>
                            </div>
                            
                                                    
                                    

                                
                    
                    
                    
                             
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
                    <a class="btn btn-primary" href="/project/login.php">ออกระบบ</a>
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
      </div>
  </body>
</html>