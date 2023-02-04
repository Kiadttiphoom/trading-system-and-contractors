<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
	</head>
	<body>
	<?php
	include("/xampp/htdocs/project/condb.php");
    ?>
        
    <?php

		$id_contractor = $_GET['id_contractor'];
		
        $sql = "DELETE FROM contractor WHERE id_contractor='$id_contractor' ";
      	$query = mysqli_query($objCon,$sql);
	
	
	?>
		<h3>ลบข้อมูลรายการสินค้าเรียบร้อย</h3>
	
		<a href="contractor.php"><button type="submit" class="btn btn-info">กลับสู่หน้าสินค้า</button></a>
		
	</body>
</html>