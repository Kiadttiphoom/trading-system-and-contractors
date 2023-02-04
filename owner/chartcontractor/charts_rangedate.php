<div class="modal fade" id="myModal" role="dialog" id="userModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">รายงานการรับเหมา</h5>
               
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <?php include("/xampp/htdocs/project/condb.php");?>
                        <thead>
                            <tr class="bg-secondary ">
                                <th>
                                    <center>
                                        <font color=#FFFFFF size="2">รหัสบิล</font>
                                    </center>
                                </th>
                                <th width="17%">
                                    <center>
                                        <font color=#FFFFFF size="2">วัน/เวลา</font>
                                    </center>
                                </th>
                                <th width="15%">
                                    <center>
                                        <font color=#FFFFFF size="2">ชื่อลูกค้า</font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size="2">สินค้า</font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size="2">จำนวน</font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font color=#FFFFFF size="2">ราคารวม</font>
                                    </center>
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                        $ds = $_GET['ds'];
                                        $de = $_GET['de'];
                            $date = date("Y/m/d");
                            $sql = " SELECT receipt_contractor.id_receipt_contractor, customer.name_customer, contractor.total_contractor,contractor.contractor_number, type_work.id_type_work , type_work.name_type_work, contractor.id_type_work,
                            receipt_contractor.date_receipt_contractor, receipt_contractor.time_receipt_contractor
                           FROM receipt_contractor 
                           INNER JOIN customer ON receipt_contractor.id_customer=customer.id_customer
                           INNER JOIN contractor ON receipt_contractor.id_receipt_contractor=contractor.id_receipt_contractor
                           INNER JOIN type_work ON contractor.id_type_work=type_work.id_type_work
                           AND date_receipt_contractor BETWEEN '$ds'
                           AND '$de'
                           ORDER BY receipt_contractor.id_receipt_contractor DESC;";
                           $result = $objCon->query($sql);?>
                            <?php while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td name="a[]">
                                    <center><font size="2" color="#000"><b><?php echo $row['id_receipt_contractor']; ?></b></font></center>
                                </td>
                                <td>
                                    <center><font size="2" color="#000"><b><?php echo $row['date_receipt_contractor']."  ".$row['time_receipt_contractor']; ?></b></font></center>
                                </td>
                                <td>
                                    <center><font size="2" color="#000"><b><?php echo $row['name_customer']; ?></b></font></center>
                                </td>
                                <td>
                                    <center><font size="2" color="#000"><b><?php echo $row['name_type_work']; ?></b></font></center>
                                </td>
                                <td>
                                    <center><font size="2" color="#000"><b><?php echo $row['contractor_number']; ?></b></font></center>
                                </td>
                                <td>
                                    <center><font size="2" color="#000"><b><?php echo $row['total_contractor']; ?></b></font></center>
                                </td>
                               
                            </tr>
                            
                            <?php @$amount_total += $row['total_contractor']; ?>
                            <?php endwhile ?>
                            <tr>
                                
                         <td align="center"></td>
                         <td align="center"></td>
                         <td align="center"></td>
                         <td align="center"></td>
                         <td align="center"><font size="2" color="#000"><b>รวม</font></b></td>
                        <td align="right" class="text-center"><font size="2" color="#000"><b>
                        <?php echo number_format(@$amount_total,2);?> บาท</font></b></td></td>
                    </tr>
                </div>
            </div>
        </div>
    </div>
    <!-- end Delete Button -->
    </center>
    </td>
    </tr>


    </tbody>
    </table>
    </table>
</div>

</div>
<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
</div>
</div>
</div>

<center><form action="" method="get" class="form-horizontal">

    <h5>เลือกช่วงเวลาการรับเหมา</h5>

    <div class="form-group form-inline">
        <div class="control-label">
            จาก
        </div>
        <div class="col">
            <input type="date" name="ds" class="form-control">
        </div>
        <div class="control-label">
            ถึง
        </div>
        <div class="col">
            <input type="date" name="de" class="form-control">

        </div>
        <div class="">
            <button type="submit" name="act" value="rangedate" class="btn btn-primary btn-sm">ค้นหา</button>
        </div>
    </div>

