
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html:charset=utf-8"/>
		<title>Budy PHP - </title>
		
	</head>

	<body>
		
		<style>
			
			body{

				background-color: #7fb;


			}
			
			table{
			

				color:white;
				cursor:pointer;
				font-family:calibri;
			}
			
			
				
			td:hover{
				
				background:#84f;
				color:black;
				font-weight:bold;
			
			}
			
			tr{
				
				background:blue;
				font-weight:bold;
				
			}
			
			tr:hover{
				
				background:#5d6;
				color:black;
				fonr-weight:bold;
			}
		
		</style>
		
		<table border="0.5">
			
			<tr>
				<td width="20" align="center">COD</td>
				<td width="200" align="center">NOME</td>
				<td width="200" align="center">CPF</td>
				<td width="200" align="center">TELEFONE</td>
				<td width="200" align="center">REGIAO DE BUSCA</td>
				<td width="200" align="center">PERFIL</td>
				<td width="20" align="center">SEXO DO PARCEIRO(A)
			<tr/>
			
			
			
					
			<?php
	
				include "conexao.inc";
				
				//$perfil = $_POST['perfil'];
				//$cidade = $_POST['cidade'];
					
				$sql="select * from tabelacad";
				$res=mysqli_query($con, $sql);
				
				while($reg=mysqli_fetch_row($res)){
					
					$cod=$reg[0];
					$nome=$reg[1];
					$cpf=$reg[2];
					$tel=$reg[3];
					$rpr=$reg[4];
					$perfil=$reg[5];
					$sexo=$reg[6];
					
					echo "<tr>";
					echo "<td>$cod<td>$nome<td/>$cpf<td/>$tel<td/>$rpr<td/>$perfil<td/>$sexo";
					echo "</tr>";
					echo "<tr>";
					
					
					
				}
					
				mysqli_close($con);
					
					

				
				
			?>
			
			
			
		<table/>
		
			<a style="font-family: calibri" href="ADMHomeBuddy.html" target="_self">Voltar formulario</a>
			
	</body>

</html>	