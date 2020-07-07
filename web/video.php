<?php
/*METHOD GET AND GET WITH GET ID*/
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT,PATCH, POST, GET, OPTIONS, DELETE");

$myArray = array();
$myArray[0] ['id'] = 1;
$myArray[0] ['nome'] = "video1";
$myArray[0] ['video'] = "https://www.youtube.com/embed/V5MDB4GPcE0";


$myArray[1] ['id'] = 2;
$myArray[1] ['nome'] = "video2";
$myArray[1] ['video'] = "https://www.youtube.com/embed/V5MDB4GPcE0";


$myArray[2] ['id'] = 3;
$myArray[2] ['nome'] = "video3";
$myArray[2] ['video'] = "https://www.youtube.com/embed/V5MDB4GPcE0";



print json_encode($myArray);
