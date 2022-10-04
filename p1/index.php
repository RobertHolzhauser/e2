<?php
echo "Start of Game";
$history = [];  # for the history of the game play, represented by an array of what the board looked like after every turn
$board = array(
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

    echo "<br>Game Turn: " . $game_turn . " Player = " . $player_ref . "<br>";

    // iterate through board to get current arrays of each players pieces
    for ($r = 0; $r < 8; $r++) {            // rows
        for ($c = 0; $c < 8; $c++) {        // columns
            // $a_piece = strchr($board[$r][$c], $player_ref);  // find where player_ref is in piece name
            // if (gettype($a_piece) == "string") {             // not found creates data type of bool    
            //     $player_pieces[$r . $c] =  $a_piece;         // add piece to players pieces array
            // }
            $ref = substr($board[$r][$c], 0, 1);
            //echo "<br> ref = " . $ref;
            if ($ref == $curr_player) {
                //echo "<br>Player " . $ref . " added to player pieces";
                $player_pieces[$r . $c] = $board[$r][$c];
            }
        }
    }

    echo "<br>";
    var_dump($player_pieces);

    $moved = false;                               # set to true when move is successful and therefore ready to move to next turn 

    while ($moved == false) {                     # continue to implement move logic until a successful move is made 
        $my_key = array_rand($player_pieces, 1);  # randomly choose the key for a piece in player
        if (strlen($my_key) != 2) {               # sometimes the outer array only is chosen, without a col - if this happens continue and try again  
            continue;
        }
        echo "my_key = " . $my_key;
        $my_row = substr($my_key, 0, 1);          # get the row of the chosen piece 
        echo "<br>my row =" . $my_row;            # get the row  on the board
        $my_col = substr($my_key, 1, 1);          # get the column on the board
        echo "<br>my col = " . $my_col;
        //echo "<br>Chosen piece is " . $board[$my_row][$my_col] . " at position " . $my_key;
        $my_piece =   $player_pieces[$my_key];
        echo "<br>Chosen piece is " . $my_piece . " at position " . $my_key;
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
        echo "<br> -- type = " . $type;

        # Pawn Move Logic  --- prefer move over attack
        if ($type == "Pawn") {
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

            echo "<br>distance to move = " . $distance_to_move;
            $ok_to_move = "n";
            # check if path and destination are clear
            for ($j = 1; $j <= $distance_to_move; $j++) {
                if ($board[$my_row + $j][$my_col] == "___________") {   # can only move where unoccupied
                    $ok_to_move = "y";
                    echo "<br>Pawn ok to move";
                } else {
                    $ok_to_move = "n";

                    // try to attack
                    $spot = substr($board[$my_row + $j][$my_col - 1], 0, 1);
                    if (substr($spot, 0, 1) !=  $curr_player  and substr($spot, 0, 1) != "_") {
                        $board[$my_row + $j][$my_col - 1] = $my_piece;
                        $board[$my_row][$my_col] = "___________";
                        $moved = true;
                        break;
                    } else if (substr($board[$my_row + $j][$my_col + 1], 0, 1) !=  $curr_player and substr($board[$my_row + $j][$my_col + 1], 0, 1) != "_") {
                        $board[$my_row + $j][$my_col + 1] = $my_piece;
                        $board[$my_row][$my_col] = "___________";
                        $moved = true;
                        break;
                    }

                    break;  // try another piece
                }
            }

            # actually move if ok
            if ($ok_to_move == "y" and $moved == false) {
                echo "<br> actually moving pawn";
                $board[$my_row + $distance_to_move][$my_col] =  $my_piece;  // move
                // move check
                if ($board[$my_row + $distance_to_move][$my_col] ==  $my_piece) {
                    echo "successfully placed pawn in new position";
                }
                if ($board[$my_row][$my_col] == "___________") {
                    echo "successfully emptied old position";
                }
                $moved = true;       // next players turn
                break;
            }
        }  # end of Pawn move logic

        # Rook Move Logic  --- prefer move over attack
        if ($type == "Rook") {
            # decide to move vertically or horizontally
            $vh = rand(1, 2);   # 1 = vertical, 2 = horizontal

            $range = 0;  # how far is it possible to move on given path
            # vertical move attempt
            if ($vh == 1) {
                if ($direction = "up" and $my_row == 0 and ($my_col == 0 or $my_col == 7)) {  # assume that row 0 with col of 0 or 7 ece has not moved yet, and may be surrounded by friendly

                    for ($rk = 1; $rk < 8; $rk++) {
                        $spot = $board[$rk][$my_col];
                        if (substr($spot, 0, 1) != "_") {  # empty so ok to move through
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
                        echo "Rook moved up";
                    } else {
                        $moved = false;
                    }
                } else if ($direction = "down" and $my_row == 6 and ($my_col == 0 or $my_col == 7)) {
                    $range = 6;
                    for ($rk = 6; $rk >= 0; $rk--) {
                        $spot = $board[$rk][$my_col];
                        if (substr($spot, 0, 1) != "_") {  # empty so ok to move through
                            $range--;
                            continue;
                        } else if (substr($spot, 0, 1) != $curr_player) {  # opponent is here - this is the max range to move to
                            $range--;
                            break;
                        } else {
                            break;      # occupied by friend
                        }
                    }

                    # range > 0 means ok to move up to range value
                    if ($range < 6) {
                        $distance_to_move = rand(1, $range)  * -1;  # decide how far to actually move
                        $board[$my_row + $distance_to_move][$my_col] = $my_piece;
                        $board[$my_row][$my_col] =  "___________";
                        $moved = true;
                        echo "Rook moved down";
                    } else {
                        $moved = false;
                    }
                } else if ($direction = "up") {       # assume that row 1 or 6 are starting rows and thus that the piece has not moved yet
                    $distance_to_move = 1;
                } else {
                    $distance_to_move = -1;
                }
            }
        }
    }


    $history[$game_turn] = $board;
    $game_turn++;
    if ($game_turn > 15 /*500*/) {
        $game_status = "Game Over";
        echo $game_status;
    }
}




//require 'game.php';
require 'index-view.php';