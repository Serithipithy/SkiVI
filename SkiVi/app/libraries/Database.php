<?php
    class Database{

        private $statement;
        private $dbHandler;
        private $error;
        private $host='localhost';
        private $db_name='skivi';
        private $username='root';
        private $password='';

        public function __construct(){
            
            try{
                $this->dbHandler = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            } catch (PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }

        }
        //allows us to write queries
        public function query($sql){
            $this->statement = $this->dbHandler->prepare($sql);
        }
        //bind values
        public function bind($parameter, $value, $type = null){
            switch (is_null($type)){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type=PDO::PARAM_STR;
            }
            $this->statement->bindValue($parameter,$value,$type);
        }

        //execute
        public function execute(){
            return $this->statement->execute();
        }

        //return array
        public function resultSet(){
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        // return a spec row as obj
        public function single(){
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }
        //gets the row count
        public function rowCount(){
            return $this->statement->rowCount();
        }
    }