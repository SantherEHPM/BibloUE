<?php
require_once('person.php');
require_once('conexion.php');

class User extends Person{
        private $carnet;
        private $blocked;
        private $cellphone;

        const PROPRIETIES = array('carnet','blocked','cellphone');

        //Constructor
        public function __construct($proprieties,$mode='All'){
                $parentProps=array();

                foreach($proprieties as $prop => $value){
                        echo $prop.'=>'.$value; 
                }

                if($mode != 'All'){
                        foreach($proprieties as $prop){
                                $match = false;
                                foreach(self::PROPRIETIES as $localProp){
                                        if($prop == $localProp){
                                                $match=true;
                                                break;
                                        }
                                }
                                if(!$match){
                                        array_push($parentProps,$prop);
                                        unset($proprieties[array_search($prop,$proprieties)]);
                                }
                        }
                }
                else{
                        foreach($proprieties as $prop => $value){
                                $match = false;
                                foreach(self::PROPRIETIES as $localProp){
                                        if($prop == $localProp){
                                                $match=true;
                                                break;
                                        }
                                }
                                if(!$match){
                                        $parentProps[$prop]=$value;
                                        unset($proprieties[$prop]);
                                }
                        }
                }

                parent::__construct($parentProps,$mode);

                switch($mode){
                        case 'All':
                                foreach($proprieties as $prop => $value){
                                        $this->$prop = $values;
                                }
                                break;
                        case 'POST':
                                foreach($proprieties as $prop){
                                        $this->takePost($prop);
                                }
                                break;
                        case 'GET':
                                foreach($proprieties as $prop){
                                        $this->takeGet($prop);
                                }
                                break;
                        case 'PUT':
                                foreach($proprieties as $prop){
                                        $this->takePut($prop);
                                }
                                break;
                }
        }
        //Takers
        //POST
        public function takePost($propriety){
                if($_POST){
                        $this->$propriety = $_POST[$propriety];
                }
        }
        //GET
        public function takeGet($propriety){
                if($_GET){
                        $this->$propriety = $_GET[$propriety];
                }
        }
        //PUT
        public function takePut($propriety){
                if($_PUT){
                        $this->$propriety = $_PUT[$propriety];
                }
        }
        //Setters
        public function __set($propriety,$value){
                $this->$propriety = $values;
        }

        public function setCarnet($carnet){
                $this->carnet=$carnet;
        }

        public function setBlocked($blocked){
                $this->blocked=$blocked;
        }

        public function setCellphone($cellphone){
                $this->cellphone=$cellphone;
        }

        //Getters
        public function __get($propriety){
                return $this->$propriety;
        }

        public function getCarnet(){
                return $this->carnet;
        }

        public function getBlocked(){
                return $this->blocked;
        }

        public function getCellphone(){
                return $this->cellphone;
        }
}
?>