<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
    	body{

    		background-color: #589;
    		color:white;
    	}

    	tr{
    		background-color: red;
    	}

    	tr:hover{
    		background-color: green;
    		cursor:pointer;
    	}
    	a{
    		color:white;
    	}

    </style>
  </head>
  <body>

	   <table border="1">


			<tr>
				<td width="60">codigo<td/>
				<td width="200">nome<td/>
				<td width="100">cidade<td/>
				<td width="200">cep<td/>
				<td width="200">tel<td/>
				<td width="100">area<td/>
			<tr/>

			<?php

				include"conexao.inc";

				$sql="select *from tabelamilitar";
				$res=mysqli_query($con, $sql);
				$lin=mysqli_affected_rows($con);

				echo "Registros identificados: $lin";
        echo "<br><br>";

				while($reg=mysqli_fetch_row($res)){

					$codigo=$reg[0];
					$nome=$reg[1];
					$cidade=$reg[2];
					$cep=$reg[3];
					$tel=$reg[4];
					$area=$reg[5];

					echo "<tr>";
					echo "<td>$codigo<td/><td>$nome<td/><td>$cidade<td/><td>$cep<td/><td>$tel<td/><td>$area<td/>";
					echo "<tr/>";


				}

				mysqli_close($con);






			?>

	   <table/>



      <br><br><br>
	  <a href="menu.html"><em>CLIQUE PARA HomePage</em></a>

  </body>
</html>
