<?php
    require('../classes/conexion.php');
    require('../classes/admin.php');
    require('../classes/book.php');
    require('../classes/college.php');
    require('../classes/lending.php');
    require('../classes/penaltyFee.php');
    require('../classes/user.php');

    /*require('gets.php');
    require('posts.php');
    require('puts.php');*/
    
    echo ':v';

    if($_GET){
    }
    else if($_POST){
        switch($_POST['query']){
            case 'userSignUp':
                $proprieties = array(
                    'first_name',
                    'last_name',
                    'carnet',
                    'email',
                    'cellphone',
                    'password'
                );
                $user = new User($proprieties,'POST');
                echo ':v';
                //$user.print();
        }
    }
    /*else if($_PUT){

    }*/

?>