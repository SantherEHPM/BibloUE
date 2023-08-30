<?php
require_once('person.php');
class User extends Person{
        private $blocked;
        private $cellphone;

        //Constructor
        public function __construct($id,$first_name,$last_name,$email,$password,$blocked,$cellphone){
                parent::__construct($id,$first_name,$last_name,$email,$password);
                $this->blocked=$blocked;
                $this->cellphone = $cellphone;
        }

        //Setters
        public function __set($propriety,$value){
                $this->$propriety = $values;
        }

        public function setCellphone($cellphone){
                $this->cellphone=$cellphone;
        }
        
        public function setBlocked($blocked){
                $this->blocked=$blocked;
        }

        //Getters
        public function __get($propriety){
                return $this->$propriety;
        }

        public function getCellphone($cellphone){
                return $this->cellphone;
        }

        public function getBlocked($blocked){
                return $this->blocked;
        }
}
?>