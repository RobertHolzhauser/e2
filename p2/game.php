<?php

class Game  #holds overall information for the current game
{
    public string $title = "Project 2 - BINGO";    # Title of the Game
    public Player $winner;             # TODO Player object that wins first
    public Instruction $instruction;   # instructions for game play
    public int $difficulty = 10;       # TODO determines how long player has between calls, and computer likelihood to miss.  Inverse - the higher the easier  
    public $players = [];              # array of players
    public $queue = [];                # the queue of numbers that are yet to be called 
    public $called  = [];              # the numbers that have been called so far in the game
    public int $current_call;          # current number in play

    public string $game_status = "playing";   # if status <> playing the gave is over
    public int $game_turn = 0;         # used to limit the number of turns and to track who's turn it is by odd or even
    public int $bingo = 0;             #  if one player game don't need to track which player has bingo TODO to evolve by moving $bingo to player class.

    public function __construct()
    {
        $this->instruction = new Instruction();     # populate text for instructions
        $this->players[] = new Player("Computer");  # create Computer  player
        $this->players[] = new Player("Guest");     # create Guest player

        $this->populateCallQueue();
    }

    public function populateCallQueue()
    {
        for ($i = 1; $i < 100; $i++) {             # populate call queue with numbers from 1 to 99
            $this->queue[] = $i;
        }
        shuffle($this->queue);                       # randomize the order in which the numbers in queue will be calledfor        
    }

    public function  getTitle()                     # can be used to print the game title on a view page
    {
        echo $this->title;
    }

    public function callNumber()                    # if numbers are left in the queue take the next one, make it the current call, and add to the list of calls
    {
        if (count($this->queue) > 0) {
            $this->current_call = array_pop($this->queue);
            $this->called[] = $this->current_call;
        } else {
            $this->game_status = "Game Over";       # if no further numbers, end the game
        }
        return $this->current_call;
    }

    public function getSesssionValues()
    {
        session_start();

        $this->called = $_SESSION['called'];
    }

    public function getQueue()
    {
        return $this->queue;
    }

    public function incrementGameTurn()
    {
        $this->game_turn++;
    }

    public function getGameTurn()
    {
        return $this->game->game_turn;
    }
}
require 'instruction.php';
require 'player.php';