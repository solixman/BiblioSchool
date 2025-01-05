<?php
// 
class State{
private $pdo;
    private $stateId;
    private $state;


    // creating constructor
    public function __construct($Sid,$State)
    {
        $this->pdo = (new Connect())->get_connection();   
     $this ->stateId=$Sid;
     $this ->state = $State;   
    }

    // setters and getters
public function getStateId(){
return $this -> stateId;
}

public function getState(){
    return $this -> state;
}
public function setStateId($Sid){
    $this -> stateId = $Sid;
}

public function setState($State){
    $this -> state = $State;
}
    
}