<?php


class Home extends  Controller{
    public function index($name=''){
        
       //tre sa fie si ceva model aici
       $user=$this->model('User');
       $user->name=$name;
        $this->view('home/index',['name'=>$user->name]);
    }

    public function login($name=''){
        $user=$this->model('User');
       $user->name=$name;
        $this->view('home/login',['name'=>$user->name]);
    }

    public function signup($name=''){
        $user=$this->model('User');
        $user->name=$name;
        $this->view('home/signup',['name'=>$user->name]);
    }
}
?>