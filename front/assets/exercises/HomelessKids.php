<?php 
    $homelessKids = array(
        "Juan" => array(14,6,2003),
        "Maria" => array(01,4,2006),
        "Erick" => array(10,10,2010),
        "Raquel" => array(14,2,2005),
        "Luis" => array(23,3,2020),
        "Miguel" => array(12,2,2007)
    );
    $today = array(16,8,2023);
    $adult = false; 

    $monthsOfYear = array(30,0,31,30,31,30,31,31,30,31,30,31);

    echo "Hoy estamos a los ".$today[0]." dias del mes numero ".$today[1]." del año " .$today[2]."<br/><br/>";

    foreach($homelessKids as $veryHappyKid💀 => $birthDay){
        echo $veryHappyKid💀." nacio a los ".$birthDay[0]." dias del mes numero ".$birthDay[1]." del año " .$birthDay[2]." entonces tiene ";
        

        $monthsIndex = $birthDay[1] - 1;
        $birthYear = $birthDay[2];

        if($birthYear%4 == 0 and $birthYear%100 <> 0){
            $monthsOfYear[1] = 29;
        }
        else{
            $monthsOfYear[1] = 28;
        }

        $years = $today[2] - $birthDay[2];
        $months = $today[1] - $birthDay[1];
        $days = $today[0] - $birthDay[0];


        if($years){
            if($months < 0){
                $years-=1;
            }
            echo ($years). " años,";
            if(($years)>=18){
                $adult = true;
            }
        }
        if($months){
            if($months < 0){
                $months += 12;
            }
            if($days < 0){
                $months-=1;
            }
            echo $months." meses,";
        }
        if($days){

            if($days < 0){
                $lastMonth = $monthsOfYear[$monthsIndex-1];
                $actualMonth = $monthsOfYear[$monthsIndex];
                $days += 30;
            }
            echo ($days)." dias de edad, ";
        }
        if($adult){
            echo "entonces es mayor de edad";
        }
        else{
            echo "entonces es menor de edad";
        }
        echo "<br/>";
        $adult = false;
    }
?>