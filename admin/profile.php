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
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">




    
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                            <div class="card shadow-lg mb-4">
                            <div
                                    class="card-header py-3 flex-row align-items-center justify-content-between">
                                    <center><h5 class="m-0 font-weight-bold "><font color="#000">ข้อมูลส่วนตัว</font></h5></center>                           
                                </div>
                                <!-- Card Body -->
                                    <div class="container col-lg-12 py-2 " >

            

                <div class="table-responsive">
                    <table class="table table-fixed">
                     
                        
                        
           
     
                
                    <?php 

include_once('functions_edit_delete.php');

$updatedata = new DB_con();

if (isset($_POST['update_employee'])) {

    $userid = $_GET['id_employee'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $prefix_name = $_POST['prefix_name'];
    $name_employee = $_POST['name_employee'];
    $tel_employee = $_POST['tel_employee'];
    $provinces = $_POST['provinces'];
    $amphures = $_POST['amphures'];
    $districts = $_POST['districts'];
    $zip_code = $_POST['zip_code'];
    $address_employee = $_POST['address_employee'];
    $email_employee = $_POST['email_employee'];

    $sql_employee = $updatedata->update_employee($username, $password, $prefix_name, $name_employee, $tel_employee, $provinces, $amphures,$districts, $zip_code, $address_employee, $email_employee, $userid);
    if ($sql_employee) {
        echo "<script>alert('แก้ไขข้อมูลพนักงานเรียบร้อย!');</script>";
        echo "<script>window.location.href='employee.php'</script>";
    } else {
        echo "<script>alert('บางอย่างผิดพลาด กรุณาลองอีกครั้ง!');</script>";
        echo "<script>window.location.href='employee_edit.php'</script>";
    }
}


?>



<div class="container">
    <?php 

        /* $userid = $_GET['id_employee'];
        $updateuser = new DB_con();
        $sql = $updateuser->fetchonerecord_employee($userid);
        while($row = mysqli_fetch_array($sql)) { */
    ?>

    

    <form action="password_save.php" method="post">
    <script type="text/javascript">
 // Specify a function to execute when the DOM is fully loaded.
$(function(){
	var defaultOption = '<option value=""> ------- เลือก ------ </option>';
	var loadingImage  = '<img src="images/loading4.gif" alt="loading" />';
	// Bind an event handler to the "change" JavaScript event, or trigger that event on an element.
	$('#selProvince').change(function() {
		$("#selAmphur").html(defaultOption);
		$("#selTumbon").html(defaultOption);
		// Perform an asynchronous HTTP (Ajax) request.
		$.ajax({
			// A string containing the URL to which the request is sent.
			url: "jsonAction.php",
			// Data to be sent to the server.
			data: ({ nextList : 'amphur', provinceID: $('#selProvince').val() }),
			// The type of data that you're expecting back from the server.
			dataType: "json",
			// beforeSend is called before the request is sent
			beforeSend: function() {
				$("#waitAmphur").html(loadingImage);
			},
			// success is called if the request succeeds.
			success: function(json){
				$("#waitAmphur").html("");
				// Iterate over a jQuery object, executing a function for each matched element.
				$.each(json, function(index, value) {
					// Insert content, specified by the parameter, to the end of each element
					// in the set of matched elements.
					 $("#selAmphur").append('<option value="' + value.AMPHUR_ID + 
											'">' + value.AMPHUR_NAME + '</option>');
				});
			}
		});
	});
	
	$('#selAmphur').change(function() {
		$("#selTumbon").html(defaultOption);
		$.ajax({
			url: "jsonAction.php",
			data: ({ nextList : 'tumbon', amphurID: $('#selAmphur').val() }),
			dataType: "json",
			beforeSend: function() {
				$("#waitTumbon").html(loadingImage);
			},
			success: function(json){
				$("#waitTumbon").html("");
				$.each(json, function(index, value) {
					 $("#selTumbon").append('<option value="' + value.DISTRICT_ID + 
											'">' + value.DISTRICT_NAME + '</option>');
				});
			}
		});
	});
});
</script>
    
<table style="width:100%" class="text-center"> 


<style>
table, th, td {
border:0px solid black;
}
</style>

<tr>
                <div class="mb-3 ">
                        <td style="width:6%"><label for="username" class="py-3"><font color="#000"><b>รหัสพนักงาน</b></font></label></td>
                        <td style="width:12%"><input value="<?php echo $objResult['username']; ?>" class="form-control text-center" name="username" value="" type="text" id="username" placeholder="รหัสพนักงาน" aria-describedby="text" readonly required style="width:100%"/></td>
                        <td style="width:6%"><label for="status_employee" class="py-3"><font color="#000"><b>สถานะ</b></font></label></td>
                        <td style="width:10%"><input value="<?php echo $objResult['status_employee']; ?>" class="form-control text-center" name="stastus_employee" value="" type="text" id="stastus_employee" placeholder="สถานะ" aria-describedby="text" readonly required style="width:100%"/></td>
                        
                        
                </div>
            </tr>
<tr>        
<div class="mb-3">
<td style="width:5%"><label for="name_employee" class="py-3"><font color="#000"><b>ชื่อ-นามสกุล</b></font></label></td>
<td colspan="2" style="width:10%"><input required value="<?php echo $objResult['prefix_name']; ?>&nbsp<?php echo $objResult['name_employee']; ?>" class="form-control text-center" name="name_employee" type="text" id="name_employee" class="form-control" placeholder="ชื่อ - นามสกุล" aria-describedby="text" readonly required style="width:100%"/></td>
</div>
</tr>
<tr> 
<div class="mb-3">
<td style="width:5%"><label for="tel_employee" class="py-3"><font color="#000"><b>เบอรโทรศัพท์</b></font></label></td>
<td style="width:10%"><input value="<?php echo $objResult['tel_employee']; ?>" class="form-control text-center" type="text" name="tel_employee" id="tel_employee" placeholder="เบอร์โทรศัพท์" readonly required></td>
<td  style="width:5%"><label for="email_employee" class="py-3"><font color="#000"><b>อีเมล</b></font></label></td>
                <td colspan="2" style="width:10%"><input value="<?php echo $objResult['email_employee']; ?>" class="form-control text-center" type="text" name="email_employee" id="email_employee" placeholder="อีเมล" readonly required></td>
</div>
</tr>
                <tr> 
                
                <?php 
                        $sql1=" SELECT employee.id_employee, amphures.name_amphures,districts.name_districts ,  provinces.name_provinces ,districts.zip_code
                        FROM employee
                        INNER JOIN provinces ON provinces.id_provinces = employee.id_provinces
                        INNER JOIN amphures ON amphures.id_amphures = employee.id_amphures
                        INNER JOIN districts ON districts.id_districts = employee.id_districts
                        WHERE id_employee = '$objResult[id_employee]'";
                        $result1 = $objCon->query($sql1);
                        $result2 = $result1->fetch_assoc();
                ?>
                    
                <div class="mb-3">
                <td style="width:5%"></td>
                <td style="width:10%"></td>


                <div class="mb-3">
                <td style="width:5%"></td>
                <td style="width:10%"></td>

                <div class="mb-3">
                <td style="width:5%"></td>
                <td style="width:10%"></td>

                <div class="mb-3">
                <td style="width:5%"></td>
                <td style="width:10%"></td>

                </div>
                </tr>

                
                <tr> 
                <div class="mb-3">
                <td style="width:5%"><label for="address_employee" class="py-3"><font color="#000"><b>ที่อยู่</b></font></label></td>
                <td colspan="3" style="width:10%"><textarea value="" input class="form-control text-center" name="address_employee" type="text" id="address_employee" class="form-control" placeholder="ที่อยู่" aria-describedby="text" readonly required style="width:">
                <?php echo $objResult['address_employee']; ?>&nbsp<?php echo $result2['name_districts']; ?>&nbsp<?php echo $result2['name_amphures']; ?>&nbsp<?php echo $result2['name_provinces']; ?>&nbsp<?php echo $result2['zip_code']; ?></textarea></td>
                </div>
                </tr>
                
                <tr> 
                <div class="mb-3">
                
                </div>
                </tr>
                

            </div>
        </tr>

</table> 

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalCenterTitle"><font color="#000"><b>เปลี่ยนรหัสผ่าน</b></font></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form name="password_edit" > 
            
              
            <br><center><label class="form-label" for="form3Example3"><font color="#000"><b>รหัสผ่านเก่า</b></font></center></label>
            <center><input style="width:50%" class="form-control" name="oldpassword" type="password" id="oldpassword" value=""></center>
        
              <br><center><label class="form-label" for="form3Example3"><font color="#000"><b>รหัสผ่านใหม่</b></font></center></label>
              <center><input style="width:50%" class="form-control" name="password" type="password" id="password" value=""></center>
                
            <br><center><label class="form-label" for="form3Example3"><font color="#000"><b>ยืนยันรหัสผ่านใหม่</b></font></center></label>
                <center><input style="width:50%" class="form-control" name="conpassword" type="password" id="conpassword" value=""></center>
                
           <br>
            <!-- Submit button -->
            <center><button  style="width:30%" type="submit" class="btn btn-primary" name="submit1" value="Save">แก้ไข
        </button></center>

</form>
      </div>
    </div>
  </div>
</div>






  
<?php include('script.php');?> 
        
        <br>
        <center>
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        เปลี่ยนรหัสผ่าน
        </button>
        <a href='javascript:window.history.back()'  name="back" class="btn btn-danger">กลับ</a></center>
        <br>
    </form>
   
</div>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>
    <!-- End of Page Wrapper -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModal">คุณแน่ใจหรือไม่?</h5>
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
</body>

</html>