<?php
require 'game.php';
require 'games.php';


$game = new Game();



if (isset($_SESSION["a"])) {                    # if session is set - move all data from sesssion to game
    
    $_SESSION["queue"] = $game->getQueue();
    $_SESSION["called"] = $game->called;
   
} else {                                        # if session is NOT set, start_session, and move data from game to session
    session_start();
    echo "Session Started";
    $game->incrementGameTurn();
    echo "Game Turn" . $game->game_turn;
}




require 'index-view.php';