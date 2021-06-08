<?php

class Skill{
    private $conn;
    private $table='skills';

    //post properties;
    public $id;
    public $title;
    public $description;
    public $author;

    //constructor with DB
    public function __construct($db){
        $this->conn=$db;
    }

    public function read(){

        //create query;
        $query='select * from skills';

        //prepare statement
        $stmt=$this->conn->prepare($query);

        //execute query
        $stmt->execute();

        return $stmt;
    }

    public function set_skill_id_by_name(){

        //create query;
        $query='select * from skills where title = \'' . $this->title .'\'' ;
        echo $query;

        //prepare statement
        $stmt=$this->conn->prepare($query);

        //execute query
        $stmt->execute();

        //get rows content
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $row['id_s'];
    }

    public function read_single(){
        $query='select * from skills where id_s= ? LIMIT 0,1';
        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(1,$this->id);
        $stmt->execute();

        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        $this->id=$row['id_s'];
        $this->title=$row['title'];
        $this->description=$row['description'];
        $this->author=$row['author'];
    }

    // for adding a new skill
    public function create(){

        //create query
        $query='INSERT INTO skills 
              SET
                title = :title,
                description = :description,
                author = :author';
        
        //prepare statement
        $stmt=$this->conn->prepare($query);

        //clean data        
        $this->title= htmlspecialchars(strip_tags($this->title));
        $this->description= htmlspecialchars(strip_tags($this->description));
        $this->author= htmlspecialchars(strip_tags($this->author));

         //bind data
         $stmt->bindParam(':title',$this->title);
         $stmt->bindParam(':description',$this->description);
         $stmt->bindParam(':author',$this->author);

         //execute query
         if($stmt->execute()){
             return true;
         }
         //print error if smth goes wrong

         printf("Error:%s.\n",$stmt->error);
         return false;
    }

    public function create_table(){
        //prepare table name
        $this->title= htmlspecialchars(strip_tags($this->title));
        $this->description= htmlspecialchars(strip_tags($this->description));
        $this->author= htmlspecialchars(strip_tags($this->author));
        $title_skill = strtolower($this->title);
        $title_skill = str_replace(" ","_",$title_skill);

        //create query
        $query=' CREATE TABLE '. $title_skill .'
        (
        id_c    int NOT NULL AUTO_INCREMENT,
        title_c varchar(50) NOT NULL,
        link_c  text NULL,
        text_c  text NULL,
        PRIMARY KEY (id_c)
        )';

        //prepare statement
        $stmt=$this->conn->prepare($query);

        //execute query

        if($stmt->execute()){
            return true;
        }

        //print error if smth goes wrong
        printf("Error:%s.\n",$stmt->error);
        return false;
    }

    public function update(){
        //create query

        $query='UPDATE skills 
              SET
                title = :title,
                description = :description,
                author = :author
                WHERE
                id_s = :id';
        
        //prepare statement
        $stmt=$this->conn->prepare($query);

        //clean data
        
        $this->title= htmlspecialchars(strip_tags($this->title));
        $this->description= htmlspecialchars(strip_tags($this->description));
        $this->author= htmlspecialchars(strip_tags($this->author));
        $this->id= htmlspecialchars(strip_tags($this->id));

         //bind data
         $stmt->bindParam(':title',$this->title);
         $stmt->bindParam(':description',$this->description);
         $stmt->bindParam(':author',$this->author);
         $stmt->bindParam(':id',$this->id);
         //execute query

         if($stmt->execute()){
             return true;
         }
         //print error if smth goes wrong

         printf("Error:%s.\n",$stmt->error);
         return false;
    }

    //drop skill table
    public function drop_table(){
        //prepare query
        $query='DROP TABLE ' . $this->title;

        //prepare statement
        $stmt=$this->conn->prepare($query);

        //execute statement
        if($stmt->execute()){
            return true;
        }
        //print error if smth goes wrong

        printf("Error:%s.\n",$stmt->error);
        return false;
    }

    //delete skill from skills table
    public function delete(){
        $query='DELETE FROM skills WHERE id_s= :id';
        
        $stmt=$this->conn->prepare($query);

        $this->id= htmlspecialchars(strip_tags($this->id));
        
        $stmt->bindParam(':id',$this->id);

        if($stmt->execute()){
            return true;
        }
        //print error if smth goes wrong

        printf("Error:%s.\n",$stmt->error);
        return false;

    }

}