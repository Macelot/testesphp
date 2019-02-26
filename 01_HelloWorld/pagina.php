<html>
	<title> Página 1</title>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			$nome="Marcelo";
			echo "Olá ".$nome;
			date_default_timezone_set("America/Sao_Paulo"); 
			$hora = date("H");
			if($hora<=12)
				echo "<br>Bom dia";
			if($hora>12&&$hora<18)
				echo "<br>Boa tarde";
			if($hora>=18)
				echo "<br> Boa noite";
			
			echo "<br>Hoje é ".date("d/m/Y");
		
		
		
		
		
		
		?>
	</body>
</html>