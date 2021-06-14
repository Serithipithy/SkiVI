<?php

class UserInfo{
    private $conn;
    private $table='user_info'; // set din input

    //post properties;
    public $user_id;
    public $skill;
    public $course;

    //constructor with DB
    public function __construct($db){
        $this->conn=$db;
    }
    
    //add skill->course
    public function addDone(){
        //create query
        $query='INSERT INTO '. $this->table . ' SET user_id=:user_id , skill=:skill , course=:course';

        // prepare statement
        $stmt=$this->conn->prepare($query);

        // sanitize
        $this->user_id=htmlspecialchars(strip_tags($this->user_id));
        $this->skill=htmlspecialchars(strip_tags($this->skill));
        $this->course=htmlspecialchars(strip_tags($this->course));

        // bind values
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":skill", $this->skill);
        $stmt->bindParam(":course", $this->course);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    public function delete(){
        // delete query
        $query = "DELETE FROM " . $this->table . " WHERE course =:course";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->course=htmlspecialchars(strip_tags($this->course));

        // bind id of record to delete
        $stmt->bindParam(":course", $this->course);

        // execute query
        if($stmt->execute()){
            return true;
        }

        return false;

    }
}
