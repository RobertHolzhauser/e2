<?php
class Player
{
    public ?string $name;
    public Board $board;
    public $tracking = [];

    function __construct(string $nm)
    {
        $this->name = $nm;
        $this->board = new Board();
    }

    # for testing and debugging  TODO remove this
    public function GetString()
    {
        echo "Player Name = " . $this->name . "<br/>";
        //  foreach ($this->board as $cell) {
        //echo $cell . "<br/>";
        echo count($this->board->board, 1);
        // }
    }

    public function AddTracking()
    {
    }
}

require 'board.php';