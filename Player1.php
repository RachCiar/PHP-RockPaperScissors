<?php
if (isset($_POST['submit'])){ //Check to see if form was submitted
    session_start(); // Start the session
    $_SESSION['player1'] = htmlentities($_POST['player1']); //Save variable in a session
    
    header('Location: Player2.php'); //Re-direct page
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>RPS Player 1</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Player 1: Please choose from the following</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >            
            <select name="player1" >
                <option value="rock">Rock</option>
                <option value="paper">Paper</option>
                <option value="scissors">Scissors</option>
            </select>
            <br><br><br>
            
            <input type="submit" name="submit" value="Submit" class="playButton">
            <br><br>
        </form>



    </body>
</html>
