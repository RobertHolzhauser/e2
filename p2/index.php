<?php
include 'game.php';

spl_autoload_register(function ($game) {
    include 'classes/' . $game . '.game.php';
});

if (!isset($_Sesssion)) {
    try {
        session_start();
    } catch (Exception) {
    }
}

if (!isset($game)) {
    $game = new Game();
}

if (!isset($_SESSION['game'])) {
    $game->incrementGameTurn();
    $_SESSION["game_turn"] = $game->game_turn;
    $_SESSION["queue"] = $game->getQueue();                     # save queue of numbers yet to be called to the session
    $temp_call = $game->callNumber();                           # generate and save the current call to the session
    $_SESSION["current_call"] = $temp_call;
    $_SESSION["called"] = $game->called;                        # save the numbers that have already been called to the session   


    $_SESSION["board0"] = $game->players[0]->board->board;      # save computer's board to the session
    $_SESSION["board1"] = $game->players[1]->board->board;      # save player's board to the session
    $_SESSION["tracking0"] = $game->players[0]->tracking;       # save numbers player 0 has tracked to the session 
    $_SESSION["tracking1"] = $game->players[1]->tracking;       # save numbers player 1 has tracked to the session 
    $_SESSION["game"] = $game;
    $_SESSION["bingo"] = $game->bingo;
} else {
    if (!isset($game)) {
        $game = new Game();
    }
    if (isset($_SESSION['game'])) {
        $game = $_SESSION['game'];
    }
    if (isset($game)) {
        try {
            $game->incrementGameTurn();                    # increment game turn from the session and save to the current game
        } catch (Exception) {
        }
    }

    $game->queue = $_SESSION["queue"];                      # retrieve the queue of numbers available to be called from the session 
    $game->called =  $_SESSION["called"];                   # get the array of numbers called from Session
    $game->callNumber();                                    # generate and save the current call to the game
    $game->players[0]->board->board = $_SESSION["board0"];  # Get player0's board from the session and save to the current game
    $game->players[1]->board->board = $_SESSION["board1"];  # Get player1's board from the session and save to the current game
    $game->players[0]->tracking = $_SESSION["tracking0"];   # retrieve numbers player 0 has tracked from the session 
    $game->players[1]->TrackCall((int) $_SESSION["track"]); # retrieve numbers player 1 has tracked from the session 
    $game->bingo  = $_SESSION["bingo"];


    /******************************************************
     * RESET variables in sesssion
     ******************************************************/
    $_SESSION["game_turn"] = $game->game_turn;
    $_SESSION["queue"] = $game->getQueue();                     # save queue of numbers yet to be called to the session
    $_SESSION["called"] = $game->called;                        # save the numbers that have already been called to the session
    $_SESSION["current_call"] = $game->current_call;            # generate and save the current call to the session
    $_SESSION["board0"] = $game->players[0]->board->board;      # save computer's board to the session
    $_SESSION["board1"] = $game->players[1]->board->board;      # save player's board to the session
    $_SESSION["tracking0"] = $game->players[0]->tracking;       # save numbers player 0 has tracked to the session 
    $_SESSION["tracking1"] = $game->players[1]->tracking;       # save numbers player 1 has tracked to the session 
    $_SESSION["game"] = $game;
    $_SESSION["bingo"] = $game->bingo;
}

require 'index-view.php';