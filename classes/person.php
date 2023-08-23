<?php
    class Person{
        protected $id;
        protected $first_name;
        protected $last_name;
        protected $email;
        protected $password;

        function __construct($id,$first_name,$last_name,$email,$password){            
            $this->id = $id;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
            $this->password = $password;
        }

        //Setters
        public function setId($id){
            $this->id = $id;
        }

        //Getters
    }
?>