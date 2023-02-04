<?php
    include("/xampp/htdocs/project/condb.php");
    require('fpdf/fpdf.php');

/*     class PDF extends FPDF{
        function Header(){
            $this -> AddFont('THSarabunNewBold','','THSarabunNewBold.php');
            $this -> SetFont('THSarabunNewBold','',16);
            $this -> SetLeftmargin(15);
            $this -> Cell(0,10,iconv('utf-8','cp874','กลุ่มรับซื้อน้ำยางควนดินแดง'),0,1,'C');
            $this -> Cell(0,10,iconv('utf-8','cp874','เลขที่บิลใบเสร็จ : '.$Billcontractor_no),0,1,'L');
            $this -> Cell(0,10,iconv('utf-8','cp874','วันที่ : '.$row['Billcontractor_date'],),0,1,'L');
            $this -> Cell(0,10,iconv('utf-8','cp874','เวลา : '.$row['Billcontractor_time'],),0,1,'L');
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
    //echo $Billcontractor_no;
    $date = date("Y/m/d");
    date_default_timezone_set("Asia/Bangkok"); 
    $today = date("H:i:s");
    $sql = "SELECT receipt_contractor.id_receipt_contractor, customer.name_customer, contractor.total_contractor,contractor.contractor_number, type_work.id_type_work , type_work.name_type_work,contractor.id_type_work,
    receipt_contractor.date_receipt_contractor, receipt_contractor.time_receipt_contractor, contractor.hight_contractor, contractor.width_contractor
   FROM receipt_contractor 
   INNER JOIN customer ON receipt_contractor.id_customer=customer.id_customer
   INNER JOIN contractor ON receipt_contractor.id_receipt_contractor=contractor.id_receipt_contractor
   INNER JOIN type_work ON contractor.id_type_work=type_work.id_type_work
   AND date_receipt_contractor BETWEEN '$ds'
   AND '$de'
   ORDER BY receipt_contractor.id_receipt_contractor DESC;";


$result2 = mysqli_query($objCon,$sql);  
$data2 = mysqli_fetch_assoc($result2);

    $result = mysqli_query($objCon,$sql);        
    while($row = $result->fetch_assoc()):
        $pdf=new FPDF("L","mm","A4");
    $pdf->AddPage();
            $pdf->AddFont('THSarabunNewBold','','THSarabunNewBold.php');
            $pdf->SetFont('THSarabunNewBold','',16);
            
            $pdf->SetY(18);
            $pdf->SetX(0);
            $pdf->SetFont('THSarabunNewBold','',18);
            $pdf->Cell(0,10,iconv('utf-8','cp874','ร้านสิริสุวรรณกระจกอลูมิเนียม'),0,1,'C');
            $pdf->SetY(5);
            $pdf->SetX(-40);
            $pdf->SetFont('THSarabunNewBold','',16);
            $pdf->Cell(0,3,iconv('utf-8','cp874','วันที่ : '.$date,),0,1,'L');
            $pdf->SetY(9);
            $pdf->SetX(-35);
            $pdf->SetFont('THSarabunNewBold','',16);
            $pdf->Cell(0,5,iconv('utf-8','cp874','เวลา : '.$today,),0,1,'L');

            $pdf->SetY(5);
            $pdf->SetX(10);
            $pdf->Image('/xampp/htdocs/project/owner/fpdf/logo.png',30,5,0,30);


            $pdf->SetY(40);
            $pdf->SetX(10);
            $pdf->SetFont('THSarabunNewBold','',16);
            $pdf->Cell(0,5,iconv('utf-8','cp874','ระหว่างวันที่ : '.$ds.' - '.$de,),0,1,'L');

            $pdf->SetY(9);
            $pdf->SetX(0);
            $pdf->SetFont('THSarabunNewBold','',20);
            $pdf->Cell(0,10,iconv('utf-8','cp874','รายงานการรับเหมา',),0,1,'C');
            $pdf->Ln(30);
            /* $pdf->Cell(50,10,iconv('utf-8','cp874','เลขที่บิลใบเสร็จ : '.$Billcontractor_no),0,1,''); */
            $pdf->SetFont('THSarabunNewBold','',16);
            $pdf->Cell(20,10,iconv('utf-8','cp874','เลขที่บิล',),1,0,'C');
            $pdf->Cell(30,10,iconv('utf-8','cp874','วัน/เวลาซื้อ'),1,0,'C');
            $pdf->Cell(60,10,iconv('utf-8','cp874','ชื่อลูกค้า',),1,0,'C');
            $pdf->Cell(70,10,iconv('utf-8','cp874','รายการสินค้า',),1,0,'C');
            $pdf->Cell(20,10,iconv('utf-8','cp874','สูง',),1,0,'C');
            $pdf->Cell(20,10,iconv('utf-8','cp874','กว้าง',),1,0,'C');
            $pdf->Cell(20,10,iconv('utf-8','cp874','จำนวน',),1,0,'C');
            $pdf->Cell(35,10,iconv('utf-8','cp874','ราคา',),1,1,'C');

