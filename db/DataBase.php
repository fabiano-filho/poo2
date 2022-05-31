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

    public function SqlDml($sql) {
        return $this -> BancoLink -> exec($sql);
    }
}
?>