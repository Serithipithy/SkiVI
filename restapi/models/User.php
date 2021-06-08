<?php

Class User{

    private $conn;
    private $table='users';

    //post properties;
    public $id;
    public $username;

    //constructor with DB

    public function __construct($db){
        $this->conn=$db;
    }

    //get users

    public function read(){
        //create query;
        echo 'in read ';
        $query='select * from users';
        //prepare statement
        $stmt=$this->conn->prepare($query);
        //execute query
        $stmt->execute();

        return $stmt;
    }
}