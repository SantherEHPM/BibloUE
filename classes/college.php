<?php
class College{
    private $id;
    private $name;
    private $logo;

    //Constructor
    public function __construct($id,$name,$logo){
            $this->id=$id;
            $this->name=$name;
            $this->logo=$logo;
    }

    //Setters
    public function __set($propriety,$value){
            $this->$propriety = $values;
    }

    public function setId($id){
            $this->id=$id;
    }

    public function setName($name){
            $this->name=$name;
    }

    public function setLogo($logo){
            $this->logo=$logo;
    }

    //Getters
    public function __get($propriety){
            return $this->$propriety;
    }

    public function getId($id){
            return $this->id;
    }

    public function getName($name){
            return $this->name;
    }

    public function getLogo($logo){
            return $this->logo;
    }
}
?>