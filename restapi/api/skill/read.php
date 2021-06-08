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

//skill query
$result=$skill->read();

//get rowcount
$num=$result->rowCount();

echo $num;
//check if any users;
if($num>0){
    //post array
    $skill_arr=array();
    $skill_arr['data']=array();

    while($row =$result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $skill_item= array(
            'skill_id'=>$id_s,
            'skill_title'=>$title,
            'skill_description'=>$description,
            'skill_author'=>$author
        );

        //push to 'data'
        array_push($skill_arr['data'],$skill_item);
    }
    echo json_encode($skill_arr);
}else{
    //no skills
    echo json_encode(
        array('message' => 'No skills Found')
      );
}