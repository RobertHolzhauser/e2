<?php

// The board class represents the game board
class Board
{
    // game board
    public $board = [];

    public function __construct()
    {
        //setUpBoard();
        $square1 = new Position_Square(0, 0);
        $square2 = new Position_Square(0, 1);
        $square3 = new Position_Square(0, 2);
        $square4 = new Position_Square(0, 3);
        $square5 = new Position_Square(0, 4);
        $square6 = new Position_Square(0, 5);
        $square7 = new Position_Square(0, 6);
        $square8 = new Position_Square(0, 7);

        $row1 = array($square1, $square2, $square3, $square4, $square5, $square6, $square7, $square8);

        $board[1] = $row1;
        var_dump($board);
    }

    // public function setUpBoard() {      
    //     for(int $i = 0; $i < 8; $i++) {
    //         $row = [];  
    //         for (int $j = 0; $j < 8; $j++) {
    //             $square = new Position_Square($i, $j); 
    //             $row[$j] = $squire;
    //         }
    //         $board[$i] = $row;
    //     }
    // } 
}