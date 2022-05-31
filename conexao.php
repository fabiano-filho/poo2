<!DOCTYPE html>
<?php
define('DSN', 'mysql');
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'admin');
define('BANCODEDADOS', 'poo2');

try {
    $conexao = new PDO(DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS, USUARIO, SENHA);
    
} catch(PDOException $e) {
    echo 'Erro ao conectar: ' . $e -> getMessage();
}
//try {;
//    $nome = 'f';
//    $conexao = new PDO(DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS, USUARIO, SENHA);
//    $query = $conexao -> prepare("SELECT * from pessoa "
//            . "WHERE tbl_pessoa_nome like ?");
//    $query ->bindValue(1, $nome . '%');
//    $query -> execute();
//    while($registro = $query -> fetch()) {
//        echo $registro['tbl_pessoa_nome'] . '<br>';
//    }
//    
//} catch(PDOException $e) {
//    echo 'Erro ao conectar: ' . $e -> getMessage();
//}
?>