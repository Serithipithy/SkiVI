<?php


class Home extends  Controller{
    public function index(){
       //tre sa fie si ceva model aici
        $this->view('home/index');
    }
}
