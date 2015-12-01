<html><head><title>Noticia Completa</title></head><body>
<?
include "config.php";

$sql = mysql_query("SELECT `noticia`, `titulo`, `email_autor`, `direcao`, `id` FROM  noticias where id='$id' LIMIT 0,1");

while($busca=mysql_fetch_array($sql)){


$titulo = $busca["titulo"];
$noticia = $busca["noticia"];
$email_autor = $busca["email_autor"];
$direcao = $busca["direcao"];
$id	= $busca["id"];


echo "<table>";
echo "<tr><td witdh='500' align='center' bgcolor='#CCCCCC' valign='middle'>";
echo "<h2><b>$titulo</b></h2>";
echo "</td></tr><tr>";
echo "<td width='500' valign='top'>";
echo "<div align='justify'><font face='verdana' size=2px><b>$noticia</b></font></div>";
echo "</td></tr><tr><td cols='6'>";
echo "<font face='verdana' size='1'><a href=\"mailto:$email_autor\">$email_autor</a></font>";
echo "</td></tr>";
echo "</table>";

}
?>

 
</body></html>
