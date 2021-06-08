<?php
//putem sa sa folosim asta la my acount

//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

include_once'../../config/Database.php';
include_once'../../models/Skill.php';

//instantiate db &connect
$database=new Database();
$db=$database->connect();

$skill=new Skill($db);


//get id from url

$skill->id=isset($_GET['id'])?$_GET['id']:die();

//get skill

$skill->read_single();

//create array

$skill_arr=array(
    'skill_id'=>$skill->id,
    'skill_title'=>$skill->title,
    'skill_description'=>$skill->description,
    'skill_author'=>$skill->author
);

//make json
print_r(json_encode($skill_arr));