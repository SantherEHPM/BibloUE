<?php
class Library{
    private $id;
    private $serviceDays;

    //Constructor
    public function __construct($id,$serviceDays){
            $this->id=$id;
            $this->serviceDays=$serviceDays;
    }

    //Setters
    public function __set($propriety,$value){
            $this->$propriety = $value;
    }

    public function setId($id){
            $this->id=$id;
    }

    public function setServiceDays($serviceDays){
            $this->serviceDays=$serviceDays;
    }

    //Getters
    public function __get($propriety){
            return $this->$propriety;
    }

    public function getId($id){
            return $this->id;
    }

    public function getServiceDays($serviceDays){
            return $this->serviceDays;
    }
}
?>