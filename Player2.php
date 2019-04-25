<?php 
if (isset($_POST['submit'])){ //Check to see if form was submitted
    session_start(); // Start the session
    $_SESSION['player2'] = htmlentities($_POST['player2']); //Save variable player2 in a session
    
    header('Location: rpsCalculate.php'); //Re-direct page 
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
        <title>RPS Player 2</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Player 2: </h1>
        <h1>Please choose from the following</h1>  
        <div id="player2">
            <form action="" method="post" >
                <select name="player2">                    
                    <option value="rock">Rock</option>
                    <option value="paper">Paper</option>
                    <option value="scissors">Scissors</option>
                </select>
                <br><br><br>
                
                <input type="submit" name="submit" value="Submit" class="playButton">
                <br><br>
            </form>
        </div> 
<?php

?>
    </body>
</html>
