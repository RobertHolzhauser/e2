<?php
if (!isset($_Sesssion)) {
    try {
        session_start();
    } catch (Exception) {
        echo 'EXCEPTION in index.php 001';
    }
}

# Overall in process.php data is extracted from the index-view form contained in POST, that is then put into the session, and redirected to index.php

# first row
$curr_tracked = [];
$curr_tracked[] = key_exists('row0_col0', $_POST) ? $_POST['row0_col0'] : -1;
$curr_tracked[] = key_exists('row0_col1', $_POST) ? $_POST['row0_col1'] : -1;
$curr_tracked[] = key_exists('row0_col2', $_POST) ? $_POST['row0_col2'] : -1;
$curr_tracked[] = key_exists('row0_col3', $_POST) ? $_POST['row0_col3'] : -1;
$curr_tracked[] = key_exists('row0_col4', $_POST) ? $_POST['row0_col4'] : -1;

#second row
$curr_tracked[] = key_exists('row1_col0', $_POST) ? $_POST['row1_col0'] : -1;
$curr_tracked[] = key_exists('row1_col1', $_POST) ? $_POST['row1_col1'] : -1;
$curr_tracked[] = key_exists('row1_col2', $_POST) ? $_POST['row1_col2'] : -1;
$curr_tracked[] = key_exists('row1_col3', $_POST) ? $_POST['row1_col3'] : -1;
$curr_tracked[] = key_exists('row1_col4', $_POST) ? $_POST['row1_col4'] : -1;

#third row
$curr_tracked[] = key_exists('row2_col0', $_POST) ? $_POST['row2_col0'] : -1;
$curr_tracked[] = key_exists('row2_col1', $_POST) ? $_POST['row2_col1'] : -1;
$curr_tracked[] = key_exists('row2_col2', $_POST) ? $_POST['row2_col2'] : -1;
$curr_tracked[] = key_exists('row2_col3', $_POST) ? $_POST['row2_col3'] : -1;
$curr_tracked[] = key_exists('row2_col4', $_POST) ? $_POST['row2_col4'] : -1;

#fourth row
$curr_tracked[] = key_exists('row3_col0', $_POST) ? $_POST['row3_col0'] : -1;
$curr_tracked[] = key_exists('row3_col1', $_POST) ? $_POST['row3_col1'] : -1;
$curr_tracked[] = key_exists('row3_col2', $_POST) ? $_POST['row3_col2'] : -1;
$curr_tracked[] = key_exists('row3_col3', $_POST) ? $_POST['row3_col3'] : -1;
$curr_tracked[] = key_exists('row3_col4', $_POST) ? $_POST['row3_col4'] : -1;

#fifth row
$curr_tracked[] = key_exists('row4_col0', $_POST) ? $_POST['row4_col0'] : -1;
$curr_tracked[] = key_exists('row4_col1', $_POST) ? $_POST['row4_col1'] : -1;
$curr_tracked[] = key_exists('row4_col2', $_POST) ? $_POST['row4_col2'] : -1;
$curr_tracked[] = key_exists('row4_col3', $_POST) ? $_POST['row4_col3'] : -1;
$curr_tracked[] = key_exists('row4_col4', $_POST) ? $_POST['row4_col4'] : -1;
$new_game = key_exists('new-game', $_POST) ? $_POST['new-game'] : '';
$bingo  = key_exists('bingo', $_POST) ? $_POST['bingo'] : "not yet";
$_SESSION['bingo'] = $bingo;

$track = -1;

# reset for new game
if ($new_game == "new-game") {
    $_SESSION['bingo'] = null;
    $_SESSION['game'] = null;
    $_SESSION['track'] = null;
    $_SESSION['board1'] = null;
} else {
    for ($i = 0; $i < 25; $i++) {
        if ($curr_tracked[$i] > 0) {
            $track = $curr_tracked[$i];
            $_SESSION['track'] = $track;
            break;
        }
    }
}

header('Location: index.php');