<?php

//TODO make this an array
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

$bingo  = key_exists('bingo', $_POST) ? $_POST['bingo'] : "-1";

$_SESSION['game-play'] = [
    'curr_tracked' => $curr_tracked,
    'bingo'  => $bingo
];

#require 'index.php';  # compare to 
header('Location: index.php');