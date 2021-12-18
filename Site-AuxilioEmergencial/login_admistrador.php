<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro Auxilio Emergencial</title>

	<!--Initial tags meta-->
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="teste_conhecimento.css">

    <!-- Import Google Icons Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="Imagens/.png">
    <script src="https://kit.fontawesome.com/24c5e7c381.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">

</head>
<body>
	<?php 
	    if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado'))
	    {
	        $Botao = $_POST ["Botao"]; 

	        if ($Botao =="Logar")
	        {
	            session_start();
	            $_SESSION["controleAdm"] = "logado";
	            include "logadoadm.php";
	        }
	    }
	    else
	    {
	    	
	    	?>
				<img style="position:absolute;top:-100px;left:330px;" src="Governo.png">
				<div class="form">
					
					<h3 style="color:#ffdb00">Faça o login abaixo</h3>
					<form action="login_admistrador.php?valor=enviado" method ="POST">
						<input type="text" placeholder="Nome" name="nome_ad" required="">
						<input type="password" placeholder="Senha" name="senha_ad" required="">

						<button type="submit" value="Logar" name="Botao" style="color:#ffdb00">Entrar como admistrador</button>
					</form>	
			<?php
		}
	?>				
					</div>



</body>
</html>