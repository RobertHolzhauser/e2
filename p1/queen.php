<?php

class Queen extends Piece
{
    public Player $player;

    public function __construct(string $type, int $row, int $col, Player $player)
    {
        $this->piece_type = $type;
        $this->row_position = $row;
        $this->col_position = $col;
        $this->player = $player;
        if ($player->color == "white") {
            $this->move_direction = "North";
        } else // infers black 
        {
            $this->move_direction = "South";
        }
    }

    public function move()
    {
        if ($this->player->move_direction == "North") {
            if ($this->col_position == 1) # hasn't moved yet
            {
                // decide whether to move one or two spaces
                $nmbr_to_move = rand(1, 2);
            }
        } else {
            if ($this->col_position == 6) # hasn't moved yet
            {
                // decide whether to move one or two spaces
                $nmbr_to_move = rand(-1, -2);
            }
        }
    }
}