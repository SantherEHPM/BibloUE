<?php
class Conexion extends PDO{
    private $base_type = 'mysql';
    private $host = 'localhost';
    private $base_name = 'biblioue';
    private $user = 'root';
    private $password = '';

    public function __construct(){
        try{
            parent::__construct("{$this->base_type}:dbname={$this->base_name};host={$this->host};charset=utf8",$this->user,$this->password);

        }catch(PDOException $e){
            echo 'Error de conexion:. \n Detalle: '.$e->getMessage();
            exit;
        }
    }
    public static function get($table,$fields="*",$orderField="",$order=0){
        $query = prepare('SELECT '.$fields.' FROM '.$table.' ORDER BY '.$orderField.($order)?('ASC'):('DESC'));
        $query->execute();
        return json_encode($query ->fetchAll());
    }
    /*public static function get($table,$fields="*"){
        $query = prepare('SELECT '.$fields.' FROM '.$table);
        $query->execute();
        return json_encode($query ->fetchAll());
    }*/
}
?>