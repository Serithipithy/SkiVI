<?php

require("C:/Users/alexa/Documents/TW/swagger/vendor/autoload.php");
$openapi = \OpenApi\Generator::scan(['C:/Users/alexa/Documents/TW/REST_API_FA/models']);
header('Content-Type: application/json');
echo $openapi->toJSON();