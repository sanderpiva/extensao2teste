<?php

	if($_POST['senha']=="abc"){
		
		
		header("Location: ADMHomeBuddy.html");
		
	}
	
	else{
		echo "<br>";
		echo "Senha Errada";
		echo "<br><br>";
		echo "<a href='HomeADM.html'>Voltar<a/>";
	}


?>