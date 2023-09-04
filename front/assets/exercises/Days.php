<?php
    define("aDays", array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"));
    
    for($i = 0;$i<7;$i++){
        echo "El valor de la posicion [".$i."] es [". aDays[$i]."]<br/>";
    }
?>