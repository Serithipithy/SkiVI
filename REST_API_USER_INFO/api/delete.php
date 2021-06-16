<?php
//headers
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:DELETE');
header('Access-Control-Allow-Headers:application/json');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

// get database connection
include_once '../config/Database.php';
  
// instantiate product object
include_once '../models/UserInfo.php';

//instantiate db &connect
$database=new Database();
$db=$database->connect();

//instantiate the skill obj
$user_info=new UserInfo($db);

//get the raw posted data

$data=json_decode(file_get_contents("php://input"));

//get course to delete
$user_info->course=isset($_GET['course'])?$_GET['course']:die();
$user_info->skill=isset($_GET['skill'])?$_GET['skill']:die();

// delete the product
if($user_info->delete()){
  
    // set response code - 200 ok
    http_response_code(200);
  
    // tell the user
    echo json_encode(array("message" => " Course was deleted."));
}else{// if unable to delete the product  
    // set response code - 503 service unavailable
    http_response_code(503);
  
    // tell the user
    echo json_encode(array("message" => "Unable to delete course."));
}
?>