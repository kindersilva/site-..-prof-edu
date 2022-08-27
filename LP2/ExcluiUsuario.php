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
		<h3>Excluir Usuário</h3>
        <form action="RecebeExcluiUsuario.php" method="post">
            <table>
                 <tr>
                    <td>Código Usuário</td>
                    <td>
                        <input type="text" name="idUsuario" class="span5">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary">Enviar Dados</button>
                    </td>
                </tr>
                
            </table>            
        </form>
        
           

	</div>
	<div id="rodape">Footer - Todos os direitos reservados</div>
	
</body>
</html>