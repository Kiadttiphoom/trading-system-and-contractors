<?php
    include("/xampp/htdocs/project/condb.php");
    require('fpdf/fpdf.php');

/*     class PDF extends FPDF{
        function Header(){
            $this -> AddFont('THSarabunNewBold','','THSarabunNewBold.php');
            $this -> SetFont('THSarabunNewBold','',16);
            $this -> SetLeftmargin(15);
            $this -> Cell(0,10,iconv('utf-8','cp874','กลุ่มรับซื้อน้ำยางควนดินแดง'),0,1,'C');
            $this -> Cell(0,10,iconv('utf-8','cp874','เลขที่บิลใบเสร็จ : '.$Billsell_no),0,1,'L');
            $this -> Cell(0,10,iconv('utf-8','cp874','วันที่ : '.$row['Billsell_date'],),0,1,'L');
            $this -> Cell(0,10,iconv('utf-8','cp874','เวลา : '.$row['Billsell_time'],),0,1,'L');
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

    $id_receipt_sell = $_GET['id_receipt_sell'];
    //echo $Billsell_no;
    $date = date("Y/m/d");
    date_default_timezone_set("Asia/Bangkok"); 
    $today = date("H:i:s");
    $sql = "SELECT receipt_sell.id_receipt_sell, customer.name_customer, sell.total_sell,sell.sell_number, product.id_product , product.name_product,sell.id_product,
    receipt_sell.date_receipt_sell, receipt_sell.time_receipt_sell, sell.price_sell, customer.address_customer, customer.tel_customer, sell.no_sell, employee.username,employee.name_employee
   FROM receipt_sell 
   INNER JOIN customer ON receipt_sell.id_customer=customer.id_customer
   INNER JOIN employee ON receipt_sell.id_employee=employee.username
   INNER JOIN sell ON receipt_sell.id_receipt_sell=sell.id_receipt_sell
   INNER JOIN product ON sell.id_product=product.id_product
      
WHERE receipt_sell.id_receipt_sell=('$id_receipt_sell');";
    $result = mysqli_query($objCon,$sql);        
    while($row = $result->fetch_assoc()):
    $pdf=new FPDF("P","mm","A4");
    $pdf->AddPage();
            $pdf->AddFont('THSarabunNewBold','','THSarabunNewBold.php');
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->SetY(3);
            $pdf->SetX(-30);
            $pdf->Cell(0,3,iconv('utf-8','cp874','วันที่ : '.$row['date_receipt_sell']),0,1,'L');
            $pdf->SetX(-26.5);
            $pdf->Cell(0,5,iconv('utf-8','cp874','เวลา : '.$row['time_receipt_sell']),0,1,'L');


            $pdf->SetFont('THSarabunNewBold','',20);
            $pdf->SetY(7);
            $pdf->SetX(90);
            $pdf->Cell(30,9,iconv('utf-8','cp874','บิลใบเสร็จขาย',),0,0,'C');
            
            $pdf->SetY(18);
            $pdf->SetX(13);
            $pdf->SetFont('THSarabunNewBold','',17);
            $pdf->Cell(0,10,iconv('utf-8','cp874','ร้านสิริสุวรรณกระจกอลูมิเนียม'),0,1,'C');
            //Display INVOICE text
            
            $pdf->SetY(5);
            $pdf->SetX(10);
            $pdf->Image('/xampp/htdocs/project/owner/fpdf/logo.png',30,5,0,25);
            
            $pdf->SetY(20);
            $pdf->SetX(-65);
            $pdf->Cell(30,9,iconv('utf-8','cp874','เลขที่บิลใบเสร็จ',),1,0,'C');
            $pdf->Cell(25,9,iconv('utf-8','cp874','  '.$row['id_receipt_sell'],),1,0,'L');

            $pdf->SetY(35);
            $pdf->SetX(10);
            $pdf->Cell(115,35,iconv('utf-8','cp874','',),1,0,'C');

            $pdf->SetY(25);
            $pdf->SetX(12);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','ชื่อลูกค้า : ',),0,0,'L');

            $pdf->SetY(38);
            $pdf->SetX(25);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874','  '.$row['name_customer'],),0,0,'L');

            $pdf->SetY(32);
            $pdf->SetX(10);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','ที่อยู่ : ',),0,0,'C');

            $pdf->SetY(45);
            $pdf->SetX(20);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874','  '.$row['address_customer'],),0,0,'L');

            $pdf->SetY(46);
            $pdf->SetX(15);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','เบอร์โทรศัพท์ : ',),0,0,'C');

            $pdf->SetY(59);
            $pdf->SetX(31);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874','  '.$row['tel_customer'],),0,0,'L');

            $pdf->SetY(35);
            $pdf->SetX(130);
            $pdf->Cell(70,35,iconv('utf-8','cp874','',),1,0,'C');

            $pdf->SetY(25);
            $pdf->SetX(132);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','พนักงาน : ',),0,0,'C');

            $pdf->SetY(38);
            $pdf->SetX(147);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874',' '.$row['name_employee'],),0,0,'L');

            $pdf->SetY(32);
            $pdf->SetX(129.5);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','ที่อยู่ : ',),0,0,'C');

            $pdf->SetY(45);
            $pdf->SetX(141);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874',' 7/1 ถนนประชาบำรุง ตำบลคูหาสวรรค์ ',),0,0,'L');
            $pdf->SetY(51);
            $pdf->SetX(141);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874',' อำเภอเมือง จังหวัดพัทลุง 93000  ',),0,0,'L');

            $pdf->SetY(46);
            $pdf->SetX(136);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','เบอร์โทรศัพท์ : ',),0,0,'C');

            $pdf->SetY(59);
            $pdf->SetX(153);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874',' 074-626656 ',),0,0,'L');
            //Display Horizontal line

            //Billing Details
            
            //Display Invoice no
            $pdf->SetY(55);
            $pdf->SetX(-60);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->SetY(75);
            $pdf->SetX(10);
            $pdf->Cell(145,9,iconv('utf-8','cp874','รายการ',),1,0,'C');
            $pdf->Cell(15,9,iconv('utf-8','cp874','จำนวน',),1,0,'C');
            $pdf->Cell(15,9,iconv('utf-8','cp874','ราคา',),1,0,'C');
            $pdf->Cell(15,9,iconv('utf-8','cp874','ราคารวม',),1,0,'C');

            
            $pdf->SetY(84);
            $pdf->SetX(10);


            $pdf->SetY(84);
            $pdf->SetX(10);
            $pdf->Cell(145,90,iconv('utf-8','cp874',''.$row['name_product']),1,0,'C');
            $pdf->Cell(15,90,iconv('utf-8','cp874',''.$row['sell_number']),1,0,'C');
            $pdf->Cell(15,90,iconv('utf-8','cp874',''.$row['price_sell']),1,0,'C');
            $pdf->Cell(15,90,iconv('utf-8','cp874',''.$row['total_sell']),1,0,'C');

            $pdf->SetY(174);
            $pdf->SetX(10);


            $pdf->Cell(175,9,iconv('utf-8','cp874','จำนวนเงินรวมทั้งสิ้น',),1,0,'R');
            $pdf->Cell(15,9,iconv('utf-8','cp874',''.$row['total_sell'].' บาท'),1,0,'R');
            


        endwhile;


    $pdf -> Output();

?>