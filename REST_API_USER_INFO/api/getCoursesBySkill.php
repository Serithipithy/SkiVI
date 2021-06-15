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
include_once '../models/UserInfo.php';

//instantiate db &connect
$database=new Database();
$db=$database->connect();

$user_info = new UserInfo($db);

$user_info->user_id=isset($_GET['id'])?$_GET['id']:die();
$user_info->skill=isset($_GET['skill'])?$_GET['skill']:die();

$result=$user_info->getCoursesBySkill();

//get rowcount
$num=$result->rowCount();

//check if any users;
if($num>0){
    //post array
    $course_arr=array();

    while($row =$result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        array_push($course_arr,$course);
    }
    echo json_encode($course_arr);
}else{
    //no skills
    echo json_encode(
        array('message' => 'No course Found')
      );
}