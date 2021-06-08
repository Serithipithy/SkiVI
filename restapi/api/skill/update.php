<?php
//putem sa sa folosim asta la my acount

//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:application/json');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once'../../config/Database.php';
include_once'../../models/Skill.php';

//instantiate db &connect
$database=new Database();
$db=$database->connect();

//instantiate the skill obj
$skill=new Skill($db);

//get the raw posted data

$data=json_decode(file_get_contents("php://input"));

//set id to update

$skill->id=$data->id;
 
$skill->title=$data->title;
$skill->description=$data->description;
$skill->author=$data->author;

//create the skill

if($skill->update()){
    echo json_encode(
        array('message'=>'skill updated')
    );
}else{
    echo json_encode(
        array('message'=>'skill not updated')
    );
}


