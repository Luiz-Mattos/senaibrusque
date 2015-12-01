<style type="text/css">
<!--
a {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000000;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
</style><?
// Sistema para verificar se o usuário já está logado ou não
if(!$HTTP_COOKIE_VARS["usuario"] && !$HTTP_COOKIE_VARS["senha"]){
header("Location: login.php");
}
else{
	include "config.php";
	$sql = mysql_query("select `nome`, `link`, `target`, `nivel` from menu");
	$usuario = $HTTP_COOKIE_VARS["usuario"];
	if($HTTP_COOKIE_VARS["nivel"] == 1){
		echo "Parabens $usuario, você é Administrador.";
		echo "&nbsp;&nbsp;&nbsp;";
		echo "<a href='logoff.php?acao=sair' target='_top'>Logoff</a>";
		echo "<hr>";	
			while($busca = mysql_fetch_array($sql)){
				$nome = $busca["nome"];
				$link = $busca["link"];
				$target = $busca["target"];
				$nivel = $busca["nivel"];
				if($nivel==1){
				echo "<table border=0><tr><td align='left'><div align='left'><a href='$link' target='$target'>$nome</a></div>";
				echo "</td></tr></table>";
			}
		}		
				
	}
	if($HTTP_COOKIE_VARS["nivel"] == 2){
		echo "Parabéns voce é um usuário Normal.";
		echo "&nbsp;&nbsp;&nbsp;";
		echo "<a href='logoff.php?acao=sair' target='_parent'>Logoff</a>";
		echo "<hr>";
		while($busca = mysql_fetch_array($sql)){
				$nome = $busca["nome"];
				$link = $busca["link"];
				$target = $busca["target"];
				$nivel = $busca["nivel"];
				if($nivel==2){
				echo "<table border=0><tr><td align='left'><div align='left'><a href='$link' target='$target'>$nome</a></div>";
				echo "</td></tr></table>";
			}
		}		
	}
		if($HTTP_COOKIE_VARS["nivel"] == 3){
		echo "Você é um usuário restrito.";
		echo "&nbsp;&nbsp;&nbsp;";
		echo "<a href='logoff.php?acao=sair' target='_parent'>Logoff</a>";
		echo "<hr>";
		while($busca = mysql_fetch_array($sql)){
				$nome = $busca["nome"];
				$link = $busca["link"];
				$target = $busca["target"];
				$nivel = $busca["nivel"];
				if($nivel==3){
				echo "<table border=0><tr><td align='left'><div align='left'><a href='$link' target='$target'>$nome</a></div>";
				echo "</td></tr></table>";
			}
		}		
	}
}
?>
