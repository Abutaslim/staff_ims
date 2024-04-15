<?php 

// session_start();
require 'vendor/autoload.php';
require 'inc/db.php';
require_once('inc/phpqrcode/qrlib.php');


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

//$staff_Num = $_SESSION['staff_Num'];


$mpdf =new  \Mpdf\Mpdf(['mode'=>'utf-8', 'format'=>[58,87 ],'margin_left'=>0, 'margin_bottom'=>0, 'margin_top'=>0, 'margin_right'=>0]);
$mpdf->Cell(20,5,'',0,0, '');
    //$mpdf->Image('pictures/08011111117.jpg',10,6,190);
    // Arial bold 15
    $mpdf->SetFont('Arial','B',15);
    // $mpdf->Cell(190,10,'CLASSIC TAILORING SERVICES ',0,0,'C');

    // $query = "SELECT * FROM `tblstaff` where staff_number = '$staff_Num'  "; 
    // $result = mysqli_query($dbc,$query);
    // //$html = mysqli_num_rows($result);
    // while ($row = mysqli_fetch_array($result)) {
    // 	$image = $row['photo'];
    // 	if (file_exists('staff_imgs/'. $image)) {

   
	// 		$staff = $row['staff_number'];
	// 		$q = "UPDATE `tblstaff` SET `status`= 1 WHERE `staff_number` = '$staff'";
	// 		mysqli_query($dbc,$q);
		for ($i=0; $i < 1; $i++) { 
		
	
	$mpdf->SetDefaultBodyCSS('background','url("imgs/poly_temp.JPG")');
	$mpdf->SetDefaultBodyCSS('background-image-resize', 6);
	$html = '
	   <div style="width: 100%;   border-style: solid; height: 100%;">
	   <br><br><br><br><br>
	   <span style = "color: Light Blue; font-size: 12px; text-align: center"><span style="color:white;">----------------------------</span><span style = "color:#3582c4">FPK/RT/001/23</span>
	
    <div style="padding-top:px;width: 60%;padding-right:7.5%; padding-left:17%;  border-style: solid;height: 44%;">
	
	<div style="width:100%; height:130px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px;">
		<img  style="width:100%; height:100%; border-radius: 10px;" src = "staff_imgs/rector.jpg">
		</div>
	<div style="width:background-color: black;
	position: fixed;
	opacity: 0.5px;
	z-index: 99;
	color: white; 56%;font-size:10px;padding-left:5px; padding-top: 5px;float: left; font-family: Britannic Bold;text-align:center; color:black; height: 100%, margin-top:5px;">
	</div>

	</div>
	<div style="margin-left: 10px;">
	<span style="font-size:11px; font-family: Arial black; color:#003008"><b>Prof. Muhammad Sanusi Magaji</b></span><br>
	<span style="color: white">----------</span><span style="font-size:20px; color:#3582c4"><b>RECTOR</b></span><br>
</div>
	
</div>';
	$mpdf->WriteHTML($html);
	
	$mpdf->AddPage();

	$text = $row['first_name'].' '.$row['staff_number'];
	$barcodeText = trim($text);
	$barcodeType='code128';
	$barcodeDisplay='horizontal';
	$barcodeSize=30;
	$printText=true;

	$link_id=str_replace('/','_',"Prof. Muhammad Sanusi Magaji");
						$qr = $link_id . '-qr.png';
						QRcode::png("www.eforms.ubaznet.com/staff.php?id=$link_id:- Reg No: RECTOR", $qr, 'H', 10, 10);

						$qr_raw =   'Araw-qr.png';
						QRcode::png($text, $qr_raw, 'H', 10, 10);
	
	$mpdf->WriteHTML('<div style="background-color: white;text-align:justify; text-justify: inter-word;  width: 100%; height:100%; padding-right: 5%; font-size: 10px;">
		<div style= "padding-top:10px; padding-botton:0px"><h3 style="text-align:center; width:70%; margin-left: auto; margin-right: auto; "> The bearer whose name & photograph appears overleap is a RECTOR</h3>


</div>
	


 <table style= "font-size: 10px;   width: 100%; margin-left:5px;">
		
		<tr >
			
											<td >	<h3 style="text-align:center">FEDERAL POLYTECHNIC, KABO</h3></td>

		<tr >
								<td ><span style="color: white"> ddsgd</span><img  style="width:140px; height:140px; margin-left:auto; margin-right:auto; " src = "./'.$qr.'"> </td>
							</tr>

							<tr >
								<td style="text-align:center"> <h3> Under no circumstances is this ID card transferable or to be used by any other person other than to whom it is issued in the institution name</h3></td>
							</tr>
	</table>
	

	
	
	
	
</div>');
	
$mpdf->Output();

}
// else

// {
// 	$_SESSION['no_image'] = "Y";
// 	 echo "<meta http-equiv='refresh' content = '0; url = id_card_staff_num.php'/>";
// }

// }





