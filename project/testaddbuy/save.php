<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "test";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	for ($i = 1; $i<= (int)$_POST["hdnCount"]; $i++){
		if(isset($_POST["id_product$i"]))
		{
			if($_POST["id_product$i"] != "" && 
					$_POST["buy_number$i"] != "" &&
					$_POST["price_buy$i"] != "" &&
					$_POST["total_buy$i"] != "" )
			{
				$sql = "INSERT INTO customer (id_product, buy_number, price_buy, total_buy) 
					VALUES ('".$_POST["id_product$i"]."','".$_POST["buy_number$i"]."','".$_POST["price_buy$i"]."'
					,'".$_POST["total_buy$i"]."')";
				$query = mysqli_query($conn,$sql);
			}
		}
	}

	echo "Record add successfully";
	mysqli_close($conn);
?>
</body>
</html>