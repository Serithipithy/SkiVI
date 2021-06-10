<?php

class Skills extends Controller
{
    public function __construct(){
        $this->userModel = $this->model('User');
    }
    public function first_aid(){
        $curl=curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL=>"http://localhost:8000/REST_API_FA/api/get.php",
          CURLOPT_RETURNTRANSFER=>true,
          CURLOPT_CUSTOMREQUEST=>"GET",
        ));

        $response=curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);
        $title_array=array();
        $link_array=array();
        $text_array=array();
        foreach($response['data'] as $values){
            //Print the element out.
            //echo $values['title'], '<br>';
            array_push( $title_array,$values['title']);
            array_push( $link_array,$values['link']);
            array_push( $text_array,$values['text']);

        }
      $content_array=array();
      array_push($content_array,$title_array,$link_array,$text_array);
 
    //var_dump($content_array);
    //prima chestie e coloana(titlu)(link)(text)
    //a doua e linia contentul de la cursul x
       echo $content_array[2][3];
       //echo sizeof($content_array);
     $this->view('skills/first_aid',$content_array);
    }

  public function addCourse(){
      $this->view('skills/addCourse');
  }

}