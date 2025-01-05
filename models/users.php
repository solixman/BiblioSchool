<?php

// class users
class Users
{
   private  $pdo;
   public $Name;
   public $phoneNumber;
   public $Email;
   public $password;


   // creating a constructors
   public function __construct($Name, $number, $Email, $Password)
   {
      $this->pdo = (new Connect())->get_connection();
      $this->Name = $Name;
      $this->phoneNumber = $number;
      $this->Email = $Email;
      $this->password = $Password;
   }



   // setters and getters
   public function getName()
   {
      return $this->Name;
   }

   public function getphoneNumber()
   {
      return $this->phoneNumber;
   }


   public function getEmail()
   {
      return $this->Email;
   }


   public function getPassword()
   {
      return $this->password;
   }


   public function setName($Name)
   {
      $this->Name = $Name;
   }

   public function setphoneNumber($number)
   {
      $this->phoneNumber = $number;
   }

   public function setEmail($Email)
   {
      $this->Email = $Email;
   }


   public function setPassword($Password)
   {
      $this->password = $Password;
   }
}


// $user1 = new users("soulayman jaafar", "0690544179", "soulaymanjaa09@gmail.com", "jjhhggff");

// $user1->getName();
// var_dump($user1->getName());
