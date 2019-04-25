<?php session_start(); //Start the session

$player1 = $_SESSION['player1']; //declare the variables that were saved in the session
$player2 = $_SESSION['player2']; //declare the variables that were saved in the session

echo "<h2>Player one chose: " . $player1 . ".</h2>";
echo '<br>';
echo "<h2>Player two chose: " . $player2 . ".</h2>";
echo '<br>';
        if ($player1 == $player2) { //Run the game and compare the if statements
            echo '<h2>No one won. This game is a draw.</h2>';
        } else if ($player1 == 'rock' && $player2 == 'scissors') {
            echo '<h2>Player 1 Wins! Rock crushes Scissors.</h2>';
        } else if ($player1 == 'rock' && $player2 == 'paper') {
            echo '<h2>Player 2 Wins! Paper covers Rock.</h2>';
        } else if ($player1 == 'paper' && $player2 == 'rock') {
            echo '<h2>Player 1 Wins! Paper covers Rock.</h2>';
        } else if ($player1 == 'paper' && $player2 == 'scissors') {
            echo '<h2>Player 2 Wins! Scissors cut Paper.</h2>';
        } else if ($player1 == 'scissors' && $player2 == 'paper') {
            echo '<h2>Player 1 Wins! Scissors cut Paper.</h2>';
        } else if ($player1 == 'scissors' && $player2 == 'rock') {
            echo '<h2>Player 2 Wins! Rock crushes Scissors</h2>';
        } else {
            echo 'Please make a choice.';
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
        <link href="style.css" rel="stylesheet">
        <title>RPS Results</title>
    </head>
    <body>
        <a href="player1.php" class="playButton">Play Again</a>
        <a href="index.php" class="playButton">Home</a>
    </body>
</html>
