<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Divs</title>	
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div id="header">
		Empresa de Tecidos Raros
       <img src="">
	</div>
	<div id="menu">
		<?php include ("menu.php");?>
	</div>
	<div id="principal">
		<h3>Recebendo dados do Usuário</h3>
<?php
include "conexao.php";
$idUsuario = $_POST["idUsuario"];
$senha= $_POST["senha"];

//COMANDO SQL PARA ATUALIZAÇÃO
$sql="update usuario set senha='$senha' where idUsuario='$idUsuario'";
//Execução do comando sql acima
mysqli_query($connect, $sql) or die ("<p>erro ao tentar conectar"); //executar o codigo sql
mysqli_close($connect);
header("location:mensagemCadastro.php");

?>         
	</div>
	<div id="rodape">Footer - Todos os direitos reservados</div>
	
</body>
</html>