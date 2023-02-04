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
<?php 

if(isset($_POST["add_to_cart"]))  //ตัวเพิ่มเข้าตะกร้า
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "id_product");
		if(!in_array($_GET["id_product"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
            $price_sell = $_POST["price_sell"];
			$sell_number = $_POST["sell_number"];
			$total_sell = $price_sell*$sell_number;
			$item_array = array(
				'id_product'			=>	$_GET["id_product"],
				'name_product'			=>	$_POST["name_product"],
				'price_sell'		=>	$_POST["price_sell"],
				'sell_number'		=>	$_POST["sell_number"],
                'total_sell'		=>	$total_sell
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("มีสินค้าอยู่ในตะกร้าแล้ว")</script>';
		}
	}
	else
	{
        $price_sell = $_POST["price_sell"];
		$sell_number = $_POST["sell_number"];
		$total_sell = $price_sell*$sell_number;
		$item_array = array(
			'id_product'			=>	$_GET["id_product"],
			'name_product'			=>	$_POST["name_product"],
			'price_sell'		=>	$_POST["price_sell"],
			'sell_number'		=>	$_POST["sell_number"],
            'total_sell'		=>	$total_sell
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))    //ตัวลบ
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["id_product"] == $_GET["id_product"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("ลบสินค้าเรียบร้อย")</script>';
				echo '<script>window.location="sell_add.php"</script>';
			}
		}
	}
}

