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
    <h3><?php $game->instruction->getInstructionLabel(); ?></h3><br />

    <div id="game-instructions">
        <?php $game->instruction->getObjectiveLabel(); ?><br>
        <?php $game->instruction->getObjective(); ?><br><br>
        <?php $game->instruction->getGettingStartedLabel(); ?><br>
        <?php $game->instruction->getGettingStarted(); ?><br><br>
        <?php $game->instruction->getWinningPatternLabel(); ?><br>
        <?php $game->instruction->getWinningPattern(); ?><br><br>
    </div>
    <hr><br />
    <?php echo $game->bingo ?>
    <div id="bingo-call" <?php ($game->bingo == 'bingo') ? " class='hidden'" : "" ?>>The Bingo Call Out is
        <?php echo $_SESSION["current_call"]; ?>
    </div>
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
                                        $str_a = ($j == 0 or $j % 5 == 0) ? '<tr id="row' . $i . '">' : '';
                                        $str_b = '<td id="row' . $i . '_col' . $j . '"><input type="submit" name="row' . $i . '_col' . $j . '" class="cell-button" value="' . $game->players[1]->board->board[$i][$j] . '"></input></td>';
                                        $str_c  = ($j % 5 == 0 and $j > 0) ? '</tr>' : '';
                                        echo $str_a . $str_b . $str_c;
                                }
                        }
                        $_SESSION['board1'] = $game->players[1]->board->board;
                        ?>

        </table>
        <h4>
            $$$ Press the Bingo button when you have a winning pattern!
        </h4>
        <button id="btn_bingo" name="bingo" type="Submit" value="bingo" class="btn_bingo"> BINGO !!</button>
        <button id=" btn_next_call" name="next_call" type="Submit" value="next-call" class="btn_bingo">
            Next Call
        </button>
    </form>
</body>

</html>