<?php
class Conexion extends PDO{
    private $base_type = 'mysql';
    private $host = 'localhost';
    private $base_name = 'biblioue';
    private $user = 'root';
    private $password = '';

    public function __construct(){
        try{
            parent::__construct("{$this->base_type}:dbname = {$this->base_name});host={$this->host};charset=utf8",$this->user,$this->password);
        }catch(PDOException $e){
            echo 'Error de conexion:. \n Detalle: '.$e->getMessage();
            exit;
        }
    }
}
?>