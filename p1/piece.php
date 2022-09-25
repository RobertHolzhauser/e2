<?php 

class Piece {
    public int $row_position;
    public int $col_position;
    public string $class;
    public string $in_play = "In Play"; 

    public function __construct(int $row, int $col, string $my_class) {
        $row_position = $row;
        $col_position = $col;
        $class = $my_class;
    } 

    public function set_position(int $row, int $col) {
        $row_position = $row;
        $col_position = $col;
    }

    public function get_position() {
        return 
    }

    public function set_out_of_pay() {
        $in_play = "Out of Play"; 
    }

    public function get_status() {
        return this->in_play;   
    }

}