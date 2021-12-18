<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro Usuario</title>

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
	session_start();
	
	if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado')) 
	{
	  	$login = $_POST["nome_usuario"];
	  	$senha = $_POST["senha_usuario"];
	  	$email = $_POST["email_usuario"];
	  	$telefone = $_POST["telefone_usuario"];
	  	include "conexao.php";
	  
	  	$Comando=$conexao->prepare("INSERT INTO TB_USUARIO (NOME_USUARIO, SENHA_USUARIO, EMAIL_USUARIO, TELEFONE_USUARIO)        VALUES ( ?, ?, ?, ?)");

	  	$Comando->bindParam(1, $login);
	  	$Comando->bindParam(2, $senha);
	  	$Comando->bindParam(3, $email);
	  	$Comando->bindParam(4, $telefone);

	  	if ($Comando->execute())
    	{
        	if ($Comando->rowCount () >0) 
        	{
         		
                                  
            	$login = null; 
 				$senha = null;
 				$email = null; 
 				$telefone = null;

 				header('location:login.php');
            }
            else 
            {
                echo "Erro ao tentar efetivar o contato.";
            }
        	}
     	else 
        { 
           
           	throw new PDOException("Erro: Não foi possivel executar a declaração sql.");
        }
	}

	else
	{
		?>
			<img style="position:absolute;top:-100px;left:330px;" src="Governo.png">
			<div class="form">
			<h3 style="color:#ffdb00">Auxilio emergercial</h3>
			<p>Não tem login, siga os passo abaixo para ter login.</p>
 			<form name="form1" action="cadastro_usuario.php?valor=enviado" method="POST">
 			
  				<input class="input" type="text" placeholder="Preencher Nome" name="nome_usuario" required>
 				<input class="input" type="password" placeholder="Preencher Senha" name="senha_usuario" required>
 				<input class="input" type="email" placeholder="Preencher email" name="email_usuario" required>
 				<input class="input" type="number" placeholder="Preencher telefone" name="telefone_usuario" required>
 				<button style="color:#ffdb00">Cadastrar</button>
				<label id="aviso">Preenchar os campos, para enviar!<br>	
			</form>
		<?php
 	}
?>

</body>
</html>
