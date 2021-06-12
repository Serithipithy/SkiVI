<?php


class Pages extends Controller
{
    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function index(){
        $users = $this->userModel->getUsers();

        $data = [
            'title' => 'Home page',
            'users' => $users
        ];
        $this->view('pages/index', $data);
    }
    public function myaccount(){
        if(!$_SESSION['user_id']){
            $data='You have to login first in order to acces this page';
            header('location:' . URLROOT . '/pages/restrictPage');
        }
        else{
        $this->view('pages/myaccount');
        }
    }

    public function restrictPage(){
        $data='You are not logged in or you are not an admin. For any inconvenience please contact one of the owner of this website.';
        $this->view('pages/restrictPage',$data);
    }
   

}