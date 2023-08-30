<?php
require_once('person.php');

class Admin extends Person{
    private $role;

    //Constructor
    public function __construct($id,$first_name,$last_name,$email,$password,$role){
        parent::__construct($id,$first_name,$last_name,$email,$password);
        $this->role=$role;
    }

    //Setters

    public function setRole($role){
        $this->role=$role;
    }

    //Getters
    public function getRole($role){
        return $this->role;
    }
}
?>