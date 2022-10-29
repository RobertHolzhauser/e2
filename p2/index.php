<?php
//echo 'index.php - START<br>';
include 'game.php';
//echo 'index.php - 1000<br>';

spl_autoload_register(function ($game) {
    include 'classes/' . $game . '.game.php';
    //  echo 'REH ... autoloading...<br>';
});

//session_start();
if (!isset($_Sesssion)) {
    //echo 'IN index.php session is not set<br>';
    try {
        session_start();
        //  echo 'started session in index.php<br>';
    } catch (Exception) {
        //echo 'Exception in index.php trying to start session<br>';
    }
}

//echo 'index.php - 1100<br>';


if (!isset($game)) {
    $game = new Game();
}

//echo 'index.php - 1200<br>';
if (!isset($_SESSION['game'])) {
    //echo "New Game<br>";
    //echo 'index.php - 1300<br>';
    $game->incrementGameTurn();
    //echo 'index.php - 1400<br>';
    $_SESSION["game_turn"] = $game->game_turn;
    //echo 'index.php - 1500<br>';
    $_SESSION["queue"] = $game->getQueue();     # save queue of numbers yet to be called to the session
    //echo 'index.php - 1600<br>';
    $temp_call = $game->callNumber();  # generate and save the current call to the session
    //echo 'index.php - 1700<br>';
    //echo '$temp_call in index.php =  ' . $temp_call;
    $_SESSION["current_call"] = $temp_call;
    //echo 'index.php - 1800 $_SESSION["current_call"] = ' .  $_SESSION["current_call"] . ' <br>';
    $_SESSION["called"] = $game->called;        # save the numbers that have already been called to the session   


    //echo 'index.php - 1900<br>';
    $_SESSION["board0"] = $game->players[0]->board->board;      # save computer's board to the session
    $_SESSION["board1"] = $game->players[1]->board->board;      # save player's board to the session
    $_SESSION["tracking0"] = $game->players[0]->tracking;       # save numbers player 0 has tracked to the session 
    $_SESSION["tracking1"] = $game->players[1]->tracking;       # save numbers player 1 has tracked to the session 
    $_SESSION["game"] = $game;
    $_SESSION["bingo"] = $game->bingo;
} else {
    //echo 'index.php - 2000<br>';
    if (!isset($game)) {
        //echo 'index.php - 2100<br>';
        $game = new Game();
        //echo 'index.php - 2200<br>';
    }
    //echo 'index.php - 2300<br>';
    if (isset($_SESSION['game'])) {
        $game = $_SESSION['game'];
    }
    //echo 'index.php - 2400<br>';
    if (isset($game)) {
        try {
            $game->incrementGameTurn();                             # increment game turn from the session and save to the current game
        } catch (Exception) {
            // echo 'EXCEPTION index.php - line 57';
        }
    }


    //$game->game_turn = $_SESSION["game_turn"] + 1;
    //echo 'index.php - 2500<br>';
    $game->queue = $_SESSION["queue"];                      # retrieve the queue of numbers available to be called from the session 
    $game->called =  $_SESSION["called"];                   # get the array of numbers called from Session
    $game->callNumber();                                    # generate and save the current call to the game
    $game->players[0]->board->board = $_SESSION["board0"];  # Get player0's board from the session and save to the current game
    $game->players[1]->board->board = $_SESSION["board1"];  # Get player1's board from the session and save to the current game
    $game->players[0]->tracking = $_SESSION["tracking0"];       # retrieve numbers player 0 has tracked from the session 
    $game->players[1]->TrackCall((int) $_SESSION["track"]);       # retrieve numbers player 1 has tracked from the session 
    $game->bingo  = $_SESSION["bingo"];


    /******************************************************
     * RESET variables in sesssion
     ******************************************************/
    $_SESSION["game_turn"] = $game->game_turn;
    $_SESSION["queue"] = $game->getQueue();     # save queue of numbers yet to be called to the session
    $_SESSION["called"] = $game->called;        # save the numbers that have already been called to the session
    $_SESSION["current_call"] = $game->current_call;  # generate and save the current call to the session
    $_SESSION["board0"] = $game->players[0]->board->board;      # save computer's board to the session
    $_SESSION["board1"] = $game->players[1]->board->board;      # save player's board to the session
    $_SESSION["tracking0"] = $game->players[0]->tracking;       # save numbers player 0 has tracked to the session 
    $_SESSION["tracking1"] = $game->players[1]->tracking;       # save numbers player 1 has tracked to the session 
    $_SESSION["game"] = $game;
    $_SESSION["bingo"] = $game->bingo;
}

require 'index-view.php';