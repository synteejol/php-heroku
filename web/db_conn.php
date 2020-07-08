<?php
/*METHOD GET AND GET WITH GET ID*/
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT,PATCH, POST, GET, OPTIONS, DELETE");

$myArray = array();
$myArray[0] ['id'] = 1;
$myArray[0] ['nome'] = "sezione1";
$myArray[0] ['descrizione'] = "breve descrizione";
$myArray[0] ['immagine'] = "https://images.unsplash.com/photo-1507591064344-4c6ce005b128?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=500&h=350&fit=crop&ixid=eyJhcHBfaWQiOjF9";

$myArray[1] ['id'] = 2;
$myArray[1] ['nome'] = "sezione2";
$myArray[1] ['descrizione'] = "breve descrizione";
$myArray[1] ['immagine'] = "https://images.unsplash.com/photo-1507591064344-4c6ce005b128?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=500&h=350&fit=crop&ixid=eyJhcHBfaWQiOjF9";

$myArray[2] ['id'] = 3;
$myArray[2] ['nome'] = "sezione3";
$myArray[2] ['descrizione'] = "breve descrizione";
$myArray[2] ['immagine'] = "https://imgur.com/gallery/9SdN4nM";


print json_encode($myArray);
