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

<?php
include ("conexao.php");
session_start();
$login = $_POST["email"];
$senha = $_POST["senha"];

$confirmacao = mysqli_query($connect,"SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'");
$contagem = mysqli_num_rows($confirmacao); //traz o resultado da pesquisa acima
$rs = mysqli_fetch_array($confirmacao);
if ( $contagem == 1 ) {
    $_SESSION['email'] = $rs['email'];
    $_SESSION['senha'] = $rs['senha'];
    
    header("location:index.php");
    }
    else {
        echo "<h4>Login ou Senha errado!</h4>";
}

?>
 
 <a href="login.php">Voltar</a>

	</div>
	<div id="rodape">Footer - Todos os direitos reservados</div>
	
</body>
</html>