<<?php 
error_reporting(-1);
ini_set('display-errors', 'On');
function rollDivce(int $size,int $number ){

    $max=$size;
    $ramdom= mt_rand(1,$max);
     $list=array();
     for($i =0; $i < $number; $i++){
         $list= $list($ramdom);
         echo($ramdom);
    }
    return $ramdom;
}
?>