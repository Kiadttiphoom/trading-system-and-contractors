<?php
    include("/xampp/htdocs/project/config/condb.php");
    require('fpdf/fpdf.php');

/*     class PDF extends FPDF{
        function Header(){
            $this -> AddFont('THSarabunNewBold','','THSarabunNewBold.php');
            $this -> SetFont('THSarabunNewBold','',16);
            $this -> SetLeftmargin(15);
            $this -> Cell(0,10,iconv('utf-8','cp874','กลุ่มรับซื้อน้ำยางควนดินแดง'),0,1,'C');
            $this -> Cell(0,10,iconv('utf-8','cp874','เลขที่บิลใบเสร็จ : '.$Billbuy_no),0,1,'L');
            $this -> Cell(0,10,iconv('utf-8','cp874','วันที่ : '.$row['Billbuy_date'],),0,1,'L');
            $this -> Cell(0,10,iconv('utf-8','cp874','เวลา : '.$row['Billbuy_time'],),0,1,'L');
            $this -> Cell(0,10,iconv('utf-8','cp874','ใบเสร็จรับซื้อน้ำยาง',),0,1,'C');
        }
    }
    $pdf=new FPDF('p','mm','a4');
    $pdf->AddPage();
    $pdf->AddFont('THSarabunNewBold','','THSarabunNewBold.php');
    $pdf->SetFont('THSarabunNewBold','',16);
    $pdf->Cell(20,10,iconv('utf-8','cp874','วันที่รับซื้อ',),1,0,'C');
    $pdf->Cell(40,10,iconv('utf-8','cp874','ชื่อลูกค้า',),1,0,'C');
    $pdf->Cell(30,10,iconv('utf-8','cp874','น้ำยางสด',),1,0,'C');
    $pdf->Cell(30,10,iconv('utf-8','cp874','%น้ำยาง',),1,0,'C');
    $pdf->Cell(30,10,iconv('utf-8','cp874','ราคาต่อหน่วย',),1,0,'C');
    $pdf->Cell(30,10,iconv('utf-8','cp874','คิดเป็นเงิน',),1,0,'C');

    $pdf -> Output(); */

    $ds = $_GET['ds'];
    $de = $_GET['de'];
    //echo $Billbuy_no;
    $date = date("Y/m/d");
    date_default_timezone_set("Asia/Bangkok"); 
    $today = date("H:i:s");
    $sql = "SELECT receipt_buy.id_receipt_buy, company.name_company, buy.total_buy,buy.buy_number, product.id_product , product.name_product,buy.id_product,
    receipt_buy.date_receipt_buy, receipt_buy.time_receipt_buy, buy.price_buy
   FROM receipt_buy 
   INNER JOIN company ON receipt_buy.id_company=company.id_company
   INNER JOIN buy ON receipt_buy.id_receipt_buy=buy.id_receipt_buy
   INNER JOIN product ON buy.id_product=product.id_product
   AND date_receipt_buy BETWEEN '$ds'
   AND '$de'
   ORDER BY receipt_buy.id_receipt_buy DESC;";
    $result = mysqli_query($objCon,$sql);        
    while($row = $result->fetch_assoc()):
    $pdf=new FPDF();
    $pdf->AddPage();
            $pdf->AddFont('THSarabunNewBold','','THSarabunNewBold.php');
            $pdf->SetFont('THSarabunNewBold','',16);
            $pdf->SetLeftmargin(15);
            $pdf->Cell(0,10,iconv('utf-8','cp874','กลุ่มรับซื้อน้ำยางควนดินแดง'),0,1,'C');
            $pdf->Cell(0,10,iconv('utf-8','cp874','วันที่ : '.$date,),0,1,'L');
            $pdf->Cell(0,10,iconv('utf-8','cp874','เวลา : '.$today,),0,1,'L');
            $pdf->Cell(0,10,iconv('utf-8','cp874','ใบเสร็จรับซื้อน้ำยาง',),0,1,'C');
            $pdf->Ln(5);
            /* $pdf->Cell(50,10,iconv('utf-8','cp874','เลขที่บิลใบเสร็จ : '.$Billbuy_no),0,1,''); */
            $pdf->Cell(30,10,iconv('utf-8','cp874','เลขที่บิลใบเสร็จ',),1,0,'C');
            $pdf->Cell(25,10,iconv('utf-8','cp874','วัน/เวลารับซื้อ'),1,0,'C');
            $pdf->Cell(40,10,iconv('utf-8','cp874','ชื่อลูกค้า',),1,0,'C');
            $pdf->Cell(90,10,iconv('utf-8','cp874','รายการที่รับซื้อ',),1,0,'C');

/*             $pdf->Cell(30,100,iconv('utf-8','cp874',''.$row['Billbuy_no'],),1,0,'C');
            $pdf->Cell(25,100,iconv('utf-8','cp874',''.$row['Billbuy_Date']),1,0,'C');
            $pdf->Cell(40,100,iconv('utf-8','cp874',''.$row['Name']),1,0,'C'); */

            $pdf->Ln(10);
            $pdf->Cell(95,10,iconv('utf-8','cp874','',),0,0,'C');
            $pdf->Cell(21,10,iconv('utf-8','cp874','น้ำยางสด',),1,0,'C');
            $pdf->Cell(22,10,iconv('utf-8','cp874','%ยางแห้ง',),1,0,'C');
            $pdf->Cell(23,10,iconv('utf-8','cp874','ยางแห้ง',),1,0,'C');
            $pdf->Cell(24,10,iconv('utf-8','cp874','ราคา/หน่วย',),1,0,'C');


            $pdf->Ln(0);
            $pdf->Cell(30,100,iconv('utf-8','cp874',''.$row['Billbuy_no'],),1,0,'C');
            $pdf->Cell(25,100,iconv('utf-8','cp874',''.$row['Billbuy_Date']),1,0,'C');
            $pdf->Cell(40,100,iconv('utf-8','cp874',''.$row['Name']),1,0,'C');
            $pdf->Cell(21,100,iconv('utf-8','cp874',''.$row['Fresh_latex']),1,0,'C');
            $pdf->Cell(22,100,iconv('utf-8','cp874',''.$row['Percent']),1,0,'C');
            $pdf->Cell(23,100,iconv('utf-8','cp874',''.$row['Dry_latex']),1,0,'C');
            $pdf->Cell(24,100,iconv('utf-8','cp874',''.$row['Pricedate']),1,0,'C');

            $pdf->Ln(100);
            $pdf->Cell(95,10,iconv('utf-8','cp874','รวมเงิน',),0,0,'C');
            $pdf->Cell(90,10,iconv('utf-8','cp874',''.$row['Total'].' บาท'),1,0,'C');
/*             $pdf->Cell(30,10,iconv('utf-8','cp874','%น้ำยาง',),1,0,'C');
            $pdf->Cell(30,10,iconv('utf-8','cp874','ราคาต่อหน่วย',),1,0,'C');
            $pdf->Cell(30,10,iconv('utf-8','cp874','คิดเป็นเงิน',),1,0,'C');
 */
        endwhile;


    $pdf -> Output();

?>