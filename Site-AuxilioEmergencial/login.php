
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">

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
            include "logado.php";
        }
        if ($Botao =="Cadastrar")
        {
            session_start();
            $_SESSION["controleAdm"] = "novo";
            //Será marcado como novo para sabermos que o usuario não tem cadastro
            header('location:cadastro_usuario.php');
        }
    }
    else 
    {
        ?>
             <img style="position:absolute;top:-100px;left:330px;" src="Governo.png">
            <div class="form">
            <h3 style="color:#ffdb00">Auxilio emergercial</h3>
            <p>Faça o login caso ja tenha, ou então faça o cadastro.</p>

            <FORM action="login.php?valor=enviado" method ="POST">
                 
                <INPUT type="text" placeholder="Preencher Usuario" name="nome_usuario"><BR><p>

               
                <INPUT type="password" placeholder="Preencher Senha" name="senha_usuario"><BR><p>

                <button name="Botao" value="Cadastrar" style="color:#ffdb00">Cadastrar</button> <br><br>
                <button name="Botao" value="Logar" style="color:#ffdb00">Logar</button> <br>
                <a href="esqueceu_senha.php"><label style="cursor: pointer;"> Esqueçeu a senha? </label></a>
            </FORM>
        <?php 

    }
?>
    
      
  
</body>
</html>