<?php
class PenaltyFee{
    private $id;
    private $date_of_issue;
    private $payment_day;
    private $value;
    private $state;

    //Constructor
    public function __construct($id,$date_of_issue,$payment_day,$value,$state){
            $this->id=$id;
            $this->date_of_issue=$date_of_issue;
            $this->payment_day=$payment_day;
            $this->value=$value;
            $this->state=$state;
    }

    //Setters
    public function __set($propriety,$value){
            $this->$propriety = $values;
    }

    public function setId($id){
            $this->id=$id;
    }

    public function setDateOfIssue($date_of_issue){
            $this->date_of_issue=$date_of_issue;
    }

    public function setPaymentDay($payment_day){
            $this->payment_day=$payment_day;
    }

    public function setValue($value){
            $this->value=$value;
    }

    public function setState($state){
            $this->state=$state;
    }

    //Getters
    public function __get($propriety){
            return $this->$propriety;
    }

    public function getId($id){
            return $this->id;
    }

    public function getDateOfIssue($date_of_issue){
            return $this->date_of_issue;
    }

    public function getPaymentDay($payment_day){
            return $this->payment_day;
    }

    public function getValue($value){
            return $this->value;
    }

    public function getState($state){
            return $this->state;
    }
}
?>