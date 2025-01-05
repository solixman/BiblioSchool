<?php


class Categorie{
    private  $pdo;
private $CategorieID;
private $categorieName;

public function __construct($CID, $CATE){
$this->pdo = (new Connect())->get_connection();
$this -> CategorieID = $CID;
$this -> categorieName = $CATE;

}

public function setCatID($id){
    $this -> CategorieID =$id;
}


public function setCategorie($CName){
    $this -> categorieName =$CName;
}

public function getCID(){
    return $this -> CategorieID;
}

public function getCategorie(){
    return $this -> categorieName;
}

}


?>