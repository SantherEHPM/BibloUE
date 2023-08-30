<?php
class Lending{
    private $id;
    private $start_day;
    private $return_day;
    private $state;
    private $n_renovations;

    //Constructor
    public function __construct($id,$start_day,$return_day,$state,$n_renovations){
            $this->id=$id;
            $this->start_day=$start_day;
            $this->return_day=$return_day;
            $this->state=$state;
            $this->n_renovations=$n_renovations;
    }

    //Setters
    public function __set($propriety,$value){
            $this->$propriety = $value;
    }

    public function setId($id){
            $this->id=$id;
    }

    public function setStartDay($start_day){
            $this->start_day=$start_day;
    }

    public function setReturnDay($return_day){
            $this->return_day=$return_day;
    }

    public function setState($state){
            $this->state=$state;
    }

    public function setNRenovations($n_renovations){
            $this->n_renovations=$n_renovations;
    }

    //Getters
    public function __get($propriety){
            return $this->$propriety;
    }

    public function getId($id){
            return $this->id;
    }

    public function getStartDay($start_day){
            return $this->start_day;
    }

    public function getReturnDay($return_day){
            return $this->return_day;
    }

    public function getState($state){
            return $this->state;
    }

    public function getNRenovations($n_renovations){
            return $this->n_renovations;
    }
}
?>