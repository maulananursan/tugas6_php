<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$h_jambu_per=15000;
	$h_kardus=2000;
	$t_kilo=30;
	$total=($h_jambu_per*$t_kilo)+(2*$h_kardus);

	 
	?>
	<p>===================================</p>
	<p>Harga Jambu = Rp.<?php echo $h_jambu_per; ?> /Kg </p>
	<p>Harga Kardus =Rp. <?php echo $h_kardus; ?> /Pcs</p>
	<p>Total Penjualan (Dus dan Jambu) =  <?php echo $total; ?></p>
	<p>===================================</p>

</body>
</html>