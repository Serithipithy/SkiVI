<?php

class FirstAid{
    private $conn;
    private $table='courses'; // set din input

    //post properties;
    public $title;
    public $link;
    public $text;

    //constructor with DB
    public function __construct($db){
        $this->conn=$db;
    }

    //create new course method
    public function createCourse(){

        //create query
        $query='INSERT INTO '. $this->table . ' SET title=:title , link=:link , text=:text';
        
        // prepare statement
        $stmt=$this->conn->prepare($query);
    
        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->link=htmlspecialchars(strip_tags($this->link));
        $this->text=htmlspecialchars(strip_tags($this->text));

        
        // bind values
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":link", $this->link);
        $stmt->bindParam(":text", $this->text);

        //execute query
        if($stmt->execute()){
            return true;
        }

        return false;
    }

    public function updateCourse(){
        //create query
        $query='UPDATE ' . $this->table . ' SET link=:link, text=:text WHERE title=:title'; 

        // prepare statement
        $stmt=$this->conn->prepare($query);

        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->link=htmlspecialchars(strip_tags($this->link));
        $this->text=htmlspecialchars(strip_tags($this->text));

        // bind values
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':link', $this->link);
        $stmt->bindParam(':text', $this->text);

        //execute query
        if($stmt->execute()){
            return true;
        }

        return false;
    }

    public function getCourses(){
        //create query
        $query='SELECT title, link, text  FROM courses ORDER BY data ASC';

        // prepare statement
        $stmt=$this->conn->prepare($query);

        //execute query
        $stmt->execute();

        return $stmt;
    }

    public function getSingleCourse(){
        //create query
        $query='SELECT *  FROM courses WHERE title=:title';

        // prepare statement
        $stmt=$this->conn->prepare($query);

        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
       
        // bind values
        $stmt->bindParam(':title', $this->title);
        
        //execute query
        $stmt->execute();

        return $stmt;
    }

    public function delete(){
         // delete query
         $query = "DELETE FROM " . $this->table . " WHERE title =:title";
    
         // prepare query
         $stmt = $this->conn->prepare($query);
     
         // sanitize
         $this->title=htmlspecialchars(strip_tags($this->title));
     
         // bind id of record to delete
         $stmt->bindParam(":title", $this->title);
     
         // execute query
         if($stmt->execute()){
             return true;
         }

         return false;
         }

}