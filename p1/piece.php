<?php

class Piece
{
    public int $row_position;
    public int $col_position;
    public string $in_play = "In Play";
    public string $piece_type;
    public string $move_direction;

    #note:  we know which player owns this piece because it occurs in that players pieces array

    public function set_position(int $row, int $col)
    {
        $row_position = $row;
        $col_position = $col;
    }

    public function __construct(int $row, int $col)
    {
        $this->set_position($row, $col);
    }

    public function get_position()
    {
        return "row = " + $this->row_position + " col = " + $this->col_position;
    }

    public function set_out_of_pay()
    {
        $in_play = "Out of Play";
    }

    public function get_status()
    {
        return $this->in_play;
    }
}