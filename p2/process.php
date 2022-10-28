<?php
echo 'START - process.php<br>';
if (!isset($_Sesssion)) {
    echo 'IN process.php session is not set<br>';
    try {
        session_start();
    } catch (Exception) {
        echo 'EXCEPTION in index.php 001';
    }
    echo 'started session in process.php<br>';
}

echo 'START - process.php<br>';

//require 'player.php';
//session_start();
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

$bingo  = key_exists('bingo', $_POST) ? $_POST['bingo'] : "not yet";
$_SESSION['bingo'] = $bingo;

$track = -1;
for ($i = 0; $i < 25; $i++) {
    if ($curr_tracked[$i] > 0) {
        $track = $curr_tracked[$i];
        break;
    }
}


header('Location: index.php');  // this re-routes to index - effectively hiding process.php  -- still blinks, etc.
// echo "game var dump";
// var_dump($_SESSION['game']);
// echo "<br>";
// add trac to session
// TODO  $_SESSION['bingo'] = $bingo;
// TODO $_SESSION['tracking1'] = $track;

// $_SESSION['game-play'] = [
//     'curr_tracked' => $curr_tracked,                  # above array
//     'bingo'  => $bingo                                # whether any player has called bingo
// ];

//require 'index.php';  # compare to    TODO remove this comment and next line or vice versa depending what works best
//header('Location: index.php');  // this re-routes to index - effectively hiding process.php  -- still blinks, etc.