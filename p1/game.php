<?php

class Game
{
    public Board $gameBoard;
    public $history = [];
    public Player $playerA;
    public Player $playerB;

    public function __construct()
    {
        $gameBoard = new Board();
        $history[] = $gameBoard;
        $playerA = new Player("A", "White");  // TODO add name input, and player choice of color
        $playerA = new Player("B", "Black");  // TODO add name input, and player choice of color
    }
}

require 'piece.php';
require 'position_square.php';
require 'piece.php';
require 'player.php';
require 'position.php';
require 'pawn.php';
require 'board.php';