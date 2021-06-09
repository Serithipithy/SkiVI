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
include_once '../models/Info.php';

//instantiate db &connect
$database=new Database();
$db=$database->connect();

$course = new Info($db);

//execute
$result=$course->getAll();

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
            'description'=>$description,
            'image'=>$image
        );

        //push to 'data'
        array_push($skill_arr['data'],$skill_item);
    }
    echo json_encode($skill_arr);
}else{
    //no skills
    echo json_encode(
        array('message' => 'No info Found')
      );
}