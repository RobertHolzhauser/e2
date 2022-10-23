<!doctype html>
<html lang='en'>
<link rel="stylesheet" href="mystyle.css">

<head>
    <title><?php $game->getTitle(); ?> </title>
    <meta charset='utf-8'>
</head>

<body id="game-background">
    <?php echo $game->players[1]->GetString();
    ?>

    <h1><?php $game->getTitle(); ?>
    </h1>
    <h3><?php $game->instruction->getInstructionLabel(); ?></h3><br />

    <div id="game-instructions">
        <?php $game->instruction->getObjectiveLabel(); ?><br />
        <?php $game->instruction->getObjective(); ?><br /><br />
        <?php $game->instruction->getGettingStartedLabel(); ?><br />
        <?php $game->instruction->getGettingStarted(); ?><br /><br />
    </div>
    <hr><br />
    <form action='process.php' method="POST">
        <table class='bingo-table'>
            <tr>
                <th>B</th>
                <th>I</th>
                <th>N</th>
                <th>G</th>
                <th>O</th>
            </tr>
            <tr id="row0">
                <td id="row0_col0"><?php echo $game->players[1]->board->board[0][0] ?></td>
                <td id="row0_col1"><?php echo $game->players[1]->board->board[0][1] ?></td>
                <td id="row0_col2"><?php echo $game->players[1]->board->board[0][2] ?></td>
                <td id="row0_col3"><?php echo $game->players[1]->board->board[0][3] ?></td>
                <td id="row0_col4"><?php echo $game->players[1]->board->board[0][4] ?></td>
            </tr>
            <tr id="row1">
                <td id="row1_col0"><?php echo $game->players[1]->board->board[1][0] ?></td>
                <td id="row1_col1"><?php echo $game->players[1]->board->board[1][1] ?></td>
                <td id="row1_col2"><?php echo $game->players[1]->board->board[1][2] ?></td>
                <td id="row1_col3"><?php echo $game->players[1]->board->board[1][3] ?></td>
                <td id="row1_col4"><?php echo $game->players[1]->board->board[1][4] ?></td>
            </tr>
            <tr id="row2">
                <td id="row2_col0"><?php echo $game->players[1]->board->board[2][0] ?></td>
                <td id="row2_col1"><?php echo $game->players[1]->board->board[2][1] ?></td>
                <td id="row2_col2"><?php echo $game->players[1]->board->board[2][2] ?></td>
                <td id="row2_col3"><?php echo $game->players[1]->board->board[2][3] ?></td>
                <td id="row2_col4"><?php echo $game->players[1]->board->board[2][4] ?></td>


            </tr>
            <tr id="row3">
                <td id="row3_col0"><?php echo $game->players[1]->board->board[3][0] ?></td>
                <td id="row3_col1"><?php echo $game->players[1]->board->board[3][1] ?></td>
                <td id="row3_col2"><?php echo $game->players[1]->board->board[3][2] ?></td>
                <td id="row3_col3"><?php echo $game->players[1]->board->board[3][3] ?></td>
                <td id="row3_col4"><?php echo $game->players[1]->board->board[3][4] ?></td>


            </tr>
            <tr id="row4">
                <td id="row4_col0"><?php echo $game->players[1]->board->board[4][0] ?></td>
                <td id="row4_col1"><?php echo $game->players[1]->board->board[4][1] ?></td>
                <td id="row4_col2"><?php echo $game->players[1]->board->board[4][2] ?></td>
                <td id="row4_col3"><?php echo $game->players[1]->board->board[4][3] ?></td>
                <td id="row4_col4"><?php echo $game->players[1]->board->board[4][4] ?></td>

            </tr>

        </table>
    </form>

    <?php # displays full history of the game
    /*
    for ($z = 0; $z < count($game->history); $z++) {
        echo '<br><br>
                <h3><strong>Game Turn ' . $z . '</strong></h3><br>';
        echo '<table ="bingo-table">';
        echo '<th><td>B</td><td>I</td><td>N</td><td>G</td><td>O</td></th>';
        for ($i = 0; $i < 5; $i++) {
            echo '<tr id="row' . $i . '">';
            for ($j = 0; $j < 5; $j++) {
                echo '<td id="row' . $i . '_col' . $j . '"> ' . $history[$z][$i][$j] . '</td>'; # Triple Dimension array - Z dimension is game turn, $i=row, $j=column. 
            }
            echo '</tr>';
        }
        echo '</table>';
    } */ ?>
</body>

</html>