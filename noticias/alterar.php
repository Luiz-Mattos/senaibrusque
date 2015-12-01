<?
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Alterando Noticia</title>
</head>

<body>
<?
		include "config.php";
		
		$sql = mysql_query("select `id`, `inicial`, `descricao`, `noticia`, `titulo`, `email_autor`, `direcao` FROM noticias where id='$id' LIMIT 0,1");
		
		
		while($busca = mysql_fetch_array($sql)){
		
			$id = $busca["id"];
			$inicial = $busca["inicial"];
			$descricao = $busca["descricao"];
			$titulo = $busca["titulo"];
			$noticia = $busca["noticia"];
			$email_autor = $busca["email_autor"];
			$direcao = $busca["direcao"];
			
	
	echo "<form id=\"form1\" name=\"form1\" method=\"post\" action=\"alterar_noticia_db.php?id=$id\">
	<table width=\"835\" height=\"350\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"5\">
    <tr>
      <th width=\"196\" bgcolor=\"#CCCCCC\" scope=\"col\"><div align=\"left\">Titulo Resumido da Noticia: </div></th>
      <th colspan=\"2\" bgcolor=\"#CCCCCC\" scope=\"col\"><label>
      <div align=\"left\">
        <input name=\"inicial_novo\" type=\"text\" id=\"inicial\" size=\"60\" value=\"$inicial\" />
      </div>
      </label></th>
      <th width=\"233\" bgcolor=\"#CCCCCC\"><div align=\"center\">No m&aacute;ximo deve conter 15 caracteres. </div></th>
    </tr>
    <tr>
      <th bgcolor=\"#CCCCCC\" scope=\"row\"><div align=\"left\">Descri&ccedil;&atilde;o da Noticia: </div></th>
      <td colspan=\"2\" bgcolor=\"#CCCCCC\"><label>
        
        <div align=\"left\">
            <textarea name=\"descricao_novo\" cols=\"58\" rows=\"3\" value=\"$descricao\">$descricao</textarea>
          </label>
      </div></td>
      <td bgcolor=\"#CCCCCC\"><div align=\"center\"><strong>No m&aacute;ximo deve conter 100 caracteres. </strong></div></td>
    </tr>
    
    <tr>
      <th colspan=\"4\" scope=\"row\" background=\"../pontinho.gif\"><div align=\"left\"></div></th>
    </tr>
    <tr>
      <th scope=\"row\"><div align=\"left\">Titulo Completo: </div></th>
      <td colspan=\"2\">
        <div align=\"left\">
          <input name=\"titulo_novo\" type=\"text\" id=\"titulo\" size=\"60\" value=\"$titulo\"/>
        </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th rowspan=\"2\" scope=\"row\"><div align=\"left\">Noticia Completa: </div></th>
      <td colspan=\"2\" rowspan=\"2\">
        <div align=\"left\">
          <textarea name=\"noticia_novo\" cols=\"58\" rows=\"30\" id=\"noticia\" value=\"$noticia\">$noticia</textarea>
        </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope=\"row\"><div align=\"left\">E-mail Autor: </div></th>
      <td colspan=\"2\">
        <div align=\"left\">
          <input name=\"email_autor_novo\" type=\"text\" id=\"email_autor\" size=\"60\" value=\"$email_autor\"/>
        </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan=\"2\" scope=\"row\"><div align=\"left\">Deve Aparecer na Pagina inical: </div></th>
      <td width=\"359\"><label>
        <div align=\"left\">
          <select name=\"direcao_novo\" id=\"direcao\">
            <option value=\"sim\">Sim</option>
            <option value=\"nao\">N&atilde;o</option>
            <option value=\"$direcao\" selected=\"selected\">$direcao</option>
          </select>
          </div>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan=\"2\" scope=\"row\">&nbsp;</th>
      <td><label>
        
        <div align=\"right\">
          <input type=\"submit\" name=\"Submit\" value=\"Alterar Noticia\" />
        </div>
      </label></td>
      <td><a href=\"noticias.php\"></a></td>
    </tr>
  </table>";
  echo "</form>";
	}

  
?>
<form id="form1" name="form1" method="post" action="">
</form>
</body>
</html>