<?php
    session_start();
?>
<html>
    <link rel="icon" href="images/headlogo.png">
    <br><br><br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />
</head>

<style>
body {
  background-image: url('images/backgroundlogin.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
    
<body>
    
    
    <div class="container">
        
  <div class="row">
    <div class="col-sm-1 ">
      
    </div>
    <div class="col-sm-10 ">
      
        <form name="form1" method="post" action="save_register.php" style="width: 30%; margin: 0 auto;" class="text-center mt-5">
            <div class="card">
                <br>
        <div class="container">
           
        <br>
        <h2>เพิ่มข้อมูล</h2><br>
        
            <!-- 2 column grid layout with text inputs for the first and last names -->
            
                    
                <input name="txtusername" type="text" id="txtusername" class="form-control" placeholder="วันเวลา" required/><br>
                        
                    
         
            
                <input name="txtpassword" type="password" id="txtpassword" class="form-control" placeholder="รหัสผ่าน" required/><br>
                
            
                <input name="txtConPassword" type="password" id="txtConPassword" class="form-control" placeholder="ยืนยันรหัสผ่าน" required/><br>
            
                
                <input name="txtname_employee" type="text" id="txtname_employee" class="form-control" placeholder="ชื่อ-สกุล" required/><br>
            
            
                <input name="txttel_employee" type="text" id="txttel_employee" class="form-control" placeholder="เบอร์โทรศัพท์" required/><br>
            
                         
                <input name="txtaddress_employee" type="email" id="txtaddress_employee" class="form-control" placeholder="อีเมล" required/><br>
            
            
            
            
            

            <!-- Submit button -->
            
        
            <select name="ddlstatus_employee" id="ddlstatus_employee">
            <option value="Employee">Employee</option>
            <option value="Admin">Admin</option>
            <option value="Owner">Owner</option>
            </select>
             
            
            <button type="submit" name="submit" value="Save" class="btn btn-primary btn-block mb-4">สมัครสมาชิก</button>
            <a class="btn btn-primary btn-block mb-4" href="login.php">มีบัญชีผู้ใช้แล้ว</a>
            </div>
            </div>
     </form>
        
        
    </div>
        
    </div>
  </div>



    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script
    

</body>
</html>