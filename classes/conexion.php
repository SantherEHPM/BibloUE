<?php
class Conexion extends PDO{
    private $base_type = 'mysql';
    private $host = 'localhost';
    private $base_name = 'biblioue';
    private $user = 'root';
    private $password = '';

    private function __construct(){
        try{
            parent::("{$this->base_type}:dbname={$this->base_name};host={$this->host};charset=utf8",$this->user,$this->password);
        }catch(PDOException $e){
            echo 'Error de conexion:. \n Detalle: '.$e->getMessage();
            exit;
        }
    }
 /*
    public static function get($table){
        $query = $this->conexion->prepare('SELECT * FROM '.$table);
        $query->execute();
        return json_encode($query ->fetchAll());
    }*/
}
?>