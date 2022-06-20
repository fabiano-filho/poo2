<?php
require_once 'config.php';

class DataBase {
    public $Dsn;
    public $Servidor;
    public $Usuario;
    public $Senha;
    public $Base;
    public $BancoLink;
    function __construct() {
        $this -> Dsn = DSN;
        $this -> Servidor = SERVIDOR;
        $this -> Usuario = USUARIO;
        $this -> Senha = SENHA;
        $this -> Base = BANCODEDADOS;
        
        $this -> BancoLink = new PDO(
            $this ->Dsn . ':host='.
            $this ->Servidor . ';dbname='.
            $this ->Base, 
            $this ->Usuario, 
            $this ->Senha
        );
    }

    public function query($sql){
        return $this -> BancoLink -> query($sql);
    }

    public function sqlDml($sql) {
        return $this -> BancoLink -> exec($sql);
    }

    public static function beginTransaction($sql){
        $db = new DataBase();
        $db -> BancoLink -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db -> BancoLink -> beginTransaction();
        return $db;
    }

    public function commit(){
        $this -> BancoLink -> commit();
    }

    public function rollBack(){
        $this -> BancoLink -> rollBack();
    }

}

?>