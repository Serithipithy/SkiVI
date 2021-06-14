<?php
class Users extends Controller{
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->skillModel = $this->model('Skill');
    }

    public function signup(){

        $data = [
            'username' =>'',
            'email' =>'',
            'password' => '',
            'usernameError' =>'',
            'emailError'=>'',
            'passwordError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data = [
                'username' =>trim($_POST['username']),
                'email' =>trim($_POST['email']),
                'password' => trim($_POST['password']),
                'usernameError' =>'',
                'emailError'=>'',
                'passwordError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate username on letters/numbers
            if( empty($data['username']) ){
                $data['usernameError'] = 'Please enter username.';
            } elseif (!preg_match($nameValidation,$data['username'])){
                $data['usernameError'] = 'Username cand only contain letters and numbers.';
            }

            //Validate email
            if(empty($data['email'])){
                $data['emailError'] = 'Please enter email adress.';
            } elseif (!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if($this->userModel->findUserByEmail($data['email'])){
                    $data['emailError'] = 'Email is already taken.';
                }
            }

            //Validate password length and numeric values
            if(empty($data['password'])) {
                $data['passwordError'] = 'Please enters password.';
            } elseif (strlen($data['password']) < 6){
                $data['passwordError'] = 'Password must be at least 6 characters.';
            } 
            elseif (preg_match($passwordValidation,$data['password'])){
                $data['passwordError'] = 'Password must have at least one numeric value.';
            }

            //Make sure that errors are empty
            if(empty($data['useranameError']) && empty($data['emailError']) && 
                empty($data['passwordError'])){

                    //Hash password
                    $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);

                    //Refister user from model function
                    if($this->userModel->signup($data)){
                        //Redirect to the login page
                        header('location: ' . URLROOT . '/users/login');
                    } else {
                        die('Something went wrong.');
                    }
            }
        }

        $this->view('users/signup',$data);
    }

    public function login(){
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

             $data = [
                'username' =>trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' =>'',
                'passwordError' => ''
             ];
             //Validate username
            if (empty($data['username'])){
                 $data['usernameError'] = 'Please enter a username.';
             }

             //Validate password
            if (empty($data['password'])){
                $data['passwordError'] = 'Please enter the password.';
            }

            //Check if all error are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])){
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);
                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';
                    
                    $this->view('users/login',$data);
                }
            }

        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }


        $this->view('users/login',$data);
    }
    public function myaccount(){
        if(!$_SESSION['user_id']){
            //$data='You have to login first in order to acces this page';
            header('location:' . URLROOT . '/pages/restrictPage');
        }
        else{
            $data = [
                'username' =>'',
                'currentPassword' => '',
                'newPassword'=>'',
                'confirmPassword'=>'',
                'currentPasswordError'=>'',
                'newPasswordError' => '',
                'confirmPasswordError' => '',
                'succesMessage'=>'',
                'progress-firstAid'=>'',
                'progress-origami'=>'',
                'progress-signLanguage'=>'',
            ];
            $data=$this->changePassword();
            $data=$this->setProgress($data);
            $this->view('users/myaccount',$data);
        }
    }
    public function changePassword(){
        $data = [
            'username' =>'',
            'currentPassword' => '',
            'newPassword'=>'',
            'confirmPassword'=>'',
            'currentPasswordError'=>'',
            'newPasswordError' => '',
            'confirmPasswordError' => '',
            'succesMessage'=>'',
            'progress-firstAid'=>'',
            'progress-origami'=>'',
            'progress-signLanguage'=>'',
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data = [
                'username' =>$_SESSION['username'],
                'currentPassword' => trim($_POST['currentPassword']),
                'newPassword'=>trim($_POST['newPassword']),
                'confirmPassword'=>trim($_POST['confirmPassword']),
                'currentPasswordError'=>'',
                'newPasswordError' => '',
                'confirmPasswordError' => '',
                'succesMessage'=>''
            ];

            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //validate currentPassword
            if(empty($data['currentPassword'])){
                $data['currentPasswordError'] = 'Please enter your current password.';
            } else
                { 
                    if(!$this->userModel->isValidPassword($data['username'],$data['currentPassword'])) {
                        $data['currentPasswordError'] = 'Incorrect password.';
                    }
                }


            //validate newPassword == confirmPassword and the new password
            if(empty($data['newPassword'])){
                $data['newPasswordError'] = 'Please enter your new password.';
            } elseif (empty($data['confirmPassword'])){
                $data['confirmPasswordError'] = 'Please enter the confirmation password.';
            } elseif(!($data['newPassword'] === $data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Passwords don\'t match';
            } elseif (strlen($data['newPassword']) < 6){
                $data['newPasswordError'] = 'Password must be at least 6 characters.';
            } elseif (preg_match($passwordValidation,$data['newPassword'])){
                $data['newPasswordError'] = 'Password must have at least one numeric value.';
            }

            //Check if all error are empty
            if ((empty($data['currentPasswordError']) && empty($data['newPasswordError'])) && empty($data['confirmPasswordError'])){
                $data['newPassword'] = password_hash($data['newPassword'],PASSWORD_DEFAULT);
                if(!$this->userModel->changePassword($data['username'],$data['newPassword'])){
                    $data['succesMessage'] = 'Could not change password, try again!';
                } else {
                    $data['succesMessage'] = 'Password changed';
                }
            }
            
        }
        return $data;

    }

    public function setProgress($data){
        $content_FA=$this->skillModel->getCoursesFA();
        $content_Origami=$this->skillModel->getCoursesOrigami();
        $content_SignLng=$this->skillModel->getCoursesSignLng();

        $nr_FA=count($content_FA);
        $nr_Origami=count($content_Origami);
        $nr_SignLng=count($content_SignLng);

        $data['progress-firstAid']=intVal(($this->userModel->getCount($_SESSION['user_id'],'first_aid')*100)/$nr_FA);
        $data['progress-origami']=intVal(($this->userModel->getCount($_SESSION['user_id'],'origami')*100)/$nr_Origami);
        $data['progress-signLanguage']=intVal(($this->userModel->getCount($_SESSION['user_id'],'sign_lng')*100)/$nr_SignLng);

        return $data;
    }
    public function createUserSession($user){
        session_start();
        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['username'] = $user->user_name;
        $_SESSION['email'] = $user->user_email;
        $_SESSION['admin'] = $user->admin;
    
        header('location: ' . URLROOT . '/pages/index');
        
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['admin']);
        header('location:' . URLROOT . '/users/login');
    }
}