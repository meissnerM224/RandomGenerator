<<?php 
error_reporting(-1);
ini_set('display-errors', 'On');
function rollDivce(int $size,int $number ){

    $max=$size;
    $list=array();
    for($i = 0; $i < $number; $i++){
         $ramdom= mt_rand(1,$max);
        array_push($list,' ', $ramdom);
         print_r($ramdom);
        }
    return $list;

}
rollDivce(20,5);
?>