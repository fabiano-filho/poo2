<?php
require_once 'db/DataBase.php';

class Livro {

    public static function getLivros(){
        $db = new DataBase();
        $sql = "SELECT * FROM livro";
        return $db -> query($sql);
    }

    public static function getLivro($cod_livro){
        $db = new DataBase();
        $sql = "SELECT * FROM livro WHERE Id=$cod_livro";
        return $db -> query($sql);
    }

    public static function Insert($Titulo, $Autor, $Isbn, $Editora, $QtdPaginas){
        $db = new DataBase();
        $sql = "INSERT INTO livro(LIV_TITULO, LIV_AUTOR, LIV_COD_ISBN, LIV_EDITORA, LIV_PAGINAS)".
        "VALUES('$Titulo', '$Autor','$Isbn', '$Editora', '$QtdPaginas')";
                
        return $db -> SqlDml($sql);
    }
}