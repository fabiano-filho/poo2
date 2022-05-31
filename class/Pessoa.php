<?php
include_once './db/DataBase.php';

class Pessoa {
    
    public static function getPessoa() {
        $db = new DataBase();
        return $db -> query("SELECT * from pessoa");
    }

    public static function deletePessoa($id) {
        $db = new DataBase();
        $sql = "DELETE FROM PESSOA WHERE id=$id";
        return $db -> SqlDml($sql);
    }
}
