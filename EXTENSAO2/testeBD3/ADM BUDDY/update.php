<html>
	<meta charset="utf-8">

	<body>
	
		<style>
			
			body{
				
				background:#23060a38;
			}
		
		</style>
		
		
<?php

	$cod=$_POST['fcod'];
	$nome=$_POST['fnome'];
	$cpf=$_POST['fcpf'];
	$telefone=$_POST['ftelefone'];
	$regiao=$_POST['fregiao'];
	$perfil=$_POST['fperfil'];
	$sexo=$_POST['fsexo'];
	
	
	if($nome!=""){
		
		include "conexao.inc";
	
		$sql="update tabelacad set nome='$nome' where cod=$cod";
		$res=mysqli_query($con, $sql);
		$li=mysqli_affected_rows($con);
		if($li>0){
			echo "ok cod: ".$cod." nome: ".$nome;
			echo"<br>";
		}
		
		else{
			
			echo "nao houve alteração para categoria nome... ";
			echo"<br>";
		}
		
		mysqli_close($con);

		
	}
	
	if($cpf!=""){
		
		include "conexao.inc";
	
		$sql="update tabelacad set cpf='$cpf' where cod=$cod";
		$res=mysqli_query($con, $sql);
		$li=mysqli_affected_rows($con);
		if($li>0){
			echo "ok cod: ".$cod." cpf: ".$cpf;
			echo"<br>";
		}
		
		else{
			
			echo "nao houve alteração para categoria cpf... ";
			echo"<br>";
		}
		
		mysqli_close($con);

		
	}
	
	if($telefone!=""){
		
		include "conexao.inc";
	
		$sql="update tabelacad set telefone='$telefone' where cod=$cod";
		$res=mysqli_query($con, $sql);
		$li=mysqli_affected_rows($con);
		if($li>0){
			echo "ok cod: ".$cod." telefone: ".$telefone;
			echo"<br>";
		}
		
		else{
			
			echo "nao houve alteração para categoria telefone... ";
			echo"<br>";
		}
		
		mysqli_close($con);

		
	}
	
	if($regiao!=""){
		
		include "conexao.inc";
	
		$sql="update tabelacad set regiaodeProcura='$regiao' where cod=$cod";
		$res=mysqli_query($con, $sql);
		$li=mysqli_affected_rows($con);
		if($li>0){
			echo "ok cod: ".$cod." regiao: ".$regiao;
			echo"<br>";
		}
		
		else{
			
			echo "nao houve alteração para categoria regiao... ";
			echo"<br>";
		}
		
		mysqli_close($con);

		
	}

	if($perfil!=""){
		
		include "conexao.inc";
	
		$sql="update tabelacad set perfil='$perfil' where cod=$cod";
		$res=mysqli_query($con, $sql);
		$li=mysqli_affected_rows($con);
		if($li>0){
			echo "ok cod: ".$cod." perfil: ".$perfil;
			echo"<br>";
		}
		
		else{
			
			echo "nao houve alteração para categoria perfil... ";
			echo"<br>";
		}
		
		mysqli_close($con);

		
	}

	if($sexo!=""){
		
		include "conexao.inc";
	
		$sql="update tabelacad set sexo='$sexo' where cod=$cod";
		$res=mysqli_query($con, $sql);
		$li=mysqli_affected_rows($con);
		if($li>0){
			echo "ok cod: ".$cod." sexo procurado: ".$sexo;
			echo"<br>";
		}
		
		else{
			
			echo "nao houve alteração para categoria sexo... ";
			echo"<br>";
		}
		
		mysqli_close($con);

		
	}
	echo"<br>";
	echo"<a href='ADMHomeBuddy.html'>Voltar formulário?</a>";

?>
		
	
	</body>
	

</html>



