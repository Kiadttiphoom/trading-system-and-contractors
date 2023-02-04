<html>
<head>
<title>เพิ่มข้อมูล</title>
</head>
<body>
<?php

$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "project";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

if(isset($_POST['save']))
{	 
	 $id_unit = $_POST['id_unit'];
	 $name_unit = $_POST['name_unit'];


	 $sql = "INSERT INTO unit (id_unit, name_unit)
	 VALUES ('$id_unit','$name_unit')";
	 if (mysqli_query($objCon, $sql)) {
		echo "<script>alert('เพิ่มข้อมูลหน่วยเรียบร้อย');</script>";
        echo "<script>window.location.href='unit.php'</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($objCon);
	 }
	 mysqli_close($objCon);
}

?>
</body>
</html>