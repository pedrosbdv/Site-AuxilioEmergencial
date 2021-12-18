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
	session_start();
	
	if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado')) 
	{
	 
	  $Nome = $_POST["nome_aluno"];
	  $Escola = $_POST["escola_aluno"];
	  $RM = $_POST["rm_aluno"];
	  $Cidade = $_POST["cidade_aluno"];
	  $Estado = $_POST["estado_aluno"];

	  	include "conexao.php";
	  
	  	$Comando=$conexao->prepare("INSERT INTO TB_CADASTRO (NOME_ALUNO, ESCOLA_ALUNO, RM_ALUNO, CIDADE_ALUNO, ESTADO_ALUNO) VALUES (?, ?, ?, ?, ?)");

	  	$Comando->bindParam(1, $Nome);
	  	$Comando->bindParam(2, $Escola);
	  	$Comando->bindParam(3, $RM);
	  	$Comando->bindParam(4, $Cidade);
	  	$Comando->bindParam(5, $Estado);

	  	if ($Comando->execute())
    	{
        	if ($Comando->rowCount () >0) 
        	{
         		echo "<script> alert('Cadastro Realizado com Sucesso!')</script>"; 
                                  
            	$Nome = null; 
 				$Eescola = null;
 				$RM = null;
 				$Cidade = null;
 				$Estado = null;
 				$_SESSION["controleAdm"] == "cadastrado";

 				header('location:questionario.html');
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
			<p>Siga os passo abaixo e se cadastre e receba o auxilio emergencial.</p>

 			<form name="form1" action="cadastro.php?valor=enviado" method="POST">
 			
  			<input class="input" type="text" placeholder="Preencher Nome" name="nome_aluno" required>
 			
  			<input class="input" type="text" placeholder="Preencher Escola" name="escola_aluno" required>
 			
  			<input class="input" type="number" placeholder="Preencher RM" name="rm_aluno" required>
 			
 			<div class="Estado">
				<label for="cars">Escolha o estado:</label>
  					<select id="Estate" name="estado_aluno">
    					<option value="São Paulo">São Paulo</option>
  					</select>
  			</div>
 			
 			<div class="Cidade">
				<label for="cars">Escolha a cidade:</label>
  					<select id="City" name="cidade_aluno">
    					<option value="Sao Bernado">São Bernado</option>
    					<option value="Santo Andre">Santo Andre</option>
  					</select>
  			</div>

 			<a href="questionario.html"><button type="submit" style="color:#ffdb00">Cadastrar</button></a> 
			
	
			<label id="aviso">Preenchar os campos, para enviar!<br>	
 
 			
			</form>
		<?php
	}
?>
</body>
</html>



