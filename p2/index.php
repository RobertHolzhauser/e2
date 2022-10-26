<?php
session_start();
require 'game.php';
require 'games.php';

$game  = (count($_SESSION) > 10) ? $_SESSION["game"] : new Game();    # if game_turn is already in session, get game from session, otherwise create a new game

if ($game->game_turn == 0) {            # if a brand new game, add data to the SESSION 
    $game->incrementGameTurn();
    $_SESSION["game_turn"] = $game->game_turn;
    $_SESSION["queue"] = $game->getQueue();     # save queue of numbers yet to be called to the session
    $_SESSION["called"] = $game->called;        # save the numbers that have already been called to the session
    $_SESSION["current_call"] = $game->callNumber();  # generate and save the current call to the session
    $_SESSION["board0"] = $game->players[0]->board->board;      # save computer's board to the session
    $_SESSION["board1"] = $game->players[1]->board->board;      # save player's board to the session
    $_SESSION["tracking0"] = $game->players[0]->tracking;       # save numbers player 0 has tracked to the session 
    $_SESSION["tracking1"] = $game->players[1]->tracking;       # save numbers player 1 has tracked to the session 
    $_SESSION["game"] = $game;
} else {
    $game = $_SESSION["game"];
    $game->game_turn = $_SESSION["game_turn"] + 1;          # increment game turn from the session and save to the current game
    $game->queue = $_SESSION["queue"];                      # retrieve the queue of numbers available to be called from the session 
    $game->called =  $_SESSION["called"];                   # get the array of numbers called from Session
    $game->callNumber();                                    # generate and save the current call to the game
    $game->players[0]->board->board = $_SESSION["board0"];  # Get player0's board from the session and save to the current game
    $game->players[1]->board->board = $_SESSION["board1"];  # Get player1's board from the session and save to the current game
    $game->players[0]->tracking = $_SESSION["tracking0"];       # retrieve numbers player 0 has tracked from the session 
    $game->players[1]->tracking = $_SESSION["tracking1"];       # retrieve numbers player 1 has tracked from the session 

    /******************************************************
     * RESET variables in sesssion
     ******************************************************/
}

echo "var_dump<br>";
var_dump($_SESSION);


require 'index-view.php';