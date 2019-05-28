<?php
require('../fpdf/fpdf.php');
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
$s_no = $_GET['id'];
$select_query = "select * from complaint where S_no = $s_no";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row=mysqli_fetch_assoc($select_query_result);

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../logo.jpg',10,6,30);
    // Arial bold 15
    $this->SetFont('Times','B',18);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(40,10,'SHRI MATA VAISHNO DEVI UNIVERSITY',0,0,'C');
    $this->Ln(6);
    $this->SetFont('Times','I',12);
    $this->Cell(80);
    $this->Cell(40,10,'Sub Post Office, Katra, 182320',0,0,'C');
    $this->Ln(5);
    $this->Cell(80);
    $this->Cell(40,10,'Ph. 01991-285535, 285634 Fax : 01991-285573',0,0,'C');
    $this->Ln(10);
    $this->Cell(80);
    $this->SetFont('Times','B',18);
    $this->Cell(40,10,'Network Centre, SMVDU',0,0,'C');
    $this->Ln(10);
    $this->Cell(0,0,'',1,1);
    $this->Ln(5);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',14);
$pdf->Cell(80);
$pdf->Cell(40,15,'COMPLAINT ACKNOWLEDGEMENT',0,1,'C');
$pdf->SetFont('Times','',13);
$pdf->Cell(8);
$pdf->Cell(40,15,'Date:- '.date('d/m/y h:i:sa').' ',0,1,'L');
$pdf->Cell(8);
$pdf->Cell(40,15,'Dear Mr./Mrs./Ms:- '.$row['Name'],0,1,'L');
$pdf->SetFont('Times','BU',14);
$pdf->Cell(8);
$pdf->Cell(40,15,'Subject:- Complaint No. 0'.$row['S_no'],0,1,'L');
$pdf->SetFont('Times','',13);
$pdf->Cell(8);
$pdf->Cell(0,15,'We acknowledge receipt of your compliant dated '.$row['Time'].', under category '.$row['Category'],0,0);
$pdf->Ln(5);
$pdf->Cell(8);
$pdf->Cell(0,15,' and have allotted serial number 0'.$row['S_no'].', to your complaint.',0,1);
$pdf->Cell(8);
$pdf->Cell(0,15,'Please be advised that we have initiated the investigation process and will forward to you our',0,0);
$pdf->Ln(5);
$pdf->Cell(8);
$pdf->Cell(0,15,'reply at an early date.',0,1);
$pdf->Cell(8);
$pdf->Cell(0,15,'We assure you of our priority attention at all times.',0,1);
$pdf->Cell(8);
$pdf->Cell(0,15,'Yours faithfully,',0,1);
$pdf->Cell(8);
$pdf->Cell(80,20,'',0,1,'L');
$pdf->SetFont('Times','B',14);
$pdf->Cell(8);
$pdf->Cell(80,20,'Sudesh Kumar',0,0,'L');
$pdf->Ln(5);
$pdf->Cell(8);
$pdf->Cell(80,20,'Incharge Network Centre, SMVDU',0,0,'L');
$pdf->Output();
?>