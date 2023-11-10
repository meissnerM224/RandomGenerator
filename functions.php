
<?php 
error_reporting(-1);
ini_set('display-errors', 'On');

function rollDice($maxSize = 6, $tries = 1)  {
    print_r($maxSize);
    print_r($tries);
    if(empty($tries)){
        $tries = 2;
    }
    if(empty($maxSize)){
        $maxSize = 2;
    }
$results = [];
    for($i = 0; $i < $tries; $i++){
        $results[] = mt_rand(1, $maxSize);
    }

    return $results;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $tries = $_REQUEST['howManyDice'];
    $size = $_REQUEST['diceSize'];
    $results = (rollDice($size, $tries));
    $value = implode(', ', $results);
    echo '<div class="container">';
    echo '<p>Your results:</p>';
    echo '<ul>';
    foreach ($results as $result){
        echo '<li>' .':  ' . $result . '</li>';
    }
    echo '</ul>';
    echo '</div>';
    echo "<script>alert(" .  $value . ")</script>";
}
// print_r($number);
// print_r(' ');
// print_r($size);
// print_r(' ');
// $list = array();
// $ramdom = mt_rand(1,$max);
// array_push($list, $ramdom);
// print_r($ramdom);
// var_dump( rollDice( intval($size),intval($number)));