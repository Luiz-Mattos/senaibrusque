<?
	ob_start();
	if($acao==logar){
		include "config.php";
		
		$usuario = $_POST["usuario"];
		$senha = $_POST["senha"];
		
		$sql = mysql_query("select * from usuario where usuario='$usuario' AND senha=MD5('$senha')");
		$sql2 = mysql_query("select `usuario`, `senha`, `nivel`from usuario where usuario='$usuario' LIMIT 0,1", $conexao);
		$busca = mysql_num_rows($sql);
		$array = mysql_fetch_array($sql2);
		$usuario = $array["usuario"];
		$senha = $array["senha"];
		$nivel = $array["nivel"];
		
		
		if(($busca > 0) && ($array > 0)){
			setcookie("usuario", $usuario);
			setcookie("senha", $senha);
			setcookie("nivel", $nivel);
			header("location: page4.php");
		}
		else{
			echo"Erro ao se logar.";
			}
	}
?>
<html>
<head><title>Login</title></head>
<body>
<table width="771" height="343" border="1" align="center" bordercolor="#CCCCCC" bgcolor="#00FFCC">
  <tr>
    <th scope="col">
<table width="261" border="0" align="center">
  <tr>
    <th scope="col"><h2>Por Favor Identifique-se </h2></th>
  </tr>
</table>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="login.php?acao=logar">
  <table width="241" border="0" align="center">
    <tr>
      <th scope="col">Usuario:</th>
      <th scope="col"><label>
        <div align="left">
          <input name="usuario" type="text" id="usuario" />
        </div>
      </label></th>
    </tr>
    <tr>
      <th scope="row">Senha:</th>
      <td><label>
      <div align="left">
        <input name="senha" type="password" id="senha" />
      </div>
      </label></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><label>
        <div align="right">
          <input type="submit" name="Submit" value="Logar" />
        </div>
      </label></td>
    </tr>
  </table>
</form></th>
  </tr>
</table>

</body>
</html>

