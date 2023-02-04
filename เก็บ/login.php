<?php
    session_start();
?>

<html>
    <link rel="icon" href="images/headlogo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/sb-admin-2.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
    <meta name="author" content="">
    <title>เข้าสู่ระบบ</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />
    
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    
<head>

</head>
      <style>

body {
    background-image:url("img/blackground.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
    
}
      </style>
 
<body >
    
   

    
    <div class="container" >
        
  <div class="row" >
    <div class="col-sm-12 " >
      <br> 
        <br>
        <br>
        <br >
        
        <form name="form1" action="check_login.php" method="post" style="width:30%; height:30%;margin: 0 auto;" class="text-center mt-5" >
        <div class="card-header shadow-lg mb-4" style="background-color:#f26b5f;">
            <div >
                <br>
            <div class="container">
                <img src="img/logo.png" width="50%" height="70%" alt="alternative">
                <br>
                <br><h3><font color="#fff">เข้าสู่ระบบ</font></h3>
                <h5><font color="#fff">ร้านสิริสุวรรณกระจกอลูมิเนียม</font></h5><br>
                
            <?php if (isset($_SESSION['err_login'])) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['err_login']; ?>
                </div>
            <?php endif; ?>
            
            <!-- Email input -->
            
                <input type="text" name="txtusername" id="exampleinputusername" class="form-control text-center" placeholder="รหัสผู้ใช้" required/>
                <label class="form-label" for="form1Example1"></label>
            

            <!-- Password input -->
            
                <input type="password" name="txtpassword" id="exampleinputpassword" class="form-control text-center" placeholder="รหัสผ่าน" required/>
                <label class="form-label" for="form1Example2"></label>
            
                    <br>
            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-success btn-block btn-login" onclick="error_login">เข้าสู่ระบบ</button>
            <br>
            </div>
            </div> 
            
        </form>
            </div>
       
    </div>
  </div>
</div>
    

    
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
    
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
    
    
    

    
</body>
</html>
<?php
    if (isset($_SESSION['err_login'])) {
        unset($_SESSION['err_login']);
    }
?>