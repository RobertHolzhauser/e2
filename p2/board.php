<?php
class Board
{
    public $arr = array(1, 2, 3, 4, 5);
    public $board = [];

    public  function __construct()
    {
        $this->generateNumbers();
    }

    public function generateNumbers()
    {
        for ($i = 0; $i < 5; $i++) {       # pre-pop array with throw away values for ease of access
            $this->board[] = $this->arr;
        }

        $numbers = [];
        for ($i = 1; $i <= 100; $i++) {       # populate the numbers array with the numbers from 1 to 100
            $numbers[$i] = $i;
        }

        shuffle($numbers);           # andomizes the order of the elements in the numbers array.         
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                $this->board[$i][$j] = array_pop($numbers);   # take the first number out of $numbers and put it in $row array
            }
        }
        $this->board[2][2] = 'FREE';          # set the center cell as FREE
    }
}