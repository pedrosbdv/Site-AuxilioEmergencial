<!DOCTYPE html>
<html>
<head>
	<title>Receber</title>
	<!--Initial tags meta-->
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="receber.css">

    <!-- Import Google Icons Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="Imagens/.png">
    <script src="https://kit.fontawesome.com/24c5e7c381.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
    
</head>

<body>
    <img style="position:absolute;top:-100px;left:330px;" src="Governo.png">
    <div class="form">
      <p>Preencha os dados abaixo para receber o deposito (Caso não tenha clique em <a href="sem_conta.html">não tenho uma conta bancaria)</a></p>

        <form action="receber.php?valor=verificar" method="post">
        	<div class="Agencia">
				    <label for="agency">Escolha sua agencia:</label>
  					<select name="estado_aluno">
    					<option value="Banco do Brasil">Banco do Brasil</option>
    					<option value="Santander">Santander</option>
    					<option value="Itau">Itau</option>
    					<option value="Bradesco">Bradesco</option>
    					<option value="Caixa Economica Federal">Caixa Economica Federal</option>
  					</select>
  			</div>
  			<br>
  			<input class="input" type="text" placeholder="Preencher Nome" name="nome" required="">
  			<input class="input" type="text" placeholder="Preencher CPF" name="cpf" required="">
        <input class="receber" value="Verificar" placeholder="Receber" type="submit">
        </form>
        
         
    </div>

<?php
    if(isset($_REQUEST['cpf']) and ($_REQUEST['valor'] == 'verificar'))
    {
      if (isset ($_POST ["cpf"] ))
        {
          $CPF = $_POST["cpf"];
          $D11 = substr ($CPF,0,1)*11;
          $D10 = substr ($CPF,1,1)*10;
          $D9 = substr ($CPF,2,1)*9;

          $D8 = substr ($CPF,4,1)*8;
          $D7 = substr ($CPF,5,1)*7;
          $D6 = substr ($CPF,6,1)*6;

          $D5 = substr ($CPF,8,1)*5;
          $D4 = substr ($CPF,9,1)*4;
          $D3 = substr ($CPF,10,1)*3;

          $D2 = substr ($CPF,12,1)*2;
          $C1 = Substr ($CPF,13,1);

          $SOMA = ($D11 + $D10 + $D9 + $D8 + $D7 + $D6 + $D5 + $D4 + $D3 +$D2); //echo  ($SOMA);
          $RESTO = $SOMA % 11; //RESTO DA DIVISAO POR 11
          $VER = 11 - $RESTO; // vERIFICADOR  11
          $X = 0;  

          if ($CPF == '000.000.000-00'){ $X = 1;
          ECHO ('O CPF : ' .$CPF. ' os numeros digitados não são válidos!');}  
   
          if ($CPF == '111.111.111-11'){ $X =1;  
          ECHO ('O CPF : ' .$CPF. ' os numeros digitados não são válidos!');}  
         
          if ($CPF == '222.222.222-22'){ $X =1;
          ECHO ('O CPF : ' .$CPF. ' os numeros digitados não são válidos!');}  
  
          if ($CPF == '333.333.333-33'){ $X =1;
          ECHO ('O CPF : ' .$CPF. ' os numeros digitados não são válidos!');}  
  
          if ($CPF == '444.444.444-44'){ $X =1;
          ECHO ('O CPF : ' .$CPF. ' os numeros digitados não são válidos!');}  
  
          if ($CPF == '555.555.555-55'){ $X =1;
          ECHO ('O CPF : ' .$CPF. ' os numeros digitados não são válidos!');}  
  
          if ($CPF == '666.666.666-66'){ $X =1;
          ECHO ('O CPF : ' .$CPF. ' os numeros digitados não são válidos!');}  
  
          if ($CPF == '777.777.777-77'){ $X =1;
          ECHO ('O CPF : ' .$CPF. ' os numeros digitados não são válidos!');}  
  
          if ($CPF == '888.888.888-88'){ $X =1;
          ECHO ('O CPF : ' .$CPF. ' os numeros digitados não são válidos!');}  
        
          if ($CPF == '999.999.999-99'){ $X =1;
          ECHO ('O CPF : ' .$CPF. ' os numeros digitados não são válidos!');}  
  
          if ($VER >= 10) $VER = 0;
          
          if ($C1 == $VER && $X!= 1)
          {
            ECHO ('O CPF : ' .$CPF. ' é verdadeiro!');
          }
          else if ($X!= 1)
          {
           ECHO ('O CPF : ' .$CPF. ' é falso!');
          }
        }
    }

?>

</body>

</html>