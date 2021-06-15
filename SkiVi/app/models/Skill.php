<?php

class Skill{
    private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function getCoursesFA(){
            $curl=curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL=>"http://localhost:8000/REST_API_FA/api/get.php",
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_CUSTOMREQUEST=>"GET",
            ));

            $response=curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response, true);
            
            $content_array=array();
        
            foreach($response['data'] as $values){
                //Print the element out.
                //echo $values['title'], '<br>';

                array_push($content_array,array($values['title'],$values['link'],$values['text']));
            }

            return $content_array;
        }
        public function getCoursesOrigami(){
            $curl=curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL=>"http://localhost:8000/REST_API_ORIGAMI/api/get.php",
                CURLOPT_RETURNTRANSFER=>true,
                CURLOPT_CUSTOMREQUEST=>"GET",
            ));

            $response=curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response, true);
            
            $content_array=array();

            foreach($response['data'] as $values){
                //Print the element out.
                //echo $values['title'], '<br>';

                array_push($content_array,array($values['title'],$values['link'],$values['text']));
            }

            return $content_array;
        }
        public function getCoursesSignLng(){
            $curl=curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL=>"http://localhost:8000/REST_API_SIGN_LNG/api/get.php",
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_CUSTOMREQUEST=>"GET",
            ));

            $response=curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response, true);
            
            $content_array=array();
        
            foreach($response['data'] as $values){
                //Print the element out.
                //echo $values['title'], '<br>';

                array_push($content_array,array($values['title'],$values['link'],$values['text']));
            }

            return $content_array;
        }

        public function getDoneCourses($content_array,$done_array){
            $param=array();
            $size1=count($content_array);
            if(!empty($done_array['message'])){
                $size2=0;
            }
            else{
                $size2=count($done_array);
            }
            for($i=0;$i<$size1 ;$i++){ 
              $param[$i]='no';
              if($size2>0){
                  for($j=0;$j<$size2;$j++){
                      if( $content_array[$i][0]==$done_array[$j]){
                          $param[$i]='yes';
                          $j=$size2;
                      }
                  }
              }
            }
            return $param;
        }
}