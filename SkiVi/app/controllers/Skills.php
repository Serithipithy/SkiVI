<?php

class Skills extends Controller
{
    public function __construct(){
        $this->skillModel = $this->model('Skill');
    }
    public function first_aid(){
        if(!$_SESSION['user_id']){
            header('location:' . URLROOT . '/users/login');
        } else {
            $content_array=$this->skillModel->getCoursesFA();        
            $this->view('skills/first_aid', $content_array);
        }

    }

    public function origami(){
        if(!$_SESSION['user_id']){
            header('location:' . URLROOT . '/users/login');
        } else {
            $content_array=$this->skillModel->getCoursesOrigami();
            $this->view('skills/origami', $content_array);
        }
    }

    public function sign_language(){
        if(!$_SESSION['user_id']){
            header('location:' . URLROOT . '/users/login');
        } else {
            $content_array=$this->skillModel->getCoursesSignLng();
            $this->view('skills/sign_language', $content_array);
        }
    }

    public function addCourse(){
        if(!$_SESSION['admin'] == 'yes'){
            header('location:' . URLROOT . '/pages/restrictPage');
        } 
        else $this->view('skills/addCourse');
    }
    public function modify(){
        if(!$_SESSION['admin'] == 'yes'){
            header('location:' . URLROOT . '/pages/restrictPage');
        }
        else $this->view('skills/modify');
    }
    public function updateCourse(){
        if(!$_SESSION['admin'] == 'yes'){
            header('location:' . URLROOT . '/pages/restrictPage');
        }
        else $this->view('skills/updateCourse');
    }
    public function deleteCourse(){
        if(!$_SESSION['admin'] == 'yes'){
            header('location:' . URLROOT . '/pages/restrictPage');
        }
        else $this->view('skills/deleteCourse');
    }

}