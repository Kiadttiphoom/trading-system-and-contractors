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

    $Billbuy_no = $_GET['Billbuy_no'];
    //echo $Billbuy_no;
    $date = date("Y/m/d");
    date_default_timezone_set("Asia/Bangkok"); 
    $today = date("H:i:s");
    $sql = "SELECT billbuy.Billbuy_no, customer.Name, billbuy_detail.Total,billbuy_detail.Dry_latex, 
    billbuy.Billbuy_Date, billbuy.Billbuy_Time, billbuy_detail.Fresh_latex, billbuy_detail.Percent, 
    billbuy_detail.Pricedate, employee.Ename
    FROM billbuy 
    INNER JOIN customer ON billbuy.Cus_id=customer.Cus_id 
    INNER JOIN billbuy_detail ON billbuy.Billbuy_no=billbuy_detail.Billbuy_no
    INNER JOIN employee ON billbuy_detail.UserID=employee.UserID
    WHERE billbuy.Billbuy_no=('$Billbuy_no')";
    $result = mysqli_query($objCon,$sql);        
    while($row = $result->fetch_assoc()):
    $pdf=new FPDF("P","mm","A4");
    $pdf->AddPage();
            $pdf->AddFont('THSarabunNewBold','','THSarabunNewBold.php');
            $pdf->SetFont('THSarabunNewBold','',16);
            $pdf->SetLeftmargin(15);
            $pdf->Cell(0,10,iconv('utf-8','cp874','กลุ่มรับซื้อน้ำยางควนดินแดง'),0,1,'C');
            $pdf->Cell(0,10,iconv('utf-8','cp874','วันที่ : '.$date,),0,1,'L');
            $pdf->Cell(0,10,iconv('utf-8','cp874','เวลา : '.$today,),0,1,'L');

            //Display INVOICE text
            $pdf->SetY(15);
            $pdf->SetX(-40);
            $pdf->SetFont('THSarabunNewBold','',16);
            $pdf->Cell(50,10,iconv('utf-8','cp874','บิลใบเสร็จ'),0,1,'C');
            
            //Display Horizontal line
            $pdf->Line(0,48,210,48);

            //Billing Details
            $pdf->SetY(55);
            $pdf->SetX(10);

            $pdf->Cell(50,10,iconv('utf-8','cp874','เลขที่บิลใบเสร็จ : '.$row['Billbuy_no'],),0,1);


            
            //Display Invoice no
            $pdf->SetY(55);
            $pdf->SetX(-60);

            $pdf->SetY(75);
            $pdf->SetX(10);
            $pdf->Cell(45,9,iconv('utf-8','cp874','ชื่อลูกค้า',),1,0,'C');
            $pdf->Cell(40,9,iconv('utf-8','cp874','วัน/เวลารับซื้อ',),1,0,'C');
            $pdf->Cell(105,9,iconv('utf-8','cp874','รายการที่รับซื้อ',),1,0,'C');

            
            $pdf->SetY(84);
            $pdf->SetX(10);

            $pdf->Cell(85,9,iconv('utf-8','cp874','',),0,0,'C');
            $pdf->Cell(26,9,iconv('utf-8','cp874','น้ำยางสด',),1,0,'C');
            $pdf->Cell(26,9,iconv('utf-8','cp874','%ยางแห้ง',),1,0,'C');
            $pdf->Cell(26,9,iconv('utf-8','cp874','ยางแห้ง',),1,0,'C');
            $pdf->Cell(27,9,iconv('utf-8','cp874','ราคา/หน่วย',),1,0,'C');

            $pdf->SetY(84);
            $pdf->SetX(10);
            $pdf->Cell(45,90,iconv('utf-8','cp874',''.$row['Name'],),1,0,'C');
            $pdf->Cell(40,90,iconv('utf-8','cp874',''.$row['Billbuy_Date']),1,0,'C');
            $pdf->Cell(26,90,iconv('utf-8','cp874',''.$row['Fresh_latex']),1,0,'C');
            $pdf->Cell(26,90,iconv('utf-8','cp874',''.$row['Percent']),1,0,'C');
            $pdf->Cell(26,90,iconv('utf-8','cp874',''.$row['Dry_latex']),1,0,'C');
            $pdf->Cell(27,90,iconv('utf-8','cp874',''.$row['Pricedate']),1,0,'C');


            $pdf->SetY(174);
            $pdf->SetX(10);


            $pdf->Cell(150,9,iconv('utf-8','cp874','รวมเงิน',),1,0,'R');
            $pdf->Cell(40,9,iconv('utf-8','cp874',''.$row['Total'].' บาท'),1,0,'R');
            


        endwhile;


    $pdf -> Output();

?>