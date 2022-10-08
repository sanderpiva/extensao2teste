<?php

	include "conexao.inc";
	
	$cod = $_POST['fcod'];
	
	$sql="delete from tabelamilitar where cod = '$cod'";
	$res=mysqli_query($con, $sql);
	$lin=mysqli_affected_rows($con);
	if($lin>0){
		
		echo "apagado $lin";
	}
	else{
		
		echo "nao apagado";
		
	}
	
	
	mysqli_close($con);

	


?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
	<a href="menu.html">HomePage</a
	
  </head>
