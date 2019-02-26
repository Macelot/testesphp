<html>
<head>
</head>
<body>
	<?php echo "oi<br>";
	echo PHPVERSION();
	//echo phpinfo();
	
	date_default_timezone_set("America/Sao_Paulo"); 
	setlocale(LC_ALL,
		'pt_BR',
		'pt_BR.utf-8',
		'pt_BR.utf-8',
		'portuguese'
		);
	$datinha=date("d")."-".date("F")."-".date("Y");
	echo "Novo Hamburgo ".
	strftime('%A, %d de %B de %Y', strtotime($datinha));
	?>
</body>
</html>