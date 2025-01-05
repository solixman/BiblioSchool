<?php
// requiring the connection file for testing
require_once '../config/connection/connect.php';

// creating the class book

class Books
{

    private  $pdo;
    private $bookId;
    private $bookName;
    private $author;

    // creating a constractor

    public function __construct($ID = '', $bookName = '', $author = '')
    {
        $this->pdo = (new Connect())->get_connection();
        $this->bookId = $ID;
        $this->bookName = $bookName;
        $this->author = $author;
    }
    // setters and getters 



    public function setID($ID)
    {
        $this->bookId = $ID;
    }

    public function setbookName($bookname)
    {
        $this->bookName = $bookname;
    }

    public function setauthor($author)
    {
        $this->author = $author;
    }

   
    public function getBookId(){
        return $this -> bookId;
    }

    public function getBookname(){
        return $this -> bookName;
    }

    public function getauthor(){
        return $this -> author;
    }



    // a selectALL method to get all data from table users
    public function selectAllBooks()
    {
        $sql =  'SELECT * FROM `books`';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        // var_dump($result);
        return $result;
    }
}

// $so = new Books();
//  $data= $so->selectAllBooks();

//  var_dump($data[0]['Name']);
