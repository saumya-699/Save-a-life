<?php


if(isset($_POST['BtnSubmit'])){
require_once('C:\xampp\htdocs\Save-a-life\Director\vendor\tecnickcom\tcpdf\tcpdf.php');
   $report=$_POST["report"];
   $HID=$_POST["hospital"];
	//$SLMC=$_POST["SLMC"];
// extend TCPF with custom functions
class MYPDF extends TCPDF {

    // Load table data from file
    public function LoadData() {
		 $report=$_POST["report"];
    $HID=$_POST["hospital"];
        // Read file lines
    require 'conp.php';
echo $report;
$sql= "select * from $report where Remark!='Removed' and Hospital_ID= '$HID'";
$result = $conn->query($sql);
return $result;

    }

    // Colored table
    public function ColoredTable($header,$data) {
        // Colors, line width and bold font
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(0.3);
        $this->SetFont('', 'B');
        // Header
        $w = array(50, 45, 50, 45);
        $num_headers = count($header);
        for($i = 0; $i < $num_headers; ++$i) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = 0;
		
		if($_POST["report"] == "bloodbank_doctor"){
        foreach($data as $row) {
			
			
            $this->Cell($w[0], 6, $row["BloodBank_doctor_ID"], 'LR', 0, 'L', $fill);

            $this->Cell($w[1], 6, $row["Name_With_Initials"], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6,$row["HospitalName"] , 'LR', 0, 'R', $fill);
            $this->Cell($w[3], 6, $row["SLMC_Number"], 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill=!$fill;
        }
		//$this->Cell(array_sum($w), 0, '', 'T');
		}
	
		else if($_POST["report"] == 'mlt'){
		    foreach($data as $row) {
			
			
            $this->Cell($w[0], 6, $row["MLT_ID"], 'LR', 0, 'L', $fill);

            $this->Cell($w[1], 6, $row["Name_With_Initials"], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6,$row["HospitalName"] , 'LR', 0, 'R', $fill);
            $this->Cell($w[3], 6, $row["SLMC_Number"], 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill=!$fill;
        }
		
		//$this->Cell(array_sum($w), 0, '', 'T');
		}
		
		
		
		else if($_POST["report"] == 'warddoctor'){
		    foreach($data as $row) {
			
			
            $this->Cell($w[0], 6, $row["WardDoctor_ID"], 'LR', 0, 'L', $fill);

            $this->Cell($w[1], 6, $row["Name_With_Initials"], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6,$row["HospitalName"] , 'LR', 0, 'R', $fill);
            $this->Cell($w[3], 6, $row["SLMC_Number"], 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill=!$fill;
        }
		//$this->Cell(array_sum($w), 0, '', 'T');
		}
		
		else if($_POST["report"] == 'nurse')
			{
		
		    foreach($data as $row) {
			
			
            $this->Cell($w[0], 6, $row["Nurse_ID"], 'LR', 0, 'L', $fill);

            $this->Cell($w[1], 6, $row["Name_With_Initials"], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6,$row["HospitalName"] , 'LR', 0, 'R', $fill);
            $this->Cell($w[3], 6, $row["SLMC_Number"], 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill=!$fill;
        }
		
		//$this->Cell(array_sum($w), 0, '', 'T');
		}
		
		
		
		
		
        
		
		
		
		
				else if($_POST["report"] == 'hospital')
			{

		    foreach($data as $row) {
			
			
            $this->Cell($w[0], 6, $row["Hospital_ID"], 'LR', 0, 'L', $fill);

            $this->Cell($w[1], 6, $row["HospitalName"], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6,$row["Type"] , 'LR', 0, 'R', $fill);
            $this->Cell($w[3], 6, $row["District"], 'LR', 0, 'R', $fill);
			// $this->Cell($w[4], 6, $row["Head_Of_Hospital"], 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill=!$fill;
        }
		
		
		}
		
		
				else 
			{
				echo "donor";
		
		    foreach($data as $row) {
			
			
            $this->Cell($w[0], 6, $row["Donor_Id"], 'LR', 0, 'L', $fill);

            $this->Cell($w[1], 6, $row["Full_Name"], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6,$row["Initials"] , 'LR', 0, 'R', $fill);
            $this->Cell($w[3], 6, $row["Gender"], 'LR', 0, 'R', $fill);
			// $this->Cell($w[4], 6, $row["Head_Of_Hospital"], 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill=!$fill;
        }
		
		
		}
		
		$this->Cell(array_sum($w), 0, '', 'T');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('');
$pdf->SetTitle('Save a life');
//$pdf->SetSubject('Save a life');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, Save a life.' 011', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

// column titles
if($_POST["report"] == 'bloodbank_doctor'){
$header = array('BloodBank doctor ID', 'Full Name', 'Hospital','SLMC');
}

else if($_POST["report"] == 'mlt'){
$header = array('MLT ID', 'Full Name', 'Hospital','SLMC');
}

else if($_POST["report"] == 'warddoctor'){
$header = array('Ward Doctor', 'Full Name', 'Hospital','SLMC');
}

else if($_POST["report"] == 'nurse'){
$header = array('Nurse ID', 'Full Name', 'Hospital','SLMC');
}

else if($_POST["report"] == 'donors')
	

	{
		
		$header = array('Donor ID', 'Full Name','Initials' ,'Gender');
	}
	
	
	else
	{
		
		$header = array('Hospital ID', 'Hospital Name','Type' ,'District');
		
		
	}	
// data loading
$data = $pdf->LoadData('');

// print colored table
$pdf->ColoredTable($header, $data);

// ---------------------------------------------------------

// close and output PDF document
$pdf->Output('example_011.pdf', 'I');
}
//============================================================+
// END OF FILE
//============================================================+

?> 