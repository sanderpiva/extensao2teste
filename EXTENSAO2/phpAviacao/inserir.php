<?php

	include "conexao.inc";
	
	$cod = $_POST['fcod'];
	$nome= $_POST['fnome'];
	$cidade= $_POST['fcidade'];
	$cep= $_POST['fcep'];
	$tel= $_POST['ftel'];
	$area= $_POST['farea'];
	
	$sql="Insert into tabelamilitar VALUES('$cod', '$nome','$cidade','$cep','$tel','$area')";
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

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
	<a href="menu.html">HomePage</a
	
  </head>
