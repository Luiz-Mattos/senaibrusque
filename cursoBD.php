<?php
//Faz a requisição de dados paraconexão com o BD
if ($_SERVER['SERVER_ADDR'] == '127.0.0.1')
    require_once 'cadastro/dbconfig.php';
else
    require_once 'cadastro/dbconfigHostinger.php';
/*
 * Conexão com o banco de dados 
 */
try {//Criação do objeto $conn - conexão
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Conectado ao banco $dbname em $host com sucesso.";
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco $dbname :" . $pe->getMessage());
}
/**
 * Função que converte uma data no formato MySQL
 * AAAA-MM-DD HH:II:SS -> DD/MM/AAAA HH:II:SS
 * para o formato PHP
 * @param type $dataMySQL
 * @return type $dataPHP
 */
function converteDataMySQLPHP($dataMySQL) {
    $dataPHP = $dataMySQL;
    if ($dataMySQL) {
        $dataPHP = date('d/m/Y G:i:s', strtotime($dataMySQL));
    }
    return $dataPHP;
}
$id = $_GET['id'];
        $sql = "SELECT n.titulo,n.conteudo,n.dtCadastro,a.nome from noticia n inner join autor a using(idautor) where id = '$id'";

        
        
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        while ($r = $q->fetch()){
            $titulo = $r['titulo'];
            $dtCadastro = converteDataMySQLPHP($r['dtCadastro']);
            $autor = $r['nome'];
            $conteudo = $r['conteudo'];
        }


?>
<div class="modal-dialog">

    <!-- conteudo do modal -->

    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><?= $_GET['$titulo']?></h4>
        </div>
        <div class="modal-body">

            <time class="h4"><?= $dtCadastro; ?></time>
            <p>Autor: <?= $autor;?></p>
            <?= utf8_decode($conteudo);?>

            <p><?= $_GET['$conteudo']?></p>
            <p><?= $_GET['$conteudo']?></p>
            <p><?= $_GET['$conteudo']?></p>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
    </div>

</div>