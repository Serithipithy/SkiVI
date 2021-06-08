<?php
//putem sa sa folosim asta la my acount

//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:DELETE');
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

//get title to delete
$skill->title=isset($_GET['title'])?$_GET['title']:die();

//format title
$skill->title = strtolower($skill->title);
$skill->title = str_replace(" ","_",$title_skill);

//set skill id after name
$skill->set_skill_id_by_name();

// perform delete
if($skill->drop_table() && $skill->delete()){
    echo json_encode(
        array('message'=>'Skill has been deleted')
    );
}else{
    echo json_encode(
        array('message'=>'Skill can not be deleted safely.')
    );
}


