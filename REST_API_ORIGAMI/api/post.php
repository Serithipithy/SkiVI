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
include_once '../models/Origami.php';
  
$database = new Database();
$db = $database->connect();
  
$course = new Origami($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));


// make sure data is not empty
if(!empty($data->title) &&(!empty($data->link) || !empty($data->text))){

    // set course property values
    $course->title=$data->title;
    $course->link=$data->link;
    $course->text=$data->text;

    // create the course
    if($course->createCourse()){
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        $response=array();
        $response["succes"] = true;
        $response["message"] = "Course was created.";
        echo json_encode($response);
    }else{ // if unable to create the product, tell the user  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        $response=array();
        $response["succes"] = false;
        $response["message"] = "Unable to create course.";
        echo json_encode($response);
    }
}else{ // tell the user data is incomplete  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    $response=array();
    $response["succes"] = false;
    $response["message"] = "Unable to create course. Data is incomplete.";
    echo json_encode($response);
}
?>