<?php
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
