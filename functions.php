
<?php 
error_reporting(-1);
ini_set('display-errors', 'On');

function rollDice($maxSize = 6, $tries = 1)  {
    print_r($maxSize);
    print_r($tries);
    if(empty($tries)){
        $tries = 1;
    }
    if(empty($maxSize)){
        $maxSize = 6;
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
}