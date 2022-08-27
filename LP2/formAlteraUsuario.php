<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pesquisar Usuário</title>	
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
		<h3>Dados do Usuário</h3>
<?php
include "conexao.php";
$idUsuario = $_GET["id"];


//COMANDO SQL PARA ATUALIZAÇÃO
$sql="select * from usuario where idUsuario='$idUsuario'";

//Execução do comando sql acima
$resultado=mysqli_query($connect,$sql);
while($linha = mysqli_fetch_array($resultado)){
	
?> 
<form action="recebeAlteraUsuario.php" method="post">

Identificador<input type="text" name="idUsuario" value="<?php echo $linha['idUsuario'];?>" readonly><P>

Nome<input type="text" name="nome" value="<?php echo $linha['nome'];?>"><p>
Email <input type="text" name="email" value="<?php echo $linha['email'];?>"><p>
<button type="submit" class="btn">Alterar dados</button>

<?php }?>
	


	</div>
	<div id="rodape">Footer - Todos os direitos reservados</div>
	
</body>
</html>