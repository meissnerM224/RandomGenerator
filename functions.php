
<<?php 
error_reporting(-1);
ini_set('display-errors', 'On');

function rollDivce(int $size,int $number ){
    $max = $size;
    $list = array();
    for($i = 0; $i < $number; $i++){
        $ramdom = mt_rand(1,$max);
        array_push($list, $ramdom);
        print_r($ramdom);
    }
    return $list;
}
$input = array($_REQUEST);
$number = array_pop($_REQUEST);
print_r($number);
print_r(' ');
$size = array_pop($_REQUEST);
print_r($size);
print_r(' ');
 
var_dump( rollDivce( intval($size),intval($number)));