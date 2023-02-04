<form action="" method="get" class="form-horizontal">

        <h4>เลือกช่วงเวลาดูการขายน้ำยางรายวัน</h4>

    <div class="form-group form-inline">
        <div class="control-label">
            จาก
        </div>
        <div class="col-sm-2">
            <input type="date" name="ds" class="form-control">
        </div>
        <div class="control-label">
            ถึง
        </div>
        <div class="col-sm-2">
            <input type="date" name="de" class="form-control">

        </div>
        <div class="">
            <button type="submit" name="act" value="rangedate" class="btn btn-primary btn-sm">ค้นหา</button>
        </div>
    </div>
</form>
<!-- Select report buy day -->
<?php
            $query = "SELECT Sum(billsell_detail.Total) AS total, DATE_FORMAT(Billsell_date, '%d-%M-%Y') AS datesave
            FROM billsell
            INNER JOIN billsell_detail ON billsell.Billsell_no=billsell_detail.Billsell_no
            GROUP BY DATE_FORMAT(Billsell_date, '%d%')
            ORDER BY DATE_FORMAT(Billsell_date, '%Y-%m-%d') DESC
            ";
            $result = mysqli_query($objCon, $query);
            $resultchart = mysqli_query($objCon, $query);
            //for chart
            $datesave = array();
            $total = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $datesave[] = "\"".$rs['datesave']."\"";
            $total[] = "\"".$rs['total']."\"";
            }
            $datesave = implode(",", $datesave);
            $total = implode(",", $total);
            
?>
<h3 align="center">รายงานการขายน้ำยางแยกตามวัน</h3>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
<hr>
<!-- End Select report buy day -->
            <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                    <thead>
                        <tr class="table-primary">
                            <th width="20%">ว/ด/ป</th>
                            <th width="50%"></th>
                            <th width="10%"><center>รายได้</center></th>
                        </tr>
                    </thead>


                    <?php 

		   $sql = "SELECT Sum(billsell_detail.Total) AS total, DATE_FORMAT(Billsell_date, '%d-%M-%Y') AS datesave,
           billsell_detail.Dry_latex,billsell_detail.Fresh_latex, billsell_detail.Percent, billsell_detail.Pricedate
           FROM billsell
           INNER JOIN billsell_detail ON billsell.Billsell_no=billsell_detail.Billsell_no
           GROUP BY DATE_FORMAT(Billsell_date, '%d%')
           ORDER BY DATE_FORMAT(Billsell_date, '%Y-%m-%d') DESC";
            $result2 = mysqli_query($objCon, $sql);
					while($row2 = mysqli_fetch_array($result2)) { 

					?>
                    <tr>
                        <td><?php echo $row2['datesave'];?></td>
                        <td></td>
                        <td align="right"><?php echo number_format($row2['total'],2);?> บาท</td>
                    </tr>
                    <?php
                    @$amount_total += $row2['total'];
                    }
                    ?>
                    <tr class="table-danger">
                         <td align="center"></td>
                        <td align="center">รวม</td>
                        <td align="right"><b>
                        <?php echo number_format($amount_total,2);?> บาท</b></td></td>
                    </tr>
                </table>

            <p align="center">
                <canvas id="myChart" width="800px" height="300px"></canvas>
                <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                labels: [<?php echo $datesave;?>

                ],
                datasets: [{
                label: 'รายงานการขายน้ำยาง แยกตามวัน (บาท)',
                data: [<?php echo $total; ?>
                ],
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
                beginAtZero:true
                }
                }]
                }
                }
                });
                </script>
            </p>
<!--             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>sss</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ss</td>
                    </tr>
                </tbody>
            </table> -->
