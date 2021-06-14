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
include_once '../models/UserInfo.php';

//instantiate db &connect
$database=new Database();
$db=$database->connect();

$user_info = new UserInfo($db);

$user_info->user_id=isset($_GET['id'])?$_GET['id']:die();
$user_info->skill=isset($_GET['skill'])?$_GET['skill']:die();

$num=$user_info->getNoCoursesBySkill();

echo json_encode($num);