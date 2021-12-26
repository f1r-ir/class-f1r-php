<?php 
include_once '../src/class-f1r.php';
use F1r_php as shourtlink;
$url = @$_GET['url'];
$name = @$_GET['name'];
if (isset($url) && !empty($url)){
  if (!isset($name) or empty($name)){
    $name = "rand";
  }
}
$result = shourtlink::creat_link($url,$name);
if (gettype($result) == "array"){
  echo 'sucsfull'.PHP_EOL."name : {$result['name']}" . PHP_EOL . "sourt_link : {$result['link']}" . PHP_EOL . "status_link : {$result['status']}";
}
