<!DOCTYPE html>
<html>
<head>
	<title>Portal PSF- Contato</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<header>
	
</header>

<h1>Formulario</h1>
<form method="POST" action="contato.php" >
	<label>Cpf....: </label>
	<input type="cpf" name="cpf" required><br><br><br>
	<label>Nome: </label>
	<input type="text" name="nome" required><br><br><br>
	<label>Email.: </label>
	<input type="email" name="email" required><br><br>
	<select class="seletor" name="assunto" required>

		<option value="">Assunto</option>
		<option value="VACINACAO">VACINACAO</option>
		<option value="DICAS SAUDE">DICAS SAUDE</option>
		<option value="ATENDIMENTO">ATENDIMENTO</option>
		
	  </select>
	<button type="submit" name="enviar">Enviar</button>
		
</form><br><br>


<?php
    if(isset($_POST['enviar'])){
        include "conexao.inc";

	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$email= $_POST['email'];
	$assunto = $_POST['assunto'];

	$sql="Insert into tabela_dados_solicitante VALUES(NULL, '$cpf','$nome','$email', '$assunto')";
	$res=mysqli_query($con, $sql);
	$lin=mysqli_affected_rows($con);
	if($lin>0){
		
		echo "$lin registro inserido";
        
	}
	else{
		
		echo "nao inserido";
		
	}

	mysqli_close($con);

	
    }
?>
<a id="link" href="psf_Home.html"><strong>HomePage</strong></a>


</body>
</html>