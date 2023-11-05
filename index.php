<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatilbe" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" href="assets/styles.css">
    <title>Dicey Times</title>
</head>

<body>
    <header class="jumbotron">
        <div class="container">
            <h1>Roll the Dice and See Who Wins</h1>
        </div>
    </header>
    <div>
        <form id="activ_dice" action="functions.php">
            <label for="diceSize_ID">How many faces have you dice?</label>
            <br>
            <input type="text" id="diceSize_ID" name="diceSize">
            <br> 
            <label for="dicetryes_ID">How often want to throw?</label>
             <br>
            <input type="text" id="dicetryes_ID" name="diceNum"> 
            <br>
            <!-- <input type="submit"> -->
            <a href="#" onclick="document.getElementById('activ_dice').submit()">Roll the Dice</a>
        </form>
    </div>
    <script src="assets\js\bootstrap.bundle.js"></script>
</body>

</html>