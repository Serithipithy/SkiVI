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

            //EXECUTE THE FUNCTION
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
            $this->db->execute();
            $row = $this->db->rowCount();
            echo $this->db->rowCount();
            // if(!is_null($row->user_email))
            //     $user=$row->user_email;

            // Check if email is already registered
            if(intVal($row) > 0){
                return true;
            } else {
                return false;
            }
        }

        public function userExists($username){
            //Prepared statement
            $this->db->query('SELECT * FROM users WHERE user_name = :username');

            //Email param will be binded with the wmail varaible
            $this->db->bind(':username',$username);

            //get the row
            $this->db->execute();
            $row = $this->db->rowCount();
            // if(!is_null($row->user_name))
            //     $user=$row->user_name;

            // Check if email is already registered
            if(intVal($row) > 0){
                return true;
            } else {
                return false;
            }
        }

        public function isValidPassword($username,$password){
            //Prepared statement
            $this->db->query('SELECT * FROM users WHERE user_name = :username');

            //username and password bind-ing
            $this->db->bind(':username',$username);
            
            //get the row
            $row = $this->db->single();
            
            //get password from database
            $hashedPassword = $row->user_password;
            // Check if password is a match
            if(password_verify($password, $hashedPassword)){
                return true;
            }
            return false;
        }

        public function changePassword($username,$newPassword){
            //Prepared statement
            $this->db->query('UPDATE users SET user_password = :newPassword WHERE user_name = :username');

            //username and password bind-ing
            $this->db->bind(':username',$username);
            $this->db->bind(':newPassword',$newPassword);

            //EXECUTE THE FUNCTION
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }

        }

        public function getCount($user_id,$skill){
            $curl=curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL=>'http://localhost:8000/REST_API_USER_INFO/api/getNoCourses.php?id='.$user_id.'&skill=' .$skill,
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_CUSTOMREQUEST=>"GET",
            ));

            $response=curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response, true);
            return intVal($response);
        }

        public function getTakenCourses($user_id,$skill){
            $curl=curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL=>'http://localhost:8000/REST_API_USER_INFO/api/getCoursesBySkill.php?id='.$user_id.'&skill=' .$skill,
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_CUSTOMREQUEST=>"GET",
            ));

            $response=curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response, true);
            return $response;
        }

        public function changeProfilePicture($file_name,$user_id){
            //prepare statement
            $this->db->query('UPDATE users SET profile_picture = :file_name WHERE user_id = :user_id');

            // bind file name and user id
            $this->db->bind(':file_name',$file_name);
            $this->db->bind(':user_id',$user_id);

            //EXECUTE THE FUNCTION
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
    }
