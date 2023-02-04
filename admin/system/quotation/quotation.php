<?php
	include("/xampp/htdocs/project/condb/condb.php");
     
?>
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
 
      
      <div class="container_fulid">
<form name="form1" method="post" action="save_quotation.php" style="width: 30%; margin: 0 auto;" class="text-center mt-5">
           
                <br>
       
            <img src="....png" width="50%" height="70%" alt="alternative">
        <br>
            
        
            <h2>ร้านสิริสุวรรณกระจกอลูมิเนียม</h2>
            <p>7/1 ถ.พัฒนา ต.คูหาสวรรค์ อ.เมือง จ.พัทลุง 93000</p>
            <p>โทร.    เลขปะจำตัวผู้เสียภาษี</p>
            
            <div class="row">
                <div class="col-sm-8"><h3>ใบเสนอราคา</h3></div>
                <div class="col-sm-4"><input name="id_quotation" type="text" id="id_quotation" class="form-control" placeholder="เลขที่" required/>
                <input name="date_quotation	" type="date" id="date_quotation	" class="form-control" placeholder="วันเวลา" required/>
                <input name="time_quotation	" type="time" id="time_quotation" class="form-control" placeholder="วันเวลา" required/></div></div>
            
            <br>
           
            
           
                      
            <div class="row">
                <div class="col-sm-4">ลูกค้า</div>
                <select name="id_custumer" id="id_custumer">
             <?php
                    $sql = " SELECT * FROM custumer ORDER BY id_custumer ASC";
                    $result = $objCon->query($sql);
                    
                while($data = $result->fetch_assoc()):
            
            ?> 
            <option value="<?php echo $data['id_custumer']?>"><?php echo $data['name_custumer']?></option>
            <?php> ?>
                
               <?php endwhile ?> 
            </select>
            </div><br>
            
            
            <div class="row">
                <div class="col-sm-4">สินค้า</div>
                <select name="id_product" id="id_product">
             <?php
                    $sql = " SELECT * FROM product ORDER BY id_product ASC";
                    $result = $objCon->query($sql);
                    
                while($data = $result->fetch_assoc()):
            ?>        
            <option value="<?php echo $data['id_product']?>"><?php echo $data['name_product']?></option>
            <?php> ?>
                
               <?php endwhile ?> 
            </select>
            </div><br>
            
            <div class="row">
                <div class="col-sm-4">จำนวน</div>
                <div class="col-sm-8"><input name="sell_number" type="num" id="sell_number" class="form-control" placeholder="จำนวน" required/></div>
            </div><br>
                       
             <div class="row">
                <div class="col-sm-4">ราคา</div>
                <div class="col-sm-8"><input name="price_sell" type="num" id="price_sell" class="form-control" placeholder="ราคา" required/></div>
            </div><br>
            
            
        
            <div class="row">
                <div class="col-sm-4">ราคารวม</div>
                <div class="col-sm-8"><input name="total_sell" type="text" id="total_sell" class="form-control" placeholder="ราคารวม" required/></div>
            </div><br>
         
            
                <div class="row">
                <div class="col-sm-6"> <button type="submit" name="submit" value="Save" class="btn btn-primary btn-block mb-4">เพิ่มข้อมูล</button></div>
                <div class="col-sm-6"><a class="btn btn-primary btn-block mb-4" href="buy.php">ยกเลิก</a>
                </div>
            </div><br> 
            
            
     </form>
        </div>
  </body>
</html>