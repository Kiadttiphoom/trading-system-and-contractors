<?php
include('/xampp/htdocs/project/condb.php');
$sql = "SELECT * FROM districts WHERE amphure_id={$_GET['amphure_id']}";
$query = mysqli_query($objCon, $sql);

$json = array();
while($result = mysqli_fetch_assoc($query)) {    
    array_push($json, $result);
}
echo json_encode($json);