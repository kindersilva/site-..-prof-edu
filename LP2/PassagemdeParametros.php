<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Passagem de Parametros</title>	
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div id="header">
		Curso de PHP 
       <img src="">
	</div>
	<div id="menu">
		<?php include ("menu.php");?>
	</div>
	<div id="principal">
		<h1>Passagem de Parâmetro</h1>
		Enviando valor 10<p>
		
		<?php $numero=10;?>

        <a href="recebeParametro.php?valor=<?php echo $numero; ?>">
        Enviar Parâmetro</a>

	</div>
	<div id="rodape">Footer - Todos os direitos reservados</div>
	
</body>
</html>