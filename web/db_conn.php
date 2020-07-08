<?php
/*METHOD GET AND GET WITH GET ID*/
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT,PATCH, POST, GET, OPTIONS, DELETE");

$myArray = array();
$myArray[0] ['id'] = 1;
$myArray[0] ['nome'] = "consigli comunali";
$myArray[0] ['descrizione'] = "breve descrizione";
$myArray[0] ['immagine'] = "https://i.imgur.com/oTUXBio.jpg";

$myArray[1] ['id'] = 2;
$myArray[1] ['nome'] = "aggiornamenti";
$myArray[1] ['descrizione'] = "breve descrizione";
$myArray[1] ['immagine'] = "https://i.imgur.com/l2CvYzN.jpg";

$myArray[2] ['id'] = 3;
$myArray[2] ['nome'] = "sezione3";
$myArray[2] ['descrizione'] = "breve descrizione";
$myArray[2] ['immagine'] = "https://imgur.com/gallery/9SdN4nM";


$myArray[3] ['id'] = 4;
$myArray[3] ['nome'] = "sezione3";
$myArray[3] ['descrizione'] = "breve descrizione";
$myArray[3] ['immagine'] = "https://i.imgur.com/9UGkG51.jpg";

$myArray[4] ['id'] = 5;
$myArray[4] ['nome'] = "sezione3";
$myArray[4] ['descrizione'] = "breve descrizione";
$myArray[4] ['immagine'] = "https://i.imgur.com/nSzKdjz.jpg";

$myArray[5] ['id'] = 6;
$myArray[5] ['nome'] = "sezione3";
$myArray[5] ['descrizione'] = "breve descrizione";
$myArray[5] ['immagine'] = "https://i.imgur.com/Nkuhgzl.jpg";

print json_encode($myArray);