/*             $pdf->Cell(30,100,iconv('utf-8','cp874',''.$row['Billcontractor_no'],),1,0,'C');
            $pdf->Cell(25,100,iconv('utf-8','cp874',''.$row['Billcontractor_Date']),1,0,'C');
            $pdf->Cell(40,100,iconv('utf-8','cp874',''.$row['Name']),1,0,'C'); */


        endwhile;         
        do{   
            $pdf->SetFont('THSarabunNewBold','',14);
            $pdf->Cell(20,10,iconv('utf-8','cp874',''.$data2['id_receipt_contractor'],),1,0,'C');
            $pdf->Cell(30,10,iconv('utf-8','cp874',''.$data2['date_receipt_contractor']),1,0,'C');
            $pdf->Cell(60,10,iconv('utf-8','cp874',''.$data2['name_customer']),1,0,'C');
            $pdf->Cell(70,10,iconv('utf-8','cp874',''.$data2['name_type_work']),1,0,'C');
            $pdf->Cell(20,10,iconv('utf-8','cp874',''.$data2['hight_contractor'].' เมตร',),1,0,'C');
            $pdf->Cell(20,10,iconv('utf-8','cp874',''.$data2['width_contractor'].' เมตร',),1,0,'C');
            $pdf->Cell(20,10,iconv('utf-8','cp874',''.$data2['contractor_number']),1,0,'C');
            $pdf->Cell(35,10,iconv('utf-8','cp874',''.$data2['total_contractor']),1,1,'C');
        }while($data2 = mysqli_fetch_assoc($result2));
        
        $sql2 = "SELECT receipt_contractor.id_receipt_contractor, customer.name_customer, contractor.total_contractor,contractor.contractor_number, type_work.id_type_work , type_work.name_type_work,contractor.id_type_work,
        receipt_contractor.date_receipt_contractor, receipt_contractor.time_receipt_contractor, contractor.hight_contractor, contractor.width_contractor
       FROM receipt_contractor 
       INNER JOIN customer ON receipt_contractor.id_customer=customer.id_customer
       INNER JOIN contractor ON receipt_contractor.id_receipt_contractor=contractor.id_receipt_contractor
       INNER JOIN type_work ON contractor.id_type_work=type_work.id_type_work
       AND date_receipt_contractor BETWEEN '$ds'
       AND '$de'
       ORDER BY receipt_contractor.id_receipt_contractor DESC;";
       $result3 = $objCon->query($sql2);
       
       while($data3 = $result3->fetch_assoc()):
            @$amount_total+= $data3['total_contractor'];
            
        endwhile; 
        $pdf->Ln(0);
            $pdf->Cell(240,10,iconv('utf-8','cp874','รวมเงิน',),1,0,'R');
        $pdf->Cell(35,10,iconv('utf-8','cp874',''.number_format(@$amount_total,2).' บาท'),1,1,'C');
    $pdf -> Output();

?>