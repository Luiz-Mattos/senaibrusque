
<form action="?acao=usuario" method="post" name="form1" target="_self">
  <table width="762" border="0">
    <tr>
      <th width="272" valign="top" scope="col"><div align="left"><?
	ob_start();
	include "verifica.php";
?></div></th>
      <th width="480" scope="col"><div align="left"></div>
        <table width="333" height="205" border="0" align="left">
        <tr>
          <th scope="col">Usuario:</th>
          <th scope="col"> <div align="left">
              <input name="usuario" type="text" id="usuario" />
          </div></th>
        </tr>
        <tr>
          <th scope="row">Senha:</th>
          <td><div align="left">
              <input name="senha" type="password" id="senha" />
          </div></td>
        </tr>
        <tr>
          <th scope="row">Nivel:</th>
          <td><div align="left">
              <select name="nivel" id="nivel">
                <option value="1">Administrador</option>
                <option value="2">Usu&aacute;rio Padr&atilde;o</option>
                <option value="3">Restrito</option>
                <option value="0" selected="selected"></option>
              </select>
          </div></td>
        </tr>
        <tr>
          <th colspan="2" scope="row"><div align="center">
              <input type="submit" name="Submit" value="&gt;&gt;&gt;Cadastrar&lt;&lt;&lt;" />
            </div>
              <div align="left"></div></th>
        </tr>
        <tr>
          <th height="10" colspan="2" scope="row"><?

include "config.php";

if($acao==usuario){

	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	$nivel = $_POST["nivel"];
	
	
	$sql = mysql_query("INSERT INTO usuario (usuario, senha, nivel) VALUES (UPPER('$usuario'), md5('$senha'), '$nivel')", $conexao) or die("Erro: " . mysql_error()); // fa&ccedil;o a inser&ccedil;&atilde;o no banco de dados.
	
	if(($sql) > 0){
		echo "Cadastro do usu&aacute;rio completo.";
		}
		else{
			echo "erro ao tentar cadastrar o usu&aacute;rio.";
			}
	}
?></th>
        </tr>
      </table></th>
    </tr>
  </table>
</form>
