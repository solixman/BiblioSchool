<?php


class Tags{
    private  $pdo;
private $tagID;
private $tagname;


public function __construct($TID,$TAG)
{
    $this->pdo = (new Connect())->get_connection();
    $this -> tagID =$TID;
    $this -> tagname =$TAG;
}

public function setTagID($Tid){
 $this -> tagID =$Tid;
}

public function setTag($Tname){
    $this -> $Tname;
}

public function getTagId(){
    return $this -> tagID;
}


public function getTagName(){
    return $this -> tagname;
}


}
?>