<?php
class Player
{
    public ?string $name;
    public Board $board;
    public $tracking = [];      # array that tracks which pieces the player has tracked as having been called - from POST

    function __construct(string $nm)
    {
        $this->name = $nm;
        $this->board = new Board();
    }
}

require 'board.php';