<?php

class Game  #holds overall information for the current game
{
    public string $title = "BINGO";    # Title of the Game
    public Player $winner;             # Player object that wins first
    public Instruction $instruction;   # instructions for game play
    public int $difficulty = 10;       # determines how long player has between calls, and computer likelihood to miss.  Inverse - the higher the easier  
    public $players = [];              # array of players
    public $queue = [];                # the queue of numbers that are yet to be called 
    public $called  = [];              # the numbers that have been called so far in the game
    public int $current_call;          # current number in play

    public string $game_status = "playing";   # if status <> playing the gave is over
    public int $game_turn = 1;         # used to limit the number of turns and to track who's turn it is by odd or even

    public function __construct()
    {
        $this->instruction = new Instruction();     # populate text for instructions
        $this->players[] = new Player("Computer");  # create Computer  player
        $this->players[] = new Player("Guest");     # create Guest player
        
        for ($i = 1; $i < 100; $i++ ) {             # populate call queue
            $this->queue[] = $i;
        }
        shuffle($this->queue);                       # randomize the order in which the numbers in queue will be called
        
    }

    public function  getTitle()
    {
        echo $this->title;
    }
}
require 'instruction.php';
require 'player.php';