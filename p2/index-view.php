<?php /* session_start(); */ ?>
<!doctype html>
<html lang='en'>
<link rel="stylesheet" href="mystyle.css">

<head>
    <title><?php $game->getTitle(); ?>
    </title>
    <meta charset='utf-8'>
</head>

<body id="game-background">
    <h1><?php $game->getTitle(); ?></h1>
    <h3><?php $game->instruction->getInstructionLabel(); ?></h3>

    <div id="game-instructions">
        <?php $game->instruction->getObjectiveLabel(); ?><br>
        <?php $game->instruction->getObjective(); ?><br><br>
        <?php $game->instruction->getGettingStartedLabel(); ?><br>
        <?php $game->instruction->getGettingStarted(); ?><br>
        <?php $game->instruction->getGettingStarted1(); ?><br><br>
        <?php $game->instruction->getWinningPatternLabel(); ?><br>
        <?php $game->instruction->getWinningPattern(); ?><br><br>
    </div>
    <hr>
    <hr><br />
    <!--- Hide Bingo Call out if Bingo -->
    <?php
    if (count($game->queue) <= 1) {
        echo '<div id="bingo"><h1> Game Over - Better Luck Next Time. </h1></div>';
    } else if ($game->bingo != 'bingo') {
        echo '<div id="bingo-call"> The Bingo Call Out is ' . $game->current_call . '</div>';
    } else {
        echo '<div id="bingo"><h1> CONGRATULATIONS!  We have a WINNER!! B I N G O </h1></div>';
    }
    ?>

    <form action='process.php' method="POST">
        <table class='bingo-table'>
            <tr>
                <th>B</th>
                <th>I</th>
                <th>N</th>
                <th>G</th>
                <th>O</th>
            </tr>
            <?php
            # build the 5x5 bingo board
            for ($i = 0; $i < 5; $i++) {                    # $i denotes the row
                for ($j = 0; $j < 5; $j++) {                # $j deontes the column
                    $ref = ($i + 1) + ($j + 1);
                    $my_class = (in_array($game->players[1]->board->board[$i][$j], $game->players[1]->tracking)) ? '" class="cell-button bingo-marker"' : '" class="cell-button"';  # add bingo marker if this cell has a value that is tracked
                    $str_a = ($j == 0 or $j % 5 == 0) ? '<tr id="row' . $i . '">' : '';
                    $str_b = '<td id="row' . $i . '_col' . $j . '"><input type="submit" name="row' . $i . '_col' . $j . $my_class . ' value="' . $game->players[1]->board->board[$i][$j] . '"></input></td>';
                    $str_c  = ($j % 5 == 0 and $j > 0) ? '</tr>' : '';
                    echo $str_a . $str_b . $str_c;
                }
            }
            $_SESSION['board1'] = $game->players[1]->board->board;
            ?>

        </table>
        <h2>
            $$$ Press the Bingo button when you have a winning pattern!
        </h2>
        <button id="btn_bingo" name="bingo" type="Submit" value="bingo" class="btn_bingo"> BINGO !!</button>
        <button id=" btn_next_call" name="next_call" type="Submit" value="next-call" class="btn_bingo">
            Next Call
        </button>
        <button id=" btn_new_game" name="new-game" type="Submit" value="new-game" class="btn_bingo">
            New Game
        </button>
    </form>
</body>

</html>