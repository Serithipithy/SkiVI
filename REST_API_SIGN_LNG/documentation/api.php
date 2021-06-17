<?php

require("C:/Users/cosmi/OneDrive/Desktop/facultate/sem2/tweb/swagger/vendor/autoload.php");
$openapi = \OpenApi\Generator::scan(['C:/Users/cosmi/OneDrive/Desktop/facultate/sem2/tweb/REST_API_SIGN_LNG/models']);
header('Content-Type: application/json');
echo $openapi->toJSON();