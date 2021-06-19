<?php

class Skills extends Controller
{
    public function __construct(){
        $this->userModel=$this->model('User');
        $this->skillModel = $this->model('Skill');
    }
    public function first_aid(){
        if(!$_SESSION['user_id']){
            header('location:' . URLROOT . '/users/login');
        } else {
            $content_array=$this->skillModel->getCoursesFA();
            $done_array=$this->userModel->getTakenCourses($_SESSION['user_id'],'first_aid'); 
            $param=$this->skillModel->getDoneCourses($content_array,$done_array);       
            $this->view('skills/first_aid', $content_array,$param);
        }

    }

    public function origami(){
        if(!$_SESSION['user_id']){
            header('location:' . URLROOT . '/users/login');
        } else {
            $content_array=$this->skillModel->getCoursesOrigami();
            $done_array=$this->userModel->getTakenCourses($_SESSION['user_id'],'origami'); 
            $param=$this->skillModel->getDoneCourses($content_array,$done_array); 
            $this->view('skills/origami', $content_array,$param);
        }
    }

    public function sign_language(){
        if(!$_SESSION['user_id']){
            header('location:' . URLROOT . '/users/login');
        } else {
            $content_array=$this->skillModel->getCoursesSignLng();
            $done_array=$this->userModel->getTakenCourses($_SESSION['user_id'],'sign_lng'); 
            $param=$this->skillModel->getDoneCourses($content_array,$done_array); 
            $this->view('skills/sign_language', $content_array,$param);
        }
    }

    public function addCourse(){
        if($_SESSION['admin'] === 'no'){
            header('location:' . URLROOT . '/pages/restrictPage');
        } 
        else $this->view('skills/addCourse');
    }
    public function manage(){
        if($_SESSION['admin'] == 'no'){
            header('location:' . URLROOT . '/pages/restrictPage');
        }
        else $this->view('skills/manage');
    }
    public function updateCourse(){
        if($_SESSION['admin'] == 'no'){
            header('location:' . URLROOT . '/pages/restrictPage');
        }
        else $this->view('skills/updateCourse');
    }
    public function deleteCourse(){
        if($_SESSION['admin'] == 'no'){
            header('location:' . URLROOT . '/pages/restrictPage');
        }
        else $this->view('skills/deleteCourse');
    }

}