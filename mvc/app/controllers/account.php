<?php

class Account extends Controller{

    public function myaccount($name='')
    {
        $user=$this->model('User');
        $user->name=$name;
        $this->view('accounts/myaccount',['name'=>$user->name]);
    }
}