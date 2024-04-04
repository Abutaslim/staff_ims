<?php 

session_start();
require 'vendor/autoload.php';
require 'inc/db.php';


$mpdf =new  \Mpdf\Mpdf();

//     Logo
    
//     Move to the right
//     $this->Cell(80);
//     $this->Ln(23);
//     Title
    
//     $this->Ln();

//      $this->Cell(-30,10,'Department of Computer Science ',0,0,'');
//     Line break
//     $this->Ln(23);

// $mpdf->SetFont('Arial','I',15);
// $html = 'This is an id card';
$department = $_SESSION['department'];


$mpdf =new  \Mpdf\Mpdf(['mode'=>'utf-8', 'format'=>[58,87 ],'margin_left'=>0, 'margin_bottom'=>0, 'margin_top'=>0, 'margin_right'=>0]);
$mpdf->Cell(20,5,'',0,0, '');
    //$mpdf->Image('pictures/08011111117.jpg',10,6,190);
    // Arial bold 15
    $mpdf->SetFont('Arial','B',15);
    // $mpdf->Cell(190,10,'CLASSIC TAILORING SERVICES ',0,0,'C');

    $query = "SELECT * FROM `tblstaff` where department = '$department'  "; 
    $result = mysqli_query($dbc,$query);
    //$html = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)) {
    	if (file_exists('imgs/user.png')) {

   
			$staff = $row['department'];
			$q = "UPDATE `tblstaff` SET `status`= 1 WHERE `department` = '$department'";
			mysqli_query($dbc,$q);
			
	
	$mpdf->SetDefaultBodyCSS('background','url("imgs/bg_image_demo.jpg")');
	$mpdf->SetDefaultBodyCSS('background-image-resize', 6);
	$html = '
	   <div style="width: 100%;   border-style: solid; height: 100%;">
	<img style="width: 95%; padding: 2%; " src = "imgs/header_demo.jpg">
    <div style="width: 85%;padding-right:7.5%; padding-left:7.5%;  float: center;border-style: solid;height: 100%;">
	<span style = "color: red; font-size: 12px; text-align: center"><span style="color:white;">---------------</span>STAFF ID CARD</span>
	<div style="width:100%; height:100px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: radius 10px;">
		<img  style="width:100%; height:90%;  " src = "imgs/user.png">
		</div>
	<div style="width:background-color: black;
	position: fixed;
	opacity: 0.5px;
	z-index: 99;
	color: white; 56%;font-size:13px;padding-left:5px; padding-top: 5px;float: left; font-family: Britannic Bold;text-align:center; color:black; height: 100%, margin-top:5px;">

		
		<b >'.$row['first_name'].'</b><br>	
		<b>'.$row['others'].'<br>
		'.$row['staff_rank'].'</b>
	</div>
	
	</div>
</div>';
	$mpdf->WriteHTML($html);
	
	$mpdf->AddPage();

	$text = $row['first_name'].$row['others'].$row['staff_number'];
	$barcodeText = trim($text);
	$barcodeType='code128';
	$barcodeDisplay='horizontal';
	$barcodeSize=30;
	$printText=true;
	
	$mpdf->WriteHTML('<div style="background-color: white;text-align:justify; text-justify: inter-word;  width: 100%; height:100%; padding-right: 5%; font-size: 10px;">
	<ol style="margin-bottom:0px; padding-left:18px;" >	
 		<li ><b>This card is not transferable and is to be used by the holder for the period of his/her service with the Company</b></li>
 		<li><b>It must be carried at all times and presented on demand</b></li>
 		<li><b>It must be returned to the Director Security when the Officer ceases to be in the Services of the Company</b></li>
 </ol>


<br>
<br>


 <table style="width: 100%;">
	<tr>
	<td>Holder</td>
	<td style="text-align: right;">Registrar</td>
		
	</tr>
	<tr>
	<td></td>
	<td></td>
		
	</tr>
	</table>
 <table style= "font-size: 10px;  margin-top:0px; width: 100%; margin-left:5px;">
		
		<tr >
			
			<td style= "text-align: center"><b>IN CASE OF EMERGENCY<br>SECURITY OFFICE</b> <br><b>08000000000</b><br><b>08000000000</b><br> <b> HEALTH SERVICES</b><br><b> 08000000000</b><br><b> 08000000000</b> </td>
		</tr>
		<tr >
			<td colspan= "2"><img class=əbarcodeə alt="'.$barcodeText.'" src="barcode.php?text='.$barcodeText.'&codetype='.$barcodeType.'&orientation='.$barcodeDisplay.'&size='.$barcodeSize.'&print='.$printText.'"/> </td>
		</tr>
	</table>
	

	
	
	
	
</div>');
	

}

}


$mpdf->Output();


		