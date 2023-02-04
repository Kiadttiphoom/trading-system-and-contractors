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
 
<a href="insert.php"><button type='button' class='btn btn-info'>เพิ่มสินค้า</button></a>
 <a href="stock.php"><button type='button' class='btn btn-info'>stock</button></a>
 <div class="container-fluid">
	<?php
	include("/xampp/htdocs/project/condb/condb.php");
     
    ?>
     
	 <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr class="bg-warning">
                    <th><center>รหัสสินค้า</center></th>
                    <th>ชื่อสินค้า</th>
                    <th>ประเภทสินค้า</th>
                    <th>ราคาซื้อ</th>
                    <th>ราคาขาย</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $sql = " SELECT * FROM product ";
                    $result = $objCon->query($sql);
            ?>    
                   
            
                     <?php while($row = $result->fetch_assoc()): ?>
                      <tr>
                        <td><?php echo $row['id_product']; ?></td>
                        <td><?php echo $row['name_product']; ?></td>
                        <td><?php echo $row['id_type_product']; ?></td>
                        <td><?php echo $row['price_buy']; ?></td>
                        <td><?php echo $row['price_sell']; ?></td>
                        <td><a href='edit.php?id_product=<?php echo $row['id_product']; ?>&name_product=<?php echo $row['name_product']; ?>&id_type_product=<?php echo $row['id_type_product']; ?>&price_buy=<?php echo $row['price_buy']; ?>&price_sell=<?php echo $row['price_sell']; ?>'><button type='button' class='btn btn-success'>แก้ไข</button></a></td>
                        <td><a href='delete.php?id_product=<?php echo $row['id_product']; ?>'><button type='button' class='btn btn-danger'>ลบ</button></a></td>
                       </tr>
                     <?php endwhile ?>
                    </tbody>

            
        </table>

 </div>
  </body>
</html>