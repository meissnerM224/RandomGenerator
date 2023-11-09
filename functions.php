
<<?php 
error_reporting(-1);
ini_set('display-errors', 'On');

function rollDice(int $size,int $tries ){
    $max = $size;
    for($i = 0; $i < $tries; $i++){
        $result[]=mt_rand(1, $max);
    }
    return $result;
}
if($_REQUEST['REQUEST METHOD']=== 'GET')
$input = array($_REQUEST);
$number = array_pop($_REQUEST);
$size = array_pop($_REQUEST);
print_r(rollDice($size, $number));
// print_r($number);
// print_r(' ');
// print_r($size);
// print_r(' ');
// $list = array();
// $ramdom = mt_rand(1,$max);
// array_push($list, $ramdom);
// print_r($ramdom);
// var_dump( rollDice( intval($size),intval($number)));