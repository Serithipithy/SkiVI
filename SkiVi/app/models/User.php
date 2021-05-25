<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }
        public function getUsers(){
            $this->db->query("SELECT * FROM users");

            $result = $this->db->resultSet();
            return $result;
        }

        public function signup($data){
            $this->db->query('INSERT INTO users(user_name, user_email, user_password) VALUES (:username, :email, :password)');

            //BIND VALUES

            $this->db->bind(':username',$data['username']);
            $this->db->bind(':email',$data['email']);
            $this->db->bind(':password',$data['password']);

            //EXECYTE THE FUNCTION
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function login($username, $password){
            $this->db->query('SELECT * FROM users WHERE user_name = :username');

            //Find value
            $this->db->bind(':username',$username);

            $row = $this->db->single();

            $hashedPassword = $row->user_password;

            if(password_verify($password, $hashedPassword)){
                return $row;
            }
            return false;
            
        }
        
        // Find user by email. Email is passed in by the controller.
        public function findUserByEmail($email){
            //Prepared statement
            $this->db->query('SELECT * FROM users WHERE user_email = :email');

            //Email param will be binded with the wmail varaible
            $this->db->bind(':email',$email);

            // Check if email is already registered
            if($this->db->rowCount() > 0){
                return true;
            } else {
                return false;
            }
        }
    }
