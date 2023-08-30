<?php
class Person{
        protected $id;
        protected $first_name;
        protected $last_name;
        protected $email;
        protected $password;

        //Constructor
        public function __constructor($id,$first_name,$last_name,$email,$password){
                $this->id=$id;
                $this->first_name=$first_name;
                $this->last_name=$last_name;
                $this->email=$email;
                $this->password=$password;
        }

        //Setters
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
        public function getId($id){
                return $this->id;
        }

        public function getFirstName($first_name){
                return $this->first_name;
        }

        public function getLastName($last_name){
                return $this->last_name;
        }

        public function getEmail($email){
                return $this->email;
        }

        public function getPassword($password){
                return $this->password;
        }
}
?>