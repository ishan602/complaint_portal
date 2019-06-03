<?php
require('../fpdf/fpdf.php');
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$name = strtoupper($_POST['name']);
	$empid = strtoupper($_POST['eid']);
	$dept = $_POST['dept'];
	$sem = $_POST['sem'];
	$peradd = $_POST['padd'];
	$uniadd = $_POST['uadd'];
	$no = $_POST['cno'];
	$mlan = $_POST['mac_lan'];
	$mwifi = $_POST['mac_wifi'];
	$email = strtoupper($_POST['email']);
	$date = $_POST['date'];
	$rno = mt_rand(10000,99999);

	$query = "INSERT INTO `emailstudent`(`Req_no`, `Name`, `Entry_number`, `Dept/School`, `Semester`, `P_add`, `U_add`, `C_no`, `MAC_lan`, `MAC_wifi`, `Email`, `Date_of_submit`) VALUES ('$rno','$name','$empid','$dept','$sem','$peradd','$uniadd','$no','$mlan','$mwifi','$email','$date');";
	$result = mysqli_query($con,$query) or die("Something Went Wrong");
	
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
$pdf->AddPage();
$pdf->setLeftMargin(15);
$pdf-> setRightMargin(15);
$pdf->SetFont('Times','B',14);
$pdf->Cell(80);
$pdf->Cell(40,10,'Application Form for Internet Connectivity through LAN/ Wi fi for Students ',0,1,'C');
$pdf->SetFont('Times','B',12);
$pdf->Cell(8);
$pdf->Cell(110,10,'Requirement Number:- '.$rno.' ',0,0,'L');
$pdf->Cell(60,10,'Date:- '.date('d/m/y').' ',0,1,'R');
$pdf->Cell(8);
$pdf->Cell(65,10,'Name ',1,0,'L');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$name,1,1,'L');
$pdf->Cell(8);
$pdf->SetFont('Times','B',12);
$pdf->Cell(65,10,'Employee Id',1,0,'l');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$empid,1,1,'L');
$pdf->Cell(8);
$pdf->SetFont('Times','B',12);
$pdf->Cell(65,10,'Department/School',1,0,'l');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$dept,1,1,'L');
$pdf->Cell(8);
$pdf->SetFont('Times','B',12);
$pdf->Cell(65,10,'Semester',1,0,'l');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$sem,1,1,'L');
$pdf->Cell(8);
$pdf->SetFont('Times','B',12);
$pdf->Cell(65,10,'Permanent Address',1,0,'l');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$peradd,1,1,'L');
$pdf->Cell(8);
$pdf->SetFont('Times','B',12);
$pdf->Cell(65,10,'University Address',1,0,'l');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$uniadd,1,1,'L');
$pdf->Cell(8);
$pdf->SetFont('Times','B',12);
$pdf->Cell(65,10,'MAC Id for Lan Card',1,0,'l');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$mlan,1,1,'L');
$pdf->Cell(8);
$pdf->SetFont('Times','B',12);
$pdf->Cell(65,10,'MAC Id for Wifi Card',1,0,'l');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$mwifi,1,1,'L');
$pdf->Cell(8);
$pdf->SetFont('Times','B',12);
$pdf->Cell(65,10,'Mobile Number',1,0,'l');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$no,1,1,'L');
$pdf->Cell(8);
$pdf->SetFont('Times','B',12);
$pdf->Cell(65,10,'Email Id',1,0,'l');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$email,1,1,'L');
$pdf->Cell(8);
$pdf->SetFont('Times','B',12);
$pdf->Cell(65,10,'Date',1,0,'l');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$date,1,1,'L');
$pdf->Cell(8);
$pdf->SetFont('Times','B',12);
$pdf->Cell(65,10,'Warden Signature',1,0,'l');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,'',1,1,'L');
$pdf->Cell(8);
$pdf->SetFont('Times','B',12);
$pdf->Cell(65,10,'Dean Signature',1,0,'l');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,'',1,1,'L');
$pdf->Cell(70);
$pdf ->setFont('Times','B','12');
$pdf->Cell(40,15,'Declaration',0,1,'C');
$pdf->Cell(8);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,'I ________________________son/daughter of ________________________student of SMVDU',0,1,'l');
$pdf-> Cell(8);
$pdf->Cell(0,5,'will use SMVDU Internet for educational and research work only. I hereby abide by the rules and',0,1,'l');
$pdf-> Cell(8);
$pdf->Cell(0,5,'regulations of SMVDU internet policy and will not indulge in activities like hacking/ using proxy ',0,1,'l');
$pdf-> Cell(8);
$pdf->Cell(0,5,'servers/ torrent download, etc. I will not share the internet credentials with anyone and will be fully',0,1,'');
$pdf-> Cell(8);
$pdf->Cell(0,5,'fully responsible for usage of Internet Account.',0,1,'l');
$pdf-> Cell(8);
$pdf->Cell(65,5,'Signature: - ____________________________',0,0,'l');
$pdf->Cell(110,5,'Date:- ____________________________',0,1,'R');
$pdf->Ln(5);
$pdf-> Cell(8);
$pdf->Cell(0,0,'',1,1);
$pdf->Cell(80);
$pdf ->setFont('Times','B','12');
$pdf->Cell(40,8,'For Network Centre Use',0,1,'C');
$pdf-> Cell(8);
$pdf->Cell(65,10,'SMVDU/NC/2019/',0,0,'l');
$pdf->Cell(110,10,'Date: - ___/___/____',0,1,'R');
$pdf->SetFont('Times','B',11);
$pdf-> Cell(8);
$pdf->Cell(65,10,'Username: - ____________________________',0,0,'l');
$pdf->Cell(110,10,'Password:- ____________________________',0,1,'R');
$pdf ->setFont('Times','B','12');
$pdf->Cell(80);
$pdf->Cell(40,15,'INSTRUCTIONS',0,1,'C');
$pdf ->setFont('Times','','12');
$pdf-> cell(8);
$pdf-> Cell(0,0,'1) 	Do not share username & password with anyone.',0,1,'l');
$pdf->Ln(8);
$pdf->Cell(8);
$pdf-> Cell(0,0,'2) 	Network centre will be providing internet connection only as per recommendations from Deans /',0,1,'l');
$pdf->Ln(8);$pdf->Cell(8);
$pdf-> Cell(0,0,'Directors / Head of Sections. ',0,1,'l');
$pdf->Ln(8);
$pdf->Cell(8);
$pdf-> Cell(0,0,'3) 	The user for whom the account was created is responsible for the security of the account and all ',0,1,'l');
$pdf->Ln(8);$pdf->Cell(8);
$pdf-> Cell(0,0,'actions associated with its use. ',0,1,'l');
$pdf->Ln(8);
$pdf->Cell(8);
$pdf-> Cell(0,0,'4) 	Stolen passwords: Often the account owner is the first person to detect unauthorized use of their ',0,1,'l');
$pdf->Ln(8);$pdf->Cell(8);
$pdf-> Cell(0,0,'account. If this occurs, please notify to the Network Centre. ',0,1,'l');
$pdf->Ln(8);
$pdf->Cell(8);
$pdf-> Cell(0,0,'5) 	Type ipconfig /all in command prompt to see the MAC ID of Network Card.',0,1,'l');
$pdf->Ln(8);
$pdf->Cell(8);
$pdf-> Cell(0,0,'6) 	Attach one photocopy of your identity card with this form.',0,1,'l');
$pdf->Output();
}
?>