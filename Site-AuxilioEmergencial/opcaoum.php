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

   	<style type="text/css">
   		.tabela
   		{
   			color: green;
   			font-weight: bold;
   			background-color: yellow;
   			margin-top: 400px;

   		}
   	</style>

</head>
<body>

	<img style="position:absolute;top:-100px;left:330px;" src="Governo.png">
	<?php

		include "conexao.php";

 		//Consulta no banco de dados
		
		//Carrega a tabela
		$Matriz=$conexao->prepare("select * FROM TB_USUARIO");
		$Matriz->execute();

		echo "<center>";
		echo "<table border=1 class=tabela>";
		echo "</center>";

		echo "<tr>";
		echo "<td> Id Contato</td>";
		echo "<td> Nome do Usuario</td>";
		echo "<td> Senha do Usuario</td>";
		echo "<td> Email do Usuario</td>";
		echo "<td> Telefone do Usuario</td>";
		echo "<td> Estado do Usuario</td>";
		echo "</tr>";

		while ($Linha = $Matriz->fetch(PDO::FETCH_OBJ)) 
		{

			$idUsuario = $Linha->ID_USUARIO;
			$nomeUsuario = $Linha->NOME_USUARIO;
			$senhaUsuario = $Linha->SENHA_USUARIO;
			$emailUsuario = $Linha->EMAIL_USUARIO;
			$teleUsuario = $Linha->TELEFONE_USUARIO;
			$estadoUsuario = $Linha->state;
		    
		    echo "<tr>";
		    echo "<td>".$idUsuario ." </td>";
		    echo "<td>".$nomeUsuario ." </td>";
		    echo "<td>".$senhaUsuario ."</td>";
		    echo "<td>".$emailUsuario ." </td>";
		    echo "<td>".$teleUsuario ." </td>";
		    echo "<td>".$estadoUsuario ."</td>";
		    echo "</tr>";
		}

		echo "</table>";
  	?>

</body>
</html>