<?php

// creating a role Calss


class Role{
    private  $pdo;
    private $roleName; 
    private $roleID;
    

    
public function __construct($role,$ID){
    $this->pdo = (new Connect())->get_connection();
   $this -> roleID = $ID;
   $this -> roleName =$role;
}


 public function getroleId(){
    return $this->roleID;
 }

 public function getrole(){
    
    return $this->roleName;
 }


 public function setroleID($id){
    $this -> roleID = $id;
 }
 public function setrole($role){
    $this -> roleName =$role;

 }


}

?>
