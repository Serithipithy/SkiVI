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

    public function read_single(){
        $query='select * from users where user_id= ? LIMIT 0,1';
        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(1,$this->id);
        $stmt->execute();

        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        $this->user_name=$row['user_name'];
        $this->user_email=$row['user_email'];
    }
}