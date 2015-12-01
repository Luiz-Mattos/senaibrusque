<?

include "config.php";

$inicial = $_POST["inicial"];//indica o titulo resumido.
$descricao = $_POST["descricao"];//indica a descrição da noticia.
$titulo = $_POST["titulo"];//informa o titulo completo.
$noticia = $_POST["noticia"];//informa a noticia por completo.
$email_autor = $_POST["email_autor"];//informa o e-mail do autor da noticia
$direcao = $_POST["direcao"];//informar se vai ou não a pagina inicil


$sql = mysql_query("insert into noticias(inicial, descricao, titulo, noticia, email_autor, direcao) values('$inicial', '$descricao', '$titulo', '$noticia', '$email_autor', '$direcao')", $conexao) or die("Error: " . mysql_error());

	if(($sql) > 0){
	$pausa = sleep(10);
		echo "Noticia inserida com sucesso.";
		echo "<a href='noticias.php'>Ver Todas as Noticias</a>";
		}
		else{
			echo "Erro ao tentar cadastrar a noticia.";
			}
			
mysql_close($conexao);
?>