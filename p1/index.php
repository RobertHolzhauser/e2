<?php

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

    $player_pieces[0] = ""; # Associative array of piece names and location on board
    $player_ref = $curr_player . "_";  #string to look for on board to identify current players pieces

    echo "<br>HELLO Game Turn: " . $game_turn . " Player = " . $player_ref . "<br>";

    // iterate through board to get current arrays of each players pieces
    for ($r = 0; $r < 8; $r++) {            // rows
        for ($c = 0; $c < 8; $c++) {        // columns
            // $a_piece = strchr($board[$r][$c], $player_ref);  // find where player_ref is in piece name
            // if (gettype($a_piece) == "string") {             // not found creates data type of bool    
            //     $player_pieces[$r . $c] =  $a_piece;         // add piece to players pieces array
            // }
            $ref = substr($board[$r][$c], 0, 2);
            if ($ref == $player_ref) {
                $player_pieces[$r . $c] = $board[$r][$c];
            }
        }
    }

    var_dump($player_pieces);


    $moved = false;

    while ($moved == false) {                     # continue to implement move logic until a successful move is made 
        $my_key = array_rand($player_pieces, 1);  # randomly choose the key for a piece in player
        $my_row = substr($my_key, 0, 1);          # get the row of the chosen piece 
        echo "<br>my row =" . $my_row;            # get the row  on the board
        $my_col = substr($my_key, 1, 1);          # get the column on the board
        echo "<br>my col = " . $my_col;
        //echo "<br>Chosen piece is " . $board[$my_row][$my_col] . " at position " . $my_key;
        $my_piece =   $player_pieces[$my_key];
        echo "<br>Chosen piece is " . $my_piece . " at position " . $my_key;
        $moved = true;
    }

    # Get move direction
    $direction = "up";
    if ($player_ref == "A_") {
        $direction = "down";
    }

    # Get Type of Piece
    $type = substr($my_piece, 2, strlen($my_piece) - 3);
    echo "<br> -- type = " . $type;

    # Move Logic

    # if ()


    $history[$game_turn] = $board;
    $game_turn++;
    if ($game_turn > 10 /*500*/) {
        $game_status = "Game Over";
        echo $game_status;
    }
}




//require 'game.php';
require 'index-view.php';