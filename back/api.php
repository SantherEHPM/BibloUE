<?php
    require('./classes/conexion.php');
    require('./classes/admin.php');
    require('./classes/book.php');
    require('./classes/college.php');
    require('./classes/lending.php');
    require('./classes/penaltyFee.php');
    require('./classes/user.php');


    $conexion =new Conexion();
    $consulta = $conexion->prepare('SELECT * FROM admin ORDER BY admi_id ASC');
    $consulta->execute();
    $registros = $consulta ->fetchAll();

    
?>