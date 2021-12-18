<?php  
  include "conexao_dois.php";
  include "conexao.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Teste de conhecimento</title>

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
  <img style="position:absolute;top:-100px;left:330px;" src="Governo.png">
  <div class="form">
    <h3 style="color:#ffdb00">Auxilio emergercial</h3>
    <p>Esqueçeu a senha? não se preocupe recuperaremos para voce</p>

    <form method="POST">
  	 <input type="email" placeholder="Digite seu e-mail" name="email" required="">
     <input type="password" placeholder="Digite sua senha" name="senha_esqueceu" required="">
      <code>Para recuperar a sua senha digite os campos acima</code>
  	 <button name="botao" value="Atualizar" style="color:#ffdb00">Atualizar</button> 
    </form>
  </div>


  <?php

  if(isset($_POST['botao']))
  {
      $email = $_POST['email'];
      $senha = $_POST['senha_esqueceu'];

      $Comando=$conexao->prepare("SELECT * FROM TB_USUARIO WHERE EMAIL_USUARIO= ? ");   
      $Comando->bindParam(1, $email);

      if ($Comando->execute())
      {
        if ($Comando->rowCount () < 1) 
        { 
          echo "Não existe usuario com esse nome";
        }
        else if(mysqli_query($db,"UPDATE tb_usuario SET senha_usuario='$senha' WHERE email_usuario='$email'"))
        {
          ?>
            <script type="text/javascript">
              alert("Senha mudada com sucesso");
            </script
          <?php
        }
      }
      
      
  }



  ?>
</body>
</html>


  
