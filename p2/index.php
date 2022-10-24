<?php
require 'game.php';
require 'games.php';

$game = new Game();

require 'index-view.php';

echo $row0_col0;
echo $row0_col1;
echo $row0_col2;
echo $row0_col3;
echo $row0_col4;

# row 2
echo $row1_col0;
echo $row1_col1;
echo $row1_col2;
echo $row1_col3;
echo $row1_col4;

echo $row2_col0;
echo $row2_col1;
echo $row2_col2;
echo $row2_col3;
echo $row2_col4;

echo $row3_col0;
echo $row3_col1;
echo $row3_col2;
echo $row3_col3;
echo $row3_col4;

echo $row4_col0;
echo $row4_col1;
echo $row4_col2;
echo $row4_col3;
echo $row4_col4;

echo $bingo;

/*
$history = [];  # for the history of the game play, represented by an array of what the board looked like after every turn
$board = array(   # the current game board
    array("A_Rook1", "A_Knight1", "A_Bishop1", "A_King", "A_Queen", "A_Bishop2", "A_Knight2", "A_Rook2"),
    array("A_Pawn1", "A_Pawn2", "A_Pawn3", "A_Pawn4", "A_Pawn5", "A_Pawn6", "A_Pawn7", "A_Pawn8"),
    array("___________", "___________", "___________", "___________", "___________", "___________", "___________", "___________"),
    array("___________", "___________", "___________", "___________", "___________", "___________", "___________", "___________"),
    array("___________", "___________", "___________", "___________", "___________", "___________", "___________", "___________"),
    array("___________", "___________", "___________", "___________", "___________", "___________", "___________", "___________"),
    array("B_Pawn1", "B_Pawn2", "B_Pawn3", "B_Pawn4", "B_Pawn5", "B_Pawn6", "B_Pawn7", "B_Pawn8"),
    array("B_Rook1", "B_Knight1", "B_Bishop1", "B_Queen", "B_King", "B_Bishop2", "B_Knight2", "B_Rook2")
);

$history[0] = $board;  # Capture initial board

$game_status = "playing";   # if status <> playing the gave is over
$game_turn = 1;             # used to limit the number of turns and to track who's turn it is by odd or even

while ($game_status == "playing") {
    $curr_player = "A";

    #Determine who's turn it is, based on whether it's an odd or even round.  Odd = A, Even = B.  Determine odd or even with modulus operator.
    if ($game_turn % 2 == 0) {
        $curr_player = "B";
    } else {
        $curr_player = "A";
    }

    $player_pieces = []; # Associative array of piece names and location on board
    $player_ref = $curr_player . "_";  #string to look for on board to identify current players pieces

    // iterate through board to get current arrays of each players pieces
    for ($r = 0; $r < 8; $r++) {            // rows
        for ($c = 0; $c < 8; $c++) {        // columns
            $ref = substr($board[$r][$c], 0, 1);
            if ($ref == $curr_player) {
                $player_pieces[$r . $c] = $board[$r][$c];
            }
        }
    }

    $moved = false;                               # set to true when move is successful and therefore ready to move to next turn 

    while ($moved == false) {                     # continue to implement move logic until a successful move is made 
        $my_key = array_rand($player_pieces, 1);  # randomly choose the key for a piece in player
        if (strlen($my_key) != 2) {               # sometimes the outer array only is chosen, without a col - if this happens continue and try again  
            continue;
        }
        $my_row = substr($my_key, 0, 1);          # get the row of the chosen piece 
        $my_col = substr($my_key, 1, 1);          # get the column on the board
        $my_piece =   $player_pieces[$my_key];
        $moved = true;

        # Get move direction
        $direction = "up";
        if ($player_ref == "A_") {
            $direction = "down";
        }

        # Get Type of Piece
        if (strlen($my_piece) > 7) {
            $type = substr($my_piece, 2, strlen($my_piece) - 3);
        } else if (substr($my_piece, 2, 5) == "Queen") {
            $type = "Queen";
        } else if (substr($my_piece, 2, 4) == "Pawn") {
            $type = "Pawn";
        } else if (substr($my_piece, 2, 4) == "Rook") {
            $type = "Rook";
        } else {
            $type = substr($my_piece, 2, strlen($my_piece) - 2);
        }

        # Pawn Move Logic  --- prefer move over attack
        if ($type == "Pawn") {
            $moved = false;
            # get direction and how far to move -random 1 or 2 
            if ($direction = "up" and $my_row == 1) {       # assume that row 1 or 6 are starting rows and thus that the piece has not moved yet
                $distance_to_move = rand(1, 2);
            } else if ($direction = "down" and $my_row == 6) {
                $distance_to_move = rand(-1, -2);
            } else if ($direction = "up") {       # assume that row 1 or 6 are starting rows and thus that the piece has not moved yet
                $distance_to_move = 1;
            } else {
                $distance_to_move = -1;
            }

            $ok_to_move = "n";
            # check if path and destination are clear
            if ($direction == "up") {
                if ($board[$my_row + $distance_to_move][$my_col] == "___________") {   # can only move where unoccupied
                    $ok_to_move = "y";
                    $board[$my_row + $distance_to_move][$my_col] = $my_piece;
                    $board[$my_row][$my_col] = "___________";
                } else {
                    $ok_to_move = "n";

                    // try to attack
                    $spot = substr($board[$my_row + $distance_to_move][$my_col - 1], 0, 1);
                    if (substr($spot, 0, 1) !=  $curr_player  and substr($spot, 0, 1) != "_") {
                        $board[$my_row + $distance_to_move][$my_col - 1] = $my_piece;
                        $board[$my_row][$my_col] = "___________";
                        $moved = true;
                        break;
                    } else if (substr($board[$my_row + $distance_to_move][$my_col + 1], 0, 1) !=  $curr_player and substr($board[$my_row + $distance_to_move][$my_col + 1], 0, 1) != "_") {
                        $board[$my_row + $distance_to_move][$my_col + 1] = $my_piece;
                        $board[$my_row][$my_col] = "___________";
                        $moved = true;
                        break;
                    }
                    break;  // try another piece
                }
            } else { # move down - by multiplying move distance x -1
                if ($board[$my_row + $distance_to_move][$my_col] == "___________") {   # can only move where unoccupied
                    $ok_to_move = "y";
                    $board[$my_row + $distance_to_move][$my_col] =  $my_piece;  // move
                    $board[$my_row][$my_col] = "___________";
                } else {
                    $ok_to_move = "n";

                    // try to attack
                    $spot = substr($board[$my_row + $distance_to_move][$my_col - 1], 0, 1);
                    if (substr($spot, 0, 1) !=  $curr_player  and substr($spot, 0, 1) != "_") {
                        $board[$my_row + $distance_to_move][$my_col - 1] = $my_piece;
                        $board[$my_row][$my_col] = "___________";
                        $moved = true;
                        break;
                    } else if (substr($board[$my_row + $distance_to_move][$my_col + 1], 0, 1) !=  $curr_player and substr($board[$my_row + $distance_to_move][$my_col + 1], 0, 1) != "_") {
                        $board[$my_row + $distance_to_move][$my_col + 1] = $my_piece;
                        $board[$my_row][$my_col] = "___________";
                        $moved = true;
                        break;
                    }

                    break;  // try another piece
                }
            }

            $moved = true;       // next players turn
            break;
        }  # end of Pawn move logic

        # Rook Move Logic  --- prefer move over attack
        if ($type == "Rook") {
            # decide to move vertically or horizontally
            $vh = rand(1, 2);   # 1 = vertical, 2 = horizontal

            $range = 0;  # how far is it possible to move on given path
            # vertical move attempt
            if ($vh == 1) {
                if ($direction = "up" and $my_row == 0 and ($my_col == 0 or $my_col == 7)) {  # assume that row 0 with col of 0 or 7 ece has not moved yet, and may be surrounded by friendly
                    $range = 1;
                    for ($rk = 1; $rk < 8; $rk++) {
                        $spot = $board[$rk][$my_col];
                        if (substr($spot, 0, 1) == "_") {  # empty so ok to move through
                            $range++;
                            continue;
                        } else if (substr($spot, 0, 1) != $curr_player) {  # opponent is here - this is the max range to move to
                            $range++;
                            break;
                        } else {
                            break;      # occupied by friend
                        }
                    }

                    # range > 0 means ok to move up to range value
                    if ($range > 0) {
                        $distance_to_move = rand(1, $range);  # decide how far to actually move
                        $board[$my_row + $distance_to_move][$my_col] = $my_piece;
                        $board[$my_row][$my_col] =  "___________";
                        $moved = true;
                    } else {
                        $moved = false;
                    }
                } else if ($direction = "down" and $my_row == 7 and ($my_col == 0 or $my_col == 7)) {
                    $range = 1;
                    for ($rk = 7; $rk >= 0; $rk--) {
                        $spot = $board[$rk][$my_col];
                        if (substr($spot, 0, 1) == "_") {  # empty so ok to move through
                            $range++;
                            continue;
                        } else if (substr($spot, 0, 1) != $curr_player) {  # opponent is here - this is the max range to move to
                            $range++;
                            break;
                        } else {
                            break;      # occupied by friend
                        }
                    }

                    # range > 0 means ok to move up to range value
                    if ($range > 0) {
                        $distance_to_move = rand(1, $range)  * -1;  # decide how far to actually move
                        $board[$my_row + $distance_to_move][$my_col] = $my_piece;
                        $board[$my_row][$my_col] =  "___________";
                        $moved = true;
                    } else {
                        $moved = false;
                    }
                }
            }
        }
    }


    $history[$game_turn] = $board;
    $game_turn++;
    if ($game_turn > 100) {
        $game_status = "Game Over";
    }
}
*/