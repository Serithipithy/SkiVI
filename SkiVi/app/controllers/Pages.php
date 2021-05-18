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
        $this->view('pages/myaccount');
    }
    public function signUp(){
        $this->view('pages/signup');
    }
    public function login(){
        $this->view('pages/login');
    }

}