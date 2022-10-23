<?php
class Player
{
    public ?string $name;
    public Board $board;

    function __construct(string $nm)
    {
        $this->name = $nm;
        $this->board = new Board();
    }
}

require 'board.php';