<!-- Select report contractor day -->
<?php


            $query = "SELECT Sum(contractor.total_contractor) AS total_contractor, DATE_FORMAT(date_receipt_contractor, '%d-%M-%Y') AS datesave
            FROM receipt_contractor
            INNER JOIN contractor ON receipt_contractor.id_receipt_contractor=contractor.id_receipt_contractor

            AND date_receipt_contractor BETWEEN '$ds 00:00:00.000000'
            AND '$de 23:59:59.000000'

            GROUP BY DATE_FORMAT(date_receipt_contractor, '%Y-%m-%d')
            ORDER BY DATE_FORMAT(date_receipt_contractor, '%Y-%m-%d') DESC
            ";
            $result = mysqli_query($objCon, $query);
            $resultchart = mysqli_query($objCon, $query);
            //for chart
            $datesave = array();
            $total = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $datesave[] = "\"".$rs['datesave']."\"";
            $total[] = "\"".$rs['total_contractor']."\"";
            }
            $datesave = implode(",", $datesave);
            $total = implode(",", $total);
            
?>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
<h5 align="center">รายงานเรียกดูตามวันที่</h5>
<h5>
    วันที่เริ่มต้น : <font color="blue"><?php echo date('d/m/y', strtotime($ds)); ?></font>
    ถึงวันที่ : <font color="blue"><?php echo date('d/m/y', strtotime($de)); ?></font>
    <button type="button" class="btn btn-danger justify-content-flex-end" align="center">
                <a href="print/report_bill_contractor_day.php?ds=<?php echo $ds; ?>&de=<?php echo $de; ?>" name="report" target="_Blank" class="text-white"><i class='fas fa-file-pdf'></i> </a></button>
                <button type="button" class="btn btn-success justify-content-flex-end" align="center">
                <a href="print/report_bill_contractor_day.php?ds=<?php echo $ds; ?>&de=<?php echo $de; ?>" name="report" target="_Blank" class="text-white"><i class='fas fa-file-excel'></i> </a></button>
</h5>
</form></center>
<hr>
<?php $sql = "SELECT Count(receipt_contractor.id_receipt_contractor) AS Countbill_contractor,Sum(contractor.contractor_number) AS contractor_number,
                                Sum(contractor.total_contractor) AS total_contractor
                                FROM receipt_contractor 
                                INNER JOIN contractor ON receipt_contractor.id_receipt_contractor=contractor.id_receipt_contractor
                                AND date_receipt_contractor BETWEEN '$ds 00:00:00.000000'
                                AND '$de 23:59:59.000000'";
                                $result = $objCon->query($sql);?>
                                <?php while($row = $result->fetch_assoc()): ?>

                                    <div class="col-xl-3 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        รายการรับเหมา</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                        <?php echo @$row['Countbill_contractor']; ?> รายการ
                    </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
                               

                                <!-- Show Fresh latex -->
                                <div class="col-xl-3 col-md-6 mb-4 btn" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        จำนวนเงินที่ที่ได้รับ</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php echo @$row['total_contractor']; ?> บาท

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                
                                <?php endwhile ?>
<!-- End Select report sell day -->
<div class="row">

<!-- Area Chart -->
<div class="col-xl-12 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h5 class="m-0 font-weight-bold "><font color="#000">ยอดการรับเหมา</font></h5>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-area">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <canvas id="contractor" width="800px" height="330px"></canvas>
                <script>
                var ctx = document.getElementById("contractor").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?php echo $datesave;?>

                        ],
                        datasets: [{
                            label: 'จำนวนเงินที่ได้รับ (บาท)',
                            data: [<?php echo $total; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
                </script>
            </div>
        </div>
    </div>
</div>




</div>