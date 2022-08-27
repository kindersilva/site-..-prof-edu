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
		<h1>Recebendo parâmetro</h1>
                   
        <?php 
        $numero=$_GET['valor'];
        echo $numero;
        ?>
         

	</div>
	<div id="rodape">Footer - Todos os direitos reservados</div>
	
</body>
</html>