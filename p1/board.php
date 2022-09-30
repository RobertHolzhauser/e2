<?php

// The board class represents the game board
class Board
{
    // game board
    public $board = [];

    public function __construct()
    {
        //setUpBoard();
        $square0_0 = new Position_Square(0, 0);
        $square0_1 = new Position_Square(0, 1);
        $square0_2 = new Position_Square(0, 2);
        $square0_3 = new Position_Square(0, 3);
        $square0_4 = new Position_Square(0, 4);
        $square0_5 = new Position_Square(0, 5);
        $square0_6 = new Position_Square(0, 6);
        $square0_7 = new Position_Square(0, 7);

        $row0 = array($square0_0, $square0_1, $square0_2, $square0_3, $square0_4, $square0_5, $square0_6, $square0_7);

        $square1_0 = new Position_Square(1, 0);
        $square1_1 = new Position_Square(1, 1);
        $square1_2 = new Position_Square(1, 2);
        $square1_3 = new Position_Square(1, 3);
        $square1_4 = new Position_Square(1, 4);
        $square1_5 = new Position_Square(1, 5);
        $square1_6 = new Position_Square(1, 6);
        $square1_7 = new Position_Square(1, 7);

        $row1 = array($square1_0, $square1_1, $square1_2, $square1_3, $square1_4, $square1_5, $square1_6, $square1_7);

        $square2_0 = new Position_Square(2, 0);
        $square2_1 = new Position_Square(2, 1);
        $square2_2 = new Position_Square(2, 2);
        $square2_3 = new Position_Square(2, 3);
        $square2_4 = new Position_Square(2, 4);
        $square2_5 = new Position_Square(2, 5);
        $square2_6 = new Position_Square(2, 6);
        $square2_7 = new Position_Square(2, 7);

        $row2 = array($square2_0, $square2_1, $square2_2, $square2_3, $square2_4, $square2_5, $square2_6, $square2_7);

        $square3_0 = new Position_Square(3, 0);
        $square3_1 = new Position_Square(3, 1);
        $square3_2 = new Position_Square(3, 2);
        $square3_3 = new Position_Square(3, 3);
        $square3_4 = new Position_Square(3, 4);
        $square3_5 = new Position_Square(3, 5);
        $square3_6 = new Position_Square(3, 6);
        $square3_7 = new Position_Square(3, 7);

        $row3 = array($square3_0, $square3_1, $square3_2, $square3_3, $square3_4, $square3_5, $square3_6, $square3_7);

        $square4_0 = new Position_Square(4, 0);
        $square4_1 = new Position_Square(4, 1);
        $square4_2 = new Position_Square(4, 2);
        $square4_3 = new Position_Square(4, 3);
        $square4_4 = new Position_Square(4, 4);
        $square4_5 = new Position_Square(4, 5);
        $square4_6 = new Position_Square(4, 6);
        $square4_7 = new Position_Square(4, 7);

        $row4 = array($square4_0, $square4_1, $square4_2, $square4_3, $square4_4, $square4_5, $square4_6, $square4_7);

        $square5_0 = new Position_Square(5, 0);
        $square5_1 = new Position_Square(5, 1);
        $square5_2 = new Position_Square(5, 2);
        $square5_3 = new Position_Square(5, 3);
        $square5_4 = new Position_Square(5, 4);
        $square5_5 = new Position_Square(5, 5);
        $square5_6 = new Position_Square(5, 6);
        $square5_7 = new Position_Square(5, 7);

        $row5 = array($square5_0, $square5_1, $square5_2, $square5_3, $square5_4, $square5_5, $square5_6, $square5_7);

        $square6_0 = new Position_Square(6, 0);
        $square6_1 = new Position_Square(6, 1);
        $square6_2 = new Position_Square(6, 2);
        $square6_3 = new Position_Square(6, 3);
        $square6_4 = new Position_Square(6, 4);
        $square6_5 = new Position_Square(6, 5);
        $square6_6 = new Position_Square(6, 6);
        $square6_7 = new Position_Square(6, 7);

        $row6 = array($square6_0, $square6_1, $square6_2, $square6_3, $square6_4, $square6_5, $square6_6, $square6_7);

        $square7_0 = new Position_Square(7, 0);
        $square7_1 = new Position_Square(7, 1);
        $square7_2 = new Position_Square(7, 2);
        $square7_3 = new Position_Square(7, 3);
        $square7_4 = new Position_Square(7, 4);
        $square7_5 = new Position_Square(7, 5);
        $square7_6 = new Position_Square(7, 6);
        $square7_7 = new Position_Square(7, 7);

        $row7 = array($square7_0, $square7_1, $square7_2, $square7_3, $square7_4, $square7_5, $square7_6, $square7_7);

        $board[0] = $row0;
        $board[1] = $row1;
        $board[2] = $row2;
        $board[3] = $row3;
        $board[4] = $row4;
        $board[5] = $row5;
        $board[6] = $row6;
        $board[7] = $row7;

        var_dump($board);
    }

    // public function setUpBoard() {      
    //     for(int $i = 0; $i < 8; $i++) {
    //         $row = [];  
    //         for (int $j = 0; $j < 8; $j++) {
    //             $square = new Position_Square($i, $j); 
    //             $row[$j] = $square;
    //         }
    //         $board[$i] = $row;
    //     }
    // } 
}