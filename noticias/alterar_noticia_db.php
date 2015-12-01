<?
	ob_start();

	include "config.php";
		
		$inicial_novo = $_POST["inicial_novo"];//indica o titulo resumido.
		$descricao_novo = $_POST["descricao_novo"];//indica a descriчуo da noticia.
		$titulo_novo = $_POST["titulo_novo"];//informa o titulo completo.
		$noticia_novo = $_POST["noticia_novo"];//informa a noticia por completo.
		$email_autor_novo = $_POST["email_autor_novo"];//informa o e-mail do autor da noticia
		$direcao_novo = $_POST["direcao_novo"];//informar se vai ou nуo a pagina inicil



		

		$sql2 = "UPDATE `noticias` SET id='$id', inicial='$inicial_novo', descricao='$descricao_novo',  noticia='$noticia_novo', titulo='$titulo_novo', email_autor='$email_autor_novo', direcao='$direcao_novo' where id='$id'";
				$erro = mysql_error();
				$consulta = mysql_query($sql2);
				
				if($consulta > 0){
					echo "A Noticia Foi Alterada com Sucesso.";
					header("location: noticias.php");
					}
					else{
						echo "A noticia nуo pode ser atualizada.";
						print ($erro);
						}
				
			

?>