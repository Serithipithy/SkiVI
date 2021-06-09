<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// get database connection
include_once '../config/database.php';
  
// instantiate product object
include_once '../models/FirstAid.php';

//instantiate db &connect
$database=new Database();
$db=$database->connect();

$course = new FirstAid($db);

//get skill title
$course->title=isset($_GET['title'])?$_GET['title']:die();

//execute
$result=$course->getSingleCourse();

//get rowcount
$num=$result->rowCount();

//check if any users;
if($num>0){
    //post array
    $skill_arr=array();
    $skill_arr['data']=array();

    while($row =$result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $skill_item= array(
            'title'=>$title,
            'link'=>$link,
            'text'=>$text
        );

        //push to 'data'
        array_push($skill_arr['data'],$skill_item);
    }
    echo json_encode($skill_arr);
}else{
    //no skills
    echo json_encode(
        array('message' => 'No course Found')
      );
}