<?php  
	include("conexao.php");
	if(isset($_POST['ok']))
    {
      $novasenha = substr(time(), 0, 6);
    }

    echo substr(time(), 0, 6);
?>


<form action="">
	<input placeholder="Seu Email" name="email" type="text">
	<input name="ok" value="ok" type="submit"> 
</form>
    

