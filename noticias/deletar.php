<?
	ob_start();
	include "verifica.php";
?>
<?


include "config.php";

$sql = mysql_query("select * from noticias limit 30");

while($linha = mysql_fetch_array($sql)){
	$id  = $linha["id"];
	$titulo_res = $linha["inicial"];
	$descricao = $linha["descricao"];
	
	echo "<html><body alink='#CCff33' vlink='#000000'>";
	echo "<form action='deletar_bd.php?id=$id'>";
	echo "<table width='500' height='60' border='0'>";
	echo "<font face='verdana' size='1' color='FFFFFF'>";
	echo "<tr><td rowspan='2'><input <input name=\"id\" type=\"checkbox\" value=\"$id\"></td>";
	echo "<td height='10' bgcolor='#CCCCCC'><div align='left'><b>$titulo_res</b></div></td></tr>";
	echo "<tr><td height='33' bgcolor='#CCffCC'><a href='alterar.php?id=$id' target='_blanck'><div align='justify'>$descricao</div></a></td></tr>";
	echo "</font>";
	}//fechando o while
	echo "</table>";
	echo "<input type='submit' value='Deletar' name='Deletar'>";
	echo "</form>";
	echo "</body>";
	echo "</html>";


mysql_close($conexao);
?>