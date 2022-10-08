<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<a href="budy.html">Voltar formulario do Buddy Love Cupido do Amor?</a>

	<style type="text/css">
		
		body{

			background:#fc3b75;
		}

	</style>
</body>
</html>


<?php
	
	
	

	$nome=$_POST['nome'];
	$cpf=$_POST['cpf'];
	$tel=$_POST['tel'];
	$regiao=$_POST['regiao'];
		
	if($_POST["regiao"]==1){
			
		$regiao="Alfenas";
	}
	else if($_POST["regiao"]==2){
			
		$regiao="Carmo de Minas";
	}
	else if($_POST["regiao"]==3){
			
		$regiao="Carvalhopolis";
	}
	else if($_POST["regiao"]==4){
			
		$regiao="Santa Rita de Caldas";
	}
				
	
	$perfil=$_POST['perfil'];
		
	if($_POST["perfil"]==1){
			
		$perfil="Nerd";
	}
	else if($_POST["perfil"]==2){
			
		$perfil="Popular";
	}
	else if($_POST["perfil"]==3){
			
		$perfil="Equilibrado";
	}
		
	$sexo=$_POST['sexo'];
	
	
	include "conexao.inc";
	
	echo"<br><br><br>";
	echo "Nome: ".$nome."<br>";
	echo "CPF: ".$cpf."<br>";
	echo "Telefone: ".$tel."<br>";
	echo "Regiao de paquera: ".$regiao."<br>";
	echo "Perfil buscado: ".$perfil."<br>";
	echo "Sexo do parceiro: ".$sexo."<br>";	
		
		
	$sql= "select * from tabelacad";
	$res=mysqli_query($con, $sql);
	$lin=mysqli_num_rows($res);
	
	if($lin<8){
		$sql="insert tabelacad values (NULL, '$nome', '$cpf', '$tel', '$regiao', '$perfil', '$sexo')";
		$res=mysqli_query($con, $sql);
		$li=mysqli_affected_rows($con);
		
		if($li>0){
			echo "ok";
		}
		else{
			
			echo "falha no cadastro";
		}

		
		
		
	}
	else{
			
			echo "falha... Limite atingido... site temporariamente fora do ar";
		}

	
		
	mysqli_close($con);
	
			
	

?>