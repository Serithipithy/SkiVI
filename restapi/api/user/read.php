<?php

//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

include_once'../../config/Database.php';
include_once'../../models/User.php';

//instantiate db &connect
$database=new Database();
$db=$database->connect();

$user=new User($db);

//user query
$result=$user->read();

//get rowcount
$num=$result->rowCount();

echo $num;
//check if any users;
if($num>0){
    //post array
    $user_arr=array();
    $user_arr['data']=array();

    while($row =$result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $user_item= array(
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_email'=>$user_email
        );

        //push to 'data'
        array_push($user_arr['data'],$user_item);
    }
    echo json_encode($user_arr);
}else{
    //no users
    echo json_encode(
        array('message' => 'No users Found')
      );
}
