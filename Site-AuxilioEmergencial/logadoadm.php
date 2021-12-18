<?php 
// session_start inicia a sessão

// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['nome_ad'];
$senha = $_POST['senha_ad'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.

include "conexao.php";

// A variavel $result pega as varias $login e $senha, faz uma 
//pesquisa na tabela de usuarios

$Comando=$conexao->prepare("SELECT ID_ADMIN, NOME_ADMIN, SENHA_ADMIN FROM TB_ADMINISTRADOR
	WHERE NOME_ADMIN=? AND SENHA_ADMIN=?");		
    $Comando->bindParam(1, $login);
    $Comando->bindParam(2, $senha);

    if ($Comando->execute())
    {
      
      if ($Comando->rowCount () >0) 
        {	
          while ($Linha = $Comando->fetch(PDO::FETCH_OBJ)) 
          {
            $id = $Linha->ID_ADMIN;
            $_SESSION['idAdm'] = $id;

            $nome = $Linha->NOME_ADMIN;
            $_SESSION['nome'] = $nome;

            $senha = $Linha->SENHA_ADMIN;
            $_SESSION['senha'] = $senha;
			
			header('location:Opcoes_admistrador.php');
          }
		}
		else
	    {
        
  			unset ($_SESSION['controle']);
        
	        echo "<script> alert('Usuário e/ou senha não confere!')</script>"; 
	        
	        echo "<A href=\"login_admistrador.php\">Retornar</A>";
   		}
  	}
?>