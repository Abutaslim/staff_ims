
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Barcode generator</title>
	<!--Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>
	<div class="container">
		<div>&nbsp;</div>
		<P>Barcode Generator</P>
		<div class="card col-md-6">
			<form method="post">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Product Name or Number</label>
							<input type="text" name="barcodeText" class="form-control" value="<?php echo @$_POST['barcodeText'];?>">
						</div>
					</div>		
				</div>	
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Barcode Type</label>
							<select name="barcodeType" id="barcodeType" class="form-control">
								<option value="codabar" <?php echo (@$_POST['barcodeType'] == 'codabar' ? 'selected="selected"' : ''); ?>>Codabar</option>
								<option value="code128" <?php echo (@$_POST['barcodeType'] == 'code128' ? 'selected="selected"' : ''); ?>>Code128</option>
								<option value="code39" <?php echo (@$_POST['barcodeType'] == 'code39' ? 'selected="selected"' : ''); ?>>Code39</option>
							</select> 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Barcode Display</label>
							<select name="barcodeDisplay" class="form-control" required>
								<option value="horizontal" <?php echo (@$_POST['barcodeDisplay'] == 'horizontal' ? 'selected="selected"' : ''); ?>>Horizontal</option>
								<option value="vertical" <?php echo (@$_POST['barcodeDisplay'] == 'vertical' ? 'selected="selected"' : ''); ?>>Vertical</option>
							</select>
						</div>
					</div>
				</div>
				<input type="hidden" name="barcodeSize" id="barcodeSize" value="30">
				<input type="hidden" name="printText" id="printText" value="true">
				<button type="submit" style="float: left;" name="generateBarcode" class="btn btn-primary  mr-2 mb-4">Generate Barcode</button>
			</form>
			<div class="col-md-4">
				<?php
				if(isset($_POST['generateBarcode'])) {
					$barcodeText = trim($_POST['barcodeText']);
					$barcodeType=$_POST['barcodeType'];
					$barcodeDisplay=$_POST['barcodeDisplay'];
					$barcodeSize=$_POST['barcodeSize'];
					$printText=$_POST['printText'];
					if($barcodeText != '') {
						echo '<h4>Barcode:</h4>';
						echo '<img class="barcode" alt="'.$barcodeText.'" src="barcode.php?text='.$barcodeText.'&codetype='.$barcodeType.'&orientation='.$barcodeDisplay.'&size='.$barcodeSize.'&print='.$printText.'"/>';
					} else {
						echo '<div class="alert alert-danger">Enter product name or number to generate barcode!</div>';
					}
				}
				?>
			</div>
		</div>
	</div> 
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>





