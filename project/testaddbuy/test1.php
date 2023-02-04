<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>devbanban.com</title>
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

            <script type="text/javascript">
            function sum() {
                  var priceTotal = 2000; 
                  var grandTotal = document.getElementById('grandTotal').value;

                              if(document.getElementById('ems1').checked){
                                    var ems1 = document.getElementById('ems1').value;
                                    var result = parseInt(priceTotal)+parseInt(ems1);
                                    document.getElementById('grandTotal').value = result;
                              }

                        } //close func
            </script>
      </head>
      <body>
            <div class="container">
                  <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-9">
                              <div class="alert alert-primary" role="alert">
                                    ตัวอย่างฟอร์ม คิดค่าส่งสินค้า ด้วย  javascript
                              </div>
                              <h4>รายการสินค้า</h4>
                              <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                          <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">product name</th>
                                                <th scope="col">qty</th>
                                                <th scope="col">price</th>
                                                <th scope="col">total</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <tr>
                                                <td>1</td>
                                                <td>my product</td>
                                                <td>1</td>
                                                <td class="text-right">500.00</td>
                                                <td class="text-right">500.00</td>
                                          </tr>
                                          <tr>
                                                <td>2</td>
                                                <td>my product</td>
                                                <td>1</td>
                                                <td class="text-right">500.00</td>
                                                <td class="text-right">500.00</td>
                                          </tr>
                                          <tr>
                                                <td>3</td>
                                                <td>my product</td>
                                                <td>1</td>
                                                <td class="text-right">500.00</td>
                                                <td class="text-right">500.00</td>
                                          </tr>
                                          <tr>
                                                <td>4</td>
                                                <td>my product</td>
                                                <td>1</td>
                                                <td class="text-right">500.00</td>
                                                <td class="text-right">500.00</td>
                                          </tr>
                                          <tr>
                                                <td colspan="4" class="text-center">รวม</td>
                                                <td class="text-right">2,000.00</td>
                                          </tr>
                                          
                                    </tbody>
                              </table>
                              <form method="post" name="frmbooking" action="https://devbanban.com/?cat=250" class="form-horizontal">
                                    <div class="form-group">
                                          <div class="col-sm-2">
                                                เลือกวิธีส่งสินค้า *เปิดดูคลิปด้วยครับ มีสอนทำเพิ่มด้วย
                                          </div>
                                          <div class="col-sm-4">
                                                <input type="radio" name="send_type" id="ems1"  onchange="sum();"  value="50" required> ส่งแบบธรรมดา 50 บาท <br>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                          <div class="col-sm-2">
                                                รวม (บาท)
                                          </div>
                                          <div class="col-sm-3">
                                                <input type="text" id="grandTotal" name="grandTotal" readonly="readonly" class="form-control"  required />
                                          </div>
                                    </div>
                                    <div class="form-group">
                                          <div class="col-sm-2">
                                          </div>
                                          <div class="col-sm-3">
                                                <button type="submit" class="btn btn-primary"> Confirm Order </button>
                                          </div>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </body>
</html>