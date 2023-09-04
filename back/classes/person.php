<?php
class Person{
        protected $id;
        protected $first_name;
        protected $last_name;
        protected $email;
        protected $password;

        const PROPRIETIES = array('id','first_name','last_name','email','password');

        //Constructor
        public function __construct($proprieties,$mode='All'){
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

        public function setId($id){
                $this->id=$id;
        }

        public function setFirstName($first_name){
                $this->first_name=$first_name;
        }

        public function setLastName($last_name){
                $this->last_name=$last_name;
        }

        public function setEmail($email){
                $this->email=$email;
        }

        public function setPassword($password){
                $this->password=$password;
        }

        //Getters
        public function __get($propriety){
                return $this->$propriety;
        }

        public function getId(){
                return $this->id;
        }

        public function getFirstName(){
                return $this->first_name;
        }

        public function getLastName(){
                return $this->last_name;
        }

        public function getEmail(){
                return $this->email;
        }

        public function getPassword(){
                return $this->password;
        }
}
?>