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
		<a href="../HTML/formarioQuatro.html">Home</a> 
		<a href="DivDois.html">Empresa</a> 
		<a href="#">Quem somos</a>
		<a href="#">Contato</a>
        <a href="fimsessao.php">Sair</a>
	</div>
	<div id="principal">
<?php
    session_start();
    if(!isset($_SESSION['email']) && !isset($_SESSION['senha'])){
        header("location: login.php");
    }

?>
<h6>Seja bem vindo: 
    <?php echo $_SESSION['email'];?>

</h6>
        <?php
            $a=10;
            $b=20;
            $soma=$a+$b;
            $subt=$a-$b;
            $mult=$a*$b;
            $divi=$a/$b;
            echo "Soma: $soma<p>";
            echo "Subtração: $subt<p>";
            echo "Multiplicação: $mult<p>";
            echo "Divisão: $divi<p>";
            echo "<hr>";
            if($a>$b){
                echo ("O maior número é:$a");
            }
            else if($a<$b){
                echo ("O maior número é:<strong>$b</strong>");
            }
            else{
                echo "Números iguais";
            }
        ?>
         

	</div>
	<div id="rodape">Footer - Todos os direitos reservados</div>
	
</body>
</html>