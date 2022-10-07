
<?php

	include "conexao.inc";
	
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$email= $_POST['email'];
	$assunto = $_POST['assunto'];
	
	$sql="Insert into tabela_dados_solicitante VALUES(NULL, '$cpf','$nome','$email')";
	$res=mysqli_query($con, $sql);
	$lin=mysqli_affected_rows($con);
	if($lin>0){
		
		echo "inserido $lin";
	}
	else{
		
		echo "nao inserido";
		
	}
	
	mysqli_close($con);

?>
