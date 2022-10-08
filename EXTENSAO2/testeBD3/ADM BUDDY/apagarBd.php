<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html:charset=utf-8"/>
		<title>Budy PHP - </title>
		
	</head>

	
		
		<style>
		
			body{
				
				background-image:url("fundo.jpg");
				background-repeat:none;
				background-size:cover;
				background-attachment:fixed;
				
			}
		</style>
		
		<a href="ADMHomeBuddy.html" target="_self">Voltar form?</a><br><br>
		<h1>Dados do registro apagado:</h1><br><br>
	</html>


	
<?php


	$vcod=$_POST['cod'];
	$vreg=$_POST['reg'];
	$vcpf=$_POST['cpf'];
	
	if($vreg==1){
		$vreg="Alfenas";
		include "conexao.inc";
		$sql = "delete from tabelacad where cod = $vcod AND cpf = '$vcpf'";
		$res= mysqli_query($con, $sql);
		$lin=mysqli_affected_rows($con);
		if($lin==1){
		
			echo "Apagado cod: ".$vcod."- Regiao: ".$vreg."- CPF: ".$vcpf;
		}
		else
			echo "Nao apagado";
		
		mysqli_close($con);
	}
	
	else if($vreg==2){
		$vreg="Carmo de Minas";
		include "conexao.inc";
		$sql = "delete from tabelacad where cod = $vcod AND cpf = '$vcpf'";
		$res= mysqli_query($con, $sql);
		$lin=mysqli_affected_rows($con);
		if($lin==1){
		
			//echo "Apagado: ".$vcod."".$vreg."".$vcpf;
			echo "Apagado cod: ".$vcod."- Regiao: ".$vreg."- CPF: ".$vcpf;
		}
		else
			echo "Nao apagado";
		
		mysqli_close($con);
	}
	
	else if($vreg==3){
		$vreg="Carvalhópolis";
		include "conexao.inc";
		$sql = "delete from tabelacad where cod = $vcod AND cpf = '$vcpf'";
		$res= mysqli_query($con, $sql);
		$lin=mysqli_affected_rows($con);
		if($lin==1){
		
			//echo "Apagado: ".$vcod."".$vreg."".$vcpf;
			echo "Apagado cod: ".$vcod."- Regiao: ".$vreg."- CPF: ".$vcpf;
		}
		else
			echo "Nao apagado";
		
			mysqli_close($con);

		
	}
	
	else if($vreg==4){
		$vreg="Santa Rita de Caldas";
		include "conexao.inc";
		$sql = "delete from tabelacad where cod = $vcod AND cpf = '$vcpf'";
		$res= mysqli_query($con, $sql);
		$lin=mysqli_affected_rows($con);
		if($lin==1){
		
			//echo "Apagado ".$vcod."".$vreg."".$vcpf;
			echo "Apagado cod: ".$vcod."- Regiao: ".$vreg."- CPF: ".$vcpf;
		}
		else
			echo "Nao apagado";
		
		
			mysqli_close($con);

		
	}
?>	
