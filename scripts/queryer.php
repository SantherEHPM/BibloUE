<?php
    require('../classes/conexion.php');
    $conexion =new Conexion();
    $consulta = $conexion->prepare('SELECT * FROM admin ORDER BY admi_id ASC');
    $consulta->execute();
    $registros = $consulta ->fetchAll();
    if($_GET){
        //echo $_GET['query'];
        switch($_GET['query']){
            case "getAdmins":
                echo json_encode($registros);
                break;
        }  
    }
    /*if($_POST){
        //echo $_GET['query'];
        switch($_POST['query']){
            case "postUser":
                echo json_encode($registros);
                break;
        }  
    }*/
?>