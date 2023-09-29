<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Dicey Times</title>
</head>

<body>
    <h1>Dicey Times!</h1>
    <h3>Roll the Dice and See Who Wins</h3>
    <div>
        <form id="activ_roll_dice" action="functions.php">
            <label for="diceSize_ID">How many faces have you dice?</label>
            <br>
            <input type="text" id="diceSize_ID">
            <br>
            <label for="dicetryes_ID">How often want to throw?</label>
            <br>
            <input type="text" id="dicetryes_ID">
             <br>
          <!--  <input type="submit"> -->
            <a href="#" onclick="document.getElementById('activ_roll_dice').submit()">roll the Dice</a>
        </form>
    </div>
</body>

</html>