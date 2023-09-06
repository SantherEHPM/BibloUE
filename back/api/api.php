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
    
    //var_dump($_POST);


    if($_POST){
        if($_POST['wea']==':v'){
            echo 'ajo';
        }
    }

    if($_GET){
        switch($_GET['query']){
            case 'pacman':
                echo ':D';
                break;
            case 'userSignUp':
                $proprieties = array(
                    'first_name',
                    'last_name',
                    'carnet',
                    'email',
                    'cellphone',
                    'password'
                );
                //echo json_encode($proprieties);
                $user = new User($proprieties,'GET');
                //echo ($user->getAll());
        }
    }
    /*else if($_PUT){
        echo 'put';
    }*/
?>