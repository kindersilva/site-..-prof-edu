

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

//COMANDO SQL PARA ATUALIZAÇÃO
$sql="select * from usuario";

//Execução do comando sql acima
$resultado=mysqli_query($connect,$sql);
?>
<table class="table table-striped">
	<tr>
		<th>Identificador</th>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Editar</th>
		<th>Excluir</th>
	</tr>
<?php
while($linha = mysqli_fetch_array($resultado)){
	
?> 

	<tr>
<td><?php echo $linha['idUsuario'];?></td>
<td><?php echo $linha['nome'];?></td>
<td><?php echo $linha['email'];?></td>
<td><a href="formAlteraUsuario.php?id=<?php echo $linha['idUsuario']; ?>">
	<img src="img/iconEditar.png" width="15" height="15">
</a></td>
<td><a href="RecebeExcluiUsuarioGet.php?id=<?php echo $linha['idUsuario']; ?>">

	<img src="img/iconExcluir.png" width="15" height="15"></td>
</tr><?php }?>

</table>
	</div>
	<div id="rodape">Footer - Todos os direitos reservados</div>
	
</body>
</html>