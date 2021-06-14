<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../config/database.php';

// instantiate product object
include_once '../models/UserInfo.php';
  
$database = new Database();
$db = $database->connect();
  
$user_info = new UserInfo($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));

$user_info->user_id=$data->user_id;
$user_info->skill=$data->skill;
$user_info->course=$data->course;

if($user_info->addDone()){
    // set response code - 201 created
    http_response_code(201);

    // tell the user
    $response=array();
    $response["succes"] = true;
    $response["message"] = "Done.";
    echo json_encode($response);
}else{ // if unable to create the product, tell the user  
    // set response code - 503 service unavailable
    http_response_code(503);

    // tell the user
    $response=array();
    $response["succes"] = false;
    $response["message"] = "Not done.";
    echo json_encode($response);
}