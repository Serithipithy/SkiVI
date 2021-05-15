<?php

class Skills extends Controller{

    public function skill($name=''){

        $user=$this->model('User');
        $user->name=$name;
        $this->view('skills/skill1',['name'=>$user->name]);

    }

}
?>