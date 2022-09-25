<?php
/***
 * a position on the board - TODO probably don't use
 */
class Position_Square {
    public Position $position;
    public string $player;
    public Piece $curr_piece;

    public function __construct(int $row, int $col) {
        $this->position.setRow($row);
        $this->position.setCol($col);
    }    
    
    public function set_piece (string $player, Piece $piece) {
        $this->curr_piece = $piece;
    }

    public function get_occupant () {
        return "Player " + $player + "'s " + $curr_piece;   
    }
}