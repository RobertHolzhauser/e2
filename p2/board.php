<?php
class Board
{
    //public $row = [];
    public $board = [];

    public  function __construct()
    {
        $this->generateNumbers();
    }

    public function generateNumbers()
    {
        $numbers = [];
        for ($i = 0; $i < 99; $i++) {       # populate the nubmers array with the numbers from 1 to 100
            $numbers[$i] = $i + 1;
        }

        shuffle($numbers);         # andomizes the order of the elements in the numbers array.         
        $row = [];                  
        for ($i = 0; $i < 25; $i++) {
            $row[] = array_pop($numbers);   # take the first number off
            if ($i % 5) {
                $this->board[] = $row;
                $row = [];
            }
        }
    }
}