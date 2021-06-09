<?php

class Info{
    private $conn;
    private $table='info'; // set din input

    //post properties;
    public $title;
    public $description;
    public $image;

    //constructor with DB
    public function __construct($db){
        $this->conn=$db;
    }

    public function getAll(){
        //create query
        $query='SELECT *  FROM info ';

        // prepare statement
        $stmt=$this->conn->prepare($query);

        //execute query
        $stmt->execute();

        return $stmt;
    }
}
