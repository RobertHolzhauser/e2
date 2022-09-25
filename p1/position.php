<?php

class Position {
    private int $row;
    private int $col;
    
    function __construct(int $row, int $col) {
        $this->row = $row;
        $this->col - $col;
    }
    
    function getPosition() {
        return "row= " +  $this->row + " col= " + $this->col;
    }

    function getRow() {
        return $this->row;
    }

    function getCol() {
        return $this->col;
    }

    function setRow(int $row) {
        $this->row = $row;
    }

    function setCol(int $col){
        $this->col = $col;
    } 
}