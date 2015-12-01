<?

	// declarando as variбveis de conexгo.
	
	$host = "localhost";
	$bduser = "root";
	$bdsenha = "123456";
	$bd = "novezala";
	
	// fim da declaraзгo de variaveis.
	
	
	// inicio da conexгo com o banco de dados.
	
		$conexao = mysql_connect($host, $bduser, $bdsenha) // conecto o banco de dados.
			or die("Erro: " .  mysql_error()); //verifico se hб erro na conexгo.
			
		mysql_select_db($bd, $conexao) //apуs conectar, seleciono o bd a ser usado.
			or die("Erro: " .  mysql_error());
			
	//fim da conexao com o bd.
	
?>