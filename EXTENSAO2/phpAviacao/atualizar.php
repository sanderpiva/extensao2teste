<?php

	include"conexao.inc";

?>



<?php

	//include "conexao.inc";

	$cod = $_POST['fcod'];
	$nome = $_POST['fnome'];
	$cidade = $_POST['fcidade'];
	$cep = $_POST['fcep'];
	$tel = $_POST['ftel'];
	$area = $_POST['farea'];
	
	
	if($nome!=""){
		$sql="UPDATE tabelamilitar set nome='$nome'  where cod = '$cod'";
		$res=mysqli_query($con, $sql);
		$lin=mysqli_affected_rows($con);
		if($lin>0){

			echo "atualizado nome $lin";
			echo"<br>";
		}
		else{

			echo "nao atualizado nome";
			echo"<br>";

		}

		
		
	}
	
	if($cidade!=""){
		
		$sql="UPDATE tabelamilitar set cidade='$cidade'  where cod = '$cod'";
		$res=mysqli_query($con, $sql);
		$lin=mysqli_affected_rows($con);
		if($lin>0){

			echo "atualizado cidade $lin";
			echo"<br>";
		}
		else{

			echo "nao atualizado cidade";
			echo"<br>";

		}

		
		
	}
	
	if($cep!=""){
		$sql="UPDATE tabelamilitar set cep='$cep'  where cod = '$cod'";
		$res=mysqli_query($con, $sql);
		$lin=mysqli_affected_rows($con);
		if($lin>0){

			echo "atualizado cep $lin";
			echo"<br>";
		}
		else{

			echo "nao atualizado cep";
			echo"<br>";

		}

		
		
		
	}
	
	
	if($tel!=""){
		
		$sql="UPDATE tabelamilitar set tel='$tel'  where cod = '$cod'";
		$res=mysqli_query($con, $sql);
		$lin=mysqli_affected_rows($con);
		if($lin>0){

			echo "atualizado tel $lin";
			echo"<br>";
		}
		else{

			echo "nao atualizado tel";
			echo"<br>";

		}

		
		
	}
	
	if($area!=""){
		$sql="UPDATE tabelamilitar set area='$area'  where cod = '$cod'";
		$res=mysqli_query($con, $sql);
		$lin=mysqli_affected_rows($con);
		if($lin>0){

			echo "atualizado area $lin";
			echo"<br>";
		}
		else{
			
			echo "nao atualizado area";
			echo"<br>";

		}

		
		
		
	}
	
	
	
	

?>

<?php
	
	mysqli_close($con);

?>


<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
	<a href="menu.html">HomePage</a
	
  </head>
