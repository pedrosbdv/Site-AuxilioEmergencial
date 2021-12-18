<?php 

$SenhaAdm = $_POST["senha_esqueceu"];
$Id = $_SESSION['idAdm'];

include "conexao.php";
try
{
  
    $AtualizarNovo=$conexao->prepare("UPDATE TB_USUARIO SET SENHA_USUARIO=? WHERE ID_USUARIO=?");
    if ($_POST["senha_esqueceu"]=="") $SenhaAdm = $_SESSION['senhaAdm'] ; 
    
    //Prepara para atualização
    $AtualizarNovo->bindParam(1, $SenhaAdm);
    $AtualizarNovo->bindParam(2, $Id);

    if ($AtualizarNovo->execute())
    {
      if ($AtualizarNovo->rowCount() >0) 
      {
        
        $SelecaoNova=$conexao->prepare("SELECT ID_USUARIO, SENHA_USUARIO FROM TB_USUARIO
        WHERE SENHA_USUARIO=?");   
        $SelecaoNova->bindParam(1, $SenhaAdm);
        if ($SelecaoNova->execute())
        {
          if ($SelecaoNova->rowCount() >0) 
          { 
            while ($Linha = $SelecaoNova->fetch(PDO::FETCH_OBJ)) 
            {
              $id = $Linha->ID_USUARIO;
              $_SESSION['idAdm'] = $id;
                
              $senha = $Linha->SENHA_USUARIO;
              $_SESSION['senhaAdm'] = $senha;

              $_SESSION['controleAdm'] = "alterado";
              header('location:login.php');
            }
                        
          }
        }
      }
    }
  
} 
catch (PDOException $erro)
{
    echo"Erro" . $erro->getMessage();
}
      
?>