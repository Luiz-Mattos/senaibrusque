
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
<?

include "config.php";

$sql = mysql_query("select * from noticias where direcao = 'sim' limit 3");

while($linha = mysql_fetch_array($sql)){
	$id  = $linha["id"];
	$titulo_res = $linha["inicial"];
	$descricao = $linha["descricao"];
	
	echo "<html><body alink='#CCff33' vlink='#000000'>";
	echo "<table width='170' height='100' border='0'>";
	echo "<font face='verdana' size='1' color='FFFFFF'>";
	echo "<tr><td height='10' bgcolor='#CCCCCC'><div align='center'><b>$titulo_res</b></div></td></tr>";
	echo "<tr><td height='33' bgcolor='#CCffCC'><a href='ver.php?id=$id' target='_blanck'><div align='justify'>$descricao</div></a></td></tr>";
	echo "</font>";
	}//fechando o while
	echo "</table>";
	echo "</body>";
	echo "</html>";


mysql_close($conexao);
?>
