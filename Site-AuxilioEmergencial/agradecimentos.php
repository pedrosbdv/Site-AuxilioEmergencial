<?php

include "conexao_dois.php";

 //Consulta no banco de dados
 $sql = "SELECT * FROM tb_usuario ";
 $retorno = mysqli_query($db, $sql); 

 if(($retorno) and ($retorno->num_rows !=0))
 {
 	while($row_usuario = mysqli_fetch_assoc($retorno))
 	{
 		echo $row_usuario['state']; "<br>";

 		if($row_usuario['state'] == "Aprovado" )
 		{
 			header('location:aprovado.php');
 		}
 		else if ($row_usuario['state'] == "Reprovado")
 		{
 			header('location:reprovado.php');
 		}
 		else
 		{

 		}
 	}
 }
 else
 {
 	echo "Nada foi encontrado";	
 }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Agradecimentos</title>
	<!--Initial tags meta-->
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="Questionario.css">

    <!-- Import Google Icons Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="Imagens/.png">
    <script src="https://kit.fontawesome.com/24c5e7c381.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
    
</head>

<body>

	<img style="position:absolute;top:-100px;left:330px;" src="Governo.png">
	<div class="form">
		<p class="analise">Voce solicitou o auxilio emergencial, pois então nos iremos analisar o seu caso, para saber se voce esta dentro dos padrões para receber o auxilio. Se for o caso, uma mensagem sera enviada no seu celular indicando que voce podera receber, caso ao contrario não</p>
		<Label style="font-size: 20px; color: red"> Voce está em analise ....</Label><br>
		<img style="width: 150px; height: 150px;" src="carregandoo.gif">
	</div>
</body>

</html>
	