<?php
error_reporting(E_ALL);
require('../fpdf/fpdf.php');
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$name = strtoupper($_POST['name']);
	$empid = $_POST['eid'];
	$dept = $_POST['dept'];
	$design = $_POST['design'];
	$purpose = $_POST['purpose'];
	$no = $_POST['cno'];
	$exno = $_POST['eno'];
	$etitle = strtoupper($_POST['etitle']);
	$ename = $_POST['ename'];
	$start = $_POST['from'];
	$upto = $_POST['upto'];
	$email = strtoupper($_POST['email']);
	$date = $_POST['date'];
	$premail = strtoupper($_POST['premail']);
	if ($premail == NULL or $premail == '')
	{
		$premail = "N/A";
	}
	$query = "INSERT INTO `emailtoall`(`Name`, `Emp_Id`, `Dept/School`, `Designation`, `Purpose`, `C_no`, `Ext_No`, `Uni_Email`, `Date_of_submit`, `Pre_email`, `NewEmailTitle`, `NewEmailName`, `From_Date`, `To_Date`) VALUES ('$name','$empid','$dept','$design','$purpose','$no','$exno','$email','$date','$premail','$etitle','$ename','$start','$upto')";
	$result = mysqli_query($con,$query)or die("Something Not Working");

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
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf-> SetLeftMargin(20);
$pdf->AddPage();
$pdf->SetFont('Times','B',14);
$pdf->Cell(70);
$pdf->Cell(40,15,'EMAIL To All FACILITY',0,1,'C');
$pdf->SetFont('Times','B',12);

$pdf->Cell(40,15,'Date:- '.date('d/m/y').' ',0,1,'L');
$pdf->Cell(40,10,'Name of Employee:- ',0,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(55,10,$name,0,0,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(30,10,'Employee Id.:-',0,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(30,10,$empid,0,1,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(30,10,'Designation:-',0,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(50,10,$design,0,0,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(35,10,'Email Id:-',0,0,'R');
$pdf->SetFont('Times','',12);
$pdf->Cell(55,10,$email,0,1,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(30,10,'Department:-',0,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(65,10,$dept,0,0,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(25,10,'Mobile No.:-',0,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(27,10,$no,0,0,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(20,10,'Ext. No.:-',0,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(30,10,$exno,0,1,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(55,10,'Access Permission Purpose:-',0,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$purpose,0,1,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(55,10,'Previous Mail(if any):-',0,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$premail,0,1,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(55,10,'Description of proposed new/existing email id: ',0,1,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(29,10,'Email Title:-',0,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(75,10,$etitle,0,0,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(35,10,'Email Name:-',0,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(45,10,$ename,0,1,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(75,10,'Send to all facility period required:',0,1,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(20,10,'From:',0,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(30,10,$start,0,0,'L');

$pdf->SetFont('Times','B',12);
$pdf->Cell(20,10,'Upto:',0,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(30,10,$upto,0,1,'L');

$pdf->SetFont('Times','B',10);
$pdf-> Ln(2);
$pdf->Cell(0,0,"1)	 Kindly note that send to all email permission cannot be granted to email issued in the name of employee/person.",0,1,'L');
$pdf-> Ln(4);
$pdf->Cell(0,0,"2)	 In case of misuse of issued email id, I shall be fully responsible for the same.",0,1,'L');

$pdf-> Ln(25);
$pdf->Cell(0,0,"Siganture of Employee",0,1,'R');

$pdf-> Ln();
$pdf->Cell(0,0,"Siganture of Dean/Dir/HoD/Section Head",0,1,'l');

$pdf-> Ln(25);
$pdf->Cell(30,0,"Permitted/Not Permitted",0,1,'l');
$pdf->Ln(5);
$pdf->Cell(20,0,"Registrar",0,0,'l');

$pdf->Cell(0,0,"I/c Network Centre",0,1,'R');
$pdf->Ln(2);
$pdf->Cell(80);
$pdf ->setFont('Times','B','12');
$pdf->Cell(40,15,'For Network Centre Use',0,1,'C');

$pdf->Cell(0,5,'Receipt No: ___________________ Date:',0,1,'L');
$pdf->Cell(0,6,'Action Taken: (Issued/Not Issued) Name of Email Id Issued__________________________________',0,1,'L');
$pdf->Cell(0,6,'Date of Suspension of Send to all Email facility: _________________________________________',0,1,'L');
$pdf->Cell(0,6,'Signature of Email Coordinator:',0,1,'L');
$pdf->Cell(0,8,'Name:_________________________________________     Date: ___________________',0,1,'L');
$pdf->Output();
}
?>