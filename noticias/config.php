<?

	// declarando as vari�veis de conex�o.
	
	$host = "localhost";
	$bduser = "root";
	$bdsenha = "123456";
	$bd = "novezala";
	
	// fim da declara��o de variaveis.
	
	
	// inicio da conex�o com o banco de dados.
	
		$conexao = mysql_connect($host, $bduser, $bdsenha) // conecto o banco de dados.
			or die("Erro: " .  mysql_error()); //verifico se h� erro na conex�o.
			
		mysql_select_db($bd, $conexao) //ap�s conectar, seleciono o bd a ser usado.
			or die("Erro: " .  mysql_error());
			
	//fim da conexao com o bd.
	
?>