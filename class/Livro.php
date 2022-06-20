<?php
require_once 'db/DataBase.php';

class Livro {

    public static function getLivros(){
        $db = new DataBase();
        $sql = "SELECT * FROM livros";
        return $db -> query($sql);
    }

    public static function getLivro($cod_livro){
        $db = new DataBase();
        $sql = "SELECT * FROM livros WHERE Id=$cod_livro";
        return $db -> query($sql);
    }

    public static function insert($Titulo, $Autor, $Isbn, $Editora, $QtdPaginas){
        $db = new DataBase();
        $sql = "INSERT INTO livros(titulo_livro, autor_livro, cod_isbn, nome_editora, qtd_paginas)".
        "VALUES('$Titulo', '$Autor','$Isbn', '$Editora', '$QtdPaginas')";
                
        return $db -> sqlDml($sql);
    }

    public static function Delete($CodLivro){
        $db = new DataBase();

        $sqli = "DELETE FROM livros WHERE cod_livro=$CodLivro";

        return $db->sqlDml($sqli);
    }

}