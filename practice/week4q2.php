<?php

// Set up cards, - use 10 so you have an even number of cards to distribute
$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);

$playerCards = [];
$computerCards = [];

foreach ($cards as $card) {
    if (count($playerCards) <= count($computerCards)) {
        $playerCards[] = $card;
    }
    else {
        $computerCards[] = $card;
    }
}

#verify results
var_dump($playerCards);
var_dump($computerCards);