if(isset($_GET["action"]))    //ตัวลบ
{
	if($_GET["action"] == "deleteall")
	{
		unset($_SESSION["shopping_cart"]);
		echo '<script>alert("เคลียร์สินค้าทั้งหมดแล้ว")</script>';
		echo '<script>window.location="sell_add.php"</script>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
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
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js%22%3E"></script>
    
</head>
<body id="page-top">
 
<!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

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


<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">


    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $objResult["status_employee"];?>, <?php echo $objResult["name_employee"];?></span>
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
<form id="frmMain" name="frmMain" method="post" action="sell_save.php" style="" class="text-center mt-5" >
<form action="" method="POST">
<div class="container-fluid ">

<center><div class="card shadow-lg mb-4" style="width:90%" >
<!-- Card Header - Dropdown -->
<div
class="card-header py-3 flex-row align-items-center justify-content-between">
<center><h5 class="m-0 font-weight-bold "><font color="#000">เพิ่มข้อมูลการขาย</font></h5></center>                           
</div><br>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <?php date_default_timezone_set("Asia/Bangkok"); ?>
    <?php
        $date_receipt_sell = date("Y-m-d");
        $time_receipt_sell = date("H:i:s");
        $id_employee = $objResult["username"];
        
    ?>

                <center><table border="0" style="width:90%">
                    <tr>
                    <td style="width:15%"><center><img src="img/logo.png" alt="Girl in a jacket" width="150" height="150"></center></td>
                        <td style="width:30%" class="text-center"><font color="#000" size=4><b>ร้านสิริสุวรรณ์กระจกอลูมิเนียม</b></font></td>
                        <td style="width:15%" class="text-right"><font color="#000"><b>วันที่ <?php echo $date_receipt_sell; ?><br>เวลา <?php echo $time_receipt_sell; ?></b></font></td>   
                    </tr>
                    
                    
                    </table></center>         
                        <input type="hidden" name="id_employee" value="<?php echo $id_employee; ?>">
                        <input type="hidden" name="date_receipt_sell" value="<?php echo $date_receipt_sell; ?>">
                        <input type="hidden" name="time_receipt_sell" value="<?php echo $time_receipt_sell; ?>">
                        <?php
                                            $sql= "Select Max(substr(id_receipt_sell,-4))+1 as MaxID from receipt_sell";
                                            $objQuery = mysqli_query($objCon,$sql);
                                            $data=mysqli_fetch_assoc($objQuery);              
                                            $new_id = $data['MaxID'];
                                            if($new_id==''){
                                                $id_receipt_sell="SA0001";
                                            }else{
                                                $id_receipt_sell="SA".sprintf("%04d",$new_id);
                                            }
                                            ?>
                        <br> 
                        <center><table border="0" style="width:90%">
                        <tr>
                        <td style="width:70%" class="text-right"><font color="#000"><b>เลขที่ใบเสร็จ&nbsp;&nbsp;</b></font></td>       
                        <td style="width:15%"><center><font color="#000"><b></b></font><input name="id_receipt_sell" value="<?php echo $id_receipt_sell; ?>" type="text" id="id_receipt_sell" class="form-control text-center" placeholder="" readonly style="width:100%"/></td>
                    
                        </td>
                        </table></center>






                        <style>
                            input.largerCheckbox {
                                width: 25px;
                                height: 20px;
                            }
                        </style>

                                <center><table border="0" style="width:90%">   
                                        <tr>
                                            <td style="width:20%"><center><font color="#000"><b>ลูกค้า</b></font></center></td>
                                            <td style="width:30%"><select class="form-control text-center" name="id_customer" id="id_customer " style="width:100%">
                                <?php
                                        $sql = " SELECT * FROM customer ORDER BY id_customer ASC";
                                        $result = $objCon->query($sql);
                                        
                                    while($data = $result->fetch_assoc()):
                                
                                ?> 
                                <option value="<?php echo $data['id_customer']?>"><?php echo $data['name_customer']?></option>
                                <?php endwhile ?> 
                                            </select></td>

                                            <td style="width:1%">
                                            <center><input type="hidden" name="sell" id="sell" value="2">
                                                <textarea placeholder="ที่อยู่การจัดส่ง" class="form-control" input type="text" style="width:400px;" name="address_delivery" id="address_delivery"></textarea></center>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td></td>
                                        <td>
                                        </td>
                                        <td style="width:5%"><center><input type="checkbox" class="largerCheckbox" name="sell" id="sell" value="1"><font color="#000"><b>ส่ง<br>
                                            ***สำหรับส่งเท่านั้น***</b></font></center></td>
                                        </tr>
                                            

                                            </table></center>
                                                                <div class="container">
                                                                
                                        </form>                          
                                        <hr>                      
<center><table border="0" style="width:90%"> 




                    <form action="sell_add.php" method="POST">
                    <tr>
                        <td width="20%"><h6 align="center" class="py-3 text-right">สินค้า&nbsp;&nbsp;</h6></td>
                        <td ><select class="form-control text-center" name="id_product" id="id_product " style="width:100%">		
                                            <?php
                                                    $sql = " SELECT * FROM product ORDER BY id_product ASC";
                                                    $result = $objCon->query($sql);
                                                    
                                                while($row = $result->fetch_assoc()):
                                            
                                            ?> 
                                            <?php 

                                            if (isset($_POST["id_product"])) {
                                                $id_product = $_POST["id_product"];
                                            } else {
                                                $id_product = '';
                                            }
                                                /* echo $id_product; */
                                            ?>

                                            <option value="<?php echo $row['id_product']?>" ><?php echo $row['name_product']?></option>
                                            <?php endwhile ?> 
                                            </select></td>
                        <td ><center><input type="submit" class="btn btn-success" value="ดึงข้อมูล"></center></td>


                                            
                                            <br>
                                            
                    </form>

</table></center>	

                <?php 
                $sql1 = " SELECT SUM(buy_number) AS Sumbuy FROM buy where id_product = '$id_product' ";
                //$sql = " SELECT distinct FROM product,buy where product.id_product = buy.id_product ";
                $result1 = $objCon->query($sql1);
                
                $sql2 = " SELECT SUM(sell_number) AS Sumsell FROM sell where id_product = '$id_product' ";
                //$sql = " SELECT distinct FROM product,buy where product.id_product = buy.id_product ";
                $result2 = $objCon->query($sql2);
                
                while($row1 = $result1->fetch_assoc()):
                while($row2 = $result2->fetch_assoc()):
                
                    $stock = $row1['Sumbuy']-$row2['Sumsell'];
                
                ?>
                <?php endwhile ?> 
                <?php endwhile ?> 
                
                <?php
                    $query = "SELECT * FROM product where id_product='$id_product'";
                    $result = mysqli_query($objCon, $query);
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                    ?>
        <div class="col-md-5">
        
            <form method="post" style="width:60%; height:10%;" action="sell_add.php?action=add&id_product=<?php echo $row["id_product"]; ?>">
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                     <img src="img/product/<?php echo $row["img_product"]; ?>" class="img-responsive" style="width:50%; height:50%;"/><br/>

                    <h6 class="text-info"><?php echo $row["name_product"]; ?></h6>

                    <h6 class="text-danger">ราคา: <?php echo $row["price_sell"]; ?> บาท</h6>
                    <h6 class="text-danger">สินค้าคงเหลือ: <?php echo $stock; ?></h6>
                    <center><input style="width:30%; height:20%;" type="number" name="sell_number" value="1" class="form-control text-center" /></center>

                    <center><input type="hidden" name="name_product" value="<?php echo $row["name_product"]; ?>" /></center>

                    <center><input type="hidden" name="price_sell" value="<?php echo $row["price_sell"]; ?>" /></center>

                    <center><input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="เพิ่มสินค้า" />

                </div>
            </form>
        </div>
                    <?php
                            }
                        }
                    ?>

                        <form action="" method="POST">
                                    <div style="clear:both"></div>
                                    <br />
                                    <h5>รายการสินค้า</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="40%">ชื่อสินค้า</th>
                                                <th class="text-center" width="10%">จำนวน</th>
                                                <th class="text-center" width="20%">ราคา</th>
                                                <th class="text-center" width="15%">ราคารวม</th>
                                                <th width="5%"><center>ลบ</center></th>
                                                <th width="5%"><a href="sell_add.php?action=deleteall&"><span class="text-danger"><i style='font-size:24px' class='fas'>&#xf2ed;</i></span></a></th>
                                            </tr>
                                            <?php
                                            if(!empty($_SESSION["shopping_cart"]))
                                            {
                                                $grand_sell = 0;
                                                foreach($_SESSION["shopping_cart"] as $keys => $values)
                                                {
                                            ?>
                                            <tr>
                                                <td ><?php echo $values["name_product"]; ?></td>
                                                <td class="text-center"><?php echo $values["sell_number"]; ?></td>
                                                <td class="text-center"><?php echo $values["price_sell"]; ?> บาท</td>
                                                <td class="text-center"> <?php echo number_format($values["sell_number"] * $values["price_sell"], 2);?> บาท</td>
                                                <td><center><a href="sell_add.php?action=delete&id_product=<?php echo $values["id_product"]; ?>"><span class="text-dark"><i style='font-size:24px' class='fas'>&#xf829;</i></span></a></td>
                                            </tr>
                                            <?php
                                                    $grand_sell = $grand_sell + ($values["sell_number"] * $values["price_sell"]);
                                                }
                                            ?>
                                            <tr>
                                                <td colspan="3" align="right">ราคารวมทั้งหมด</td>
                                                <td class="text-center" align="right"><?php echo number_format($grand_sell, 2); ?> บาท</td>
                                                <td></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                                
                                        </table>
                                    </div>
                                
                           
                        </form> 

                        <a href=javascript:window.history.back()  name="back" class="btn btn-danger">ยกเลิก</a>
            <input type="submit" class="btn btn-success" value="บันทึกข้อมูล"> 
            </form> 
            <br> <br>
  

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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        

        
   
                </div>
            </div>
        </div>
      </div>
  </body>
</html>