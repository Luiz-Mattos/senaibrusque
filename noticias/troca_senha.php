<?
	ob_start();
	
	if(acao==trocar){
		include "config.php";
		
		$senha = $_POST["senha"];
		$senha_nova = $_POST["senha_nova"];
		$confirma_senha = $_POST["confirma_senha"];
		$erro =0;
		
		$sql = "select `senha` from usuarios where senha='$senha'" ;
		$consulta = mysql_query($sql);`
		$sql_1 = mysql_query("select `id`, `usuario`, `senha` from usuarios LIMIT 0,1");
		
		while($busca = mysql_fetch_array($sql_1)){
		$id = $busca["id"];
		$usuario = $busca["usuario"];
		$senha = $busca["senha"];
		
		if($senha_nova != $confirma_senha){
			echo "A senha não confere com a confirmação de Senha.<br>";
			$erro +=1;
			}
		if(strlen($senha_nova < 5)){
			echo "Sua nova senha deve ser maior que 5 caracteres.<br>";
			$erro +=1;
			}
		if($senha_nova == $senha){
			echo "Você deve escolhar uma senha diferenta da atual.<br>";
			$erro +=1;
			}
		if($erro !=0){
			echo "$erro";	
			}
		if($consulta >0){
			if($erro ==0){
				$sql2 = mysql_query("update `usuarios` set id='$id' senha=MD5('$senha_nova') where id='$id'");
				if($sql2 > 0){
					echo "Senha Alterada";
					}
					else{
						echo "senha não pode ser alterada";
						}
					}
				}
			}
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Troca de Senha</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="troca_senha.php?acao=trocar">
  <table width="400" border="0">
    <tr>
      <th width="156" scope="col"><div align="left">Senha:</div></th>
      <th width="234" scope="col"><label>
        <div align="left">
          <input name="senha" type="text" id="senha" />
          </div>
      </label></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">Senha Nova: </div></th>
      <td><div align="left">
        <input name="senha_nova" type="text" id="senha_nova" maxlength="12" />
      </div></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Confirma Senha Nova: </div></th>
      <td><div align="left">
        <input name="confirma_senha" type="text" id="confirma_senha" maxlength="12" />
      </div></td>
    </tr>
    <tr>
      <th scope="row"><div align="left"></div></th>
      <td><label>
        <input type="submit" name="Submit" value="Trocar" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
