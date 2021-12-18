<?php 
// session_start inicia a sessão

// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['nome_usuario'];
$senha = $_POST['senha_usuario'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.

include "conexao.php";
 
// A variavel $result pega as varias $login e $senha, faz uma 
//pesquisa na tabela de usuarios

$Comando=$conexao->prepare("SELECT ID_USUARIO, NOME_USUARIO, SENHA_USUARIO FROM TB_USUARIO 
	WHERE NOME_USUARIO=? AND SENHA_USUARIO=?");		
    $Comando->bindParam(1, $login);
    $Comando->bindParam(2, $senha);
   
    if ($Comando->execute())
    {
      
      if ($Comando->rowCount () >0) 
      {	
          while ($Linha = $Comando->fetch(PDO::FETCH_OBJ)) 
          {
            $id = $Linha->ID_USUARIO;
            $_SESSION['idAdm'] = $id;

            $nome = $Linha->NOME_USUARIO;
            $_SESSION['nome'] = $nome;

            $senha = $Linha->SENHA_USUARIO;
            $_SESSION['senha'] = $senha;
			
			     header('location:cadastro.php');
          }
		  }
	    else
	    {
        
  			unset ($_SESSION['controle']);
        
        echo "<script> alert('Usuário e/ou senha não confere!')</script>"; 
        
        echo "<A href=\"login.php\">Retornar</A>";
   		}
  	}
?>