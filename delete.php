<?php
include_once("./arrayFunction.php");

$key = intval($_GET['key']);
pre_print_r($key); 
$jsonGet = file_get_contents('./api.json');
$my_array = json_decode($jsonGet);

if (!empty($my_array)){
    unset($my_array[$key]);
    $newArray = array_values($my_array);
}
$decodeArray = json_encode($newArray);
file_put_contents('./api.json',$decodeArray);
header('Location: index.php');
