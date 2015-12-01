<?

if($acao == sair){
setcookie("usuario");
setcookie("senha");
header("location: login.php");
}

?>