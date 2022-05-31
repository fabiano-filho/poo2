<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <meta charset="UTF-8">
        <title>Programação Orientada a Objetos II - PHP</title>
    </head>
    <body>
        <h1>Hello, World!</h1>
    </body>
</html>

<?php
require_once './class/Pessoa.php';

try {
    $query = Pessoa::getPessoa();
    while($registro = $query -> fetch()) {
        echo $registro['nome'] . '<br>';
    }
    
} catch(PDOException $e) {
    echo 'Erro ao conectar: ' . $e -> getMessage();
}

//include_once "./class/DataBase.php";
//
//try {
//    $db = new DataBase();
//    $query = $db -> BancoLink -> query("SELECT * from pessoa");
//    while($registro = $query -> fetch()) {
//        echo $registro['nome'] . '<br>';
//    }
//    
//} catch(PDOException $e) {
//    echo 'Erro ao conectar: ' . $e -> getMessage();
//}


// antigo
//include_once "./conexao.php";
//
//try {
//    $nome = 'f';
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