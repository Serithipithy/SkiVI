<?php
//putem sa sa folosim asta la my acount

//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

include_once'../../config/Database.php';
include_once'../../models/User.php';

//instantiate db &connect
$database=new Database();
$db=$database->connect();

$user=new User($db);


//get id from url

$user->id=isset($_GET['id'])?$_GET['id']:die();

//get user

$user->read_single();

//create array

$user_arr=array(
    'name'=>$user->user_name,
    'email'=>$user->user_email
);

//make json
print_r(json_encode($user_arr));