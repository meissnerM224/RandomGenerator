<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatilbe" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Dicey Times</title>
</head>
<body class="bg-success.bg p-2" style="--bs-bg-opacity: .5;">
    <!-- <header class= "mt-3 p-3 bg-primary text-white rounded"> -->
    <header class= "alert alert-dark">
        <div class="container">
            <h1>Roll the Dice and See Who Wins</h1>
        </div>
    </header>
        <section class="container" id="products">
            <form id="activ_dice" action="functions.php">
                <div class="row">
                    <div class ="col">
                        <div class="card">
                            <div class="card-body">
                                <label for="diceSize_ID">How many faces?</label>
                                <br>
                                <input type="text" class="form-control" id="diceSize_ID" name="diceSize">
                            </div>
                        </div>
                    </div>
                    <div class= "col">
                        <div class="card">
                            <div class ="card-body">
                                <label for="dicetryes_ID">how often to roll the throw?</label>
                                <br>
                                <input type="text" class="form-control" id="dicetryes_ID" name="diceNum"> 
                            </div>
                        </div>
                    </div>
                </div>   
                    <div class="justify-content-center">   
                        <div class= "alert alert-secondary container" >
                            <a href="#" class="btn btn-primary" onclick="document.getElementById('activ_dice').submit()">Roll the Dice</a>
                        </div>
                    </div>
            </form>
        </section>
    <script src="assets\js\bootstrap.bundle.js"></script>
</body>

</html>