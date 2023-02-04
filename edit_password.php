<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	
	include("/xampp/htdocs/project/condb/condb.php");

	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html> 
<head>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->
    
    
    <!-- Webpage Title -->
    <title>แก้ไขรหัสผ่าน</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    
	
	<!-- Favicon  -->
    <link rel="icon" href="images/headlogo.png">
</head>
<style>
body {
  background-image: url('images/backgroundlogin.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
    <!-- Navigation -->
   <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="images/SANGYODlogo.png"  alt="alternative"></a> 

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Elma</a> -->
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index_login.php#header"><h5>หน้าหลัก</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_login.php#travel"><h5>สถานที่ท่องเที่ยว</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_login.php#product"><h5>ผลิตภัณฑ์</h5></a>
                    </li>
                    <li class="nav-item">
                            <a  class="nav-link " data-bs-toggle="dropdown"><h5>สวัสดี, <?php echo $objResult["Name"];?></h5></a>
                
                    </li>
                    </ul>
                </div>
            </div>
        </nav> <!-- end of navbar -->
    <!-- end of navigation -->
<body>
<br><br><br><br>
    <div class="container">
        <form name="form1" method="post" action="save_password.php" style="width: 30%; margin: 0 auto;" class="text-center mt-5"> 
            <div class="card"> 
        <div class="container">
            <br>
            <img src="images/rice.png" width="50%" height="70%" alt="alternative">
        <br>
        <h2>แก้ไขรหัสผ่าน</h2><br>
    
            <!-- 2 column grid layout with text inputs for the first and last names -->
            
            <label class="form-label" for="form3Example1"><h5><font color=#000000>ชื่อผู้ใช้</font></h5></label>
            <h5><font color=#000000><?php echo $objResult["Username"];?></font></h5>
                        
        
              <br><label class="form-label" for="form3Example3"><h5><font color=#000000>รหัสผ่านใหม่</font></h5></label>
                <input name="txtPassword" type="password" id="txtPassword" value="<?php echo $objResult["Password"];?>">
                
            <br><label class="form-label" for="form3Example3"><h5><font color=#000000>ยืนยันรหัสผ่านใหม่</font></h5></label>
                <input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $objResult["Password"];?>">
                
           
            <!-- Submit button -->
            <br><br><button type="submit" name="submit" value="Save" class="btn btn-primary btn-block mb-4">แก้ไข</button>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a class="btn btn-primary btn-block mb-4" href="profile.php">กลับ</a>
            
        </div>  
        </div>
        </form>
        
    
    </div>
    
    	
    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    
    
</body>
</html>
<?php
	mysqli_close($objCon);
?>