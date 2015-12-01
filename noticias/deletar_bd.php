<?

include "config.php";

$sql = "DELETE FROM noticias where id='$id'";

$consulta = mysql_query($sql);

$erro = mysql_error();

if($consulta > 0){
	echo "Noticia Excluida com sucesso.";
	echo "<hr>";
	echo "<a href='noticias.php'>Voltar a Pagina de Noticias.</A>";
	}
	else{
		echo "Ocorreu um erro";
		print($erro);
	}


?>