<!doctype html>
<html lang='en'>
<link rel="stylesheet" href="mystyle.css">

<head>
    <title><?php echo $game->$title; ?> </title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="site.css">
</head>

<body>
    <h1><?php echo $game->$title; ?></h1>
    <h3>Instructions</h3>
    <p>In a modern day real conflict, would royalty actually engage in combat?</p>
    <p>In this version, we can discover what might happen if the only combatants were pawns and rooks.</p>
    <p>All pieces are given an equal opportunity to move, however, only pawns and rooks will take advantage of the
        opportunity. However, a space to move to or attack must be available.</p>
    <p>Rules of movement and engagement are loosely interpretted to show in the game the chaos of battle.</p>
    <p>A game consists of 100 game turns which alternate between player A & B. </p>
    <p>The final state of the game board is displayed near the top.</p>
    <p>Beneath this the game history, turn by turn, is displayed</p>

    < <table id='chessboard-table'>
        <tr id="row0">
            <td id="row0_col0">
                <?php echo $board[0][0] ?>
            </td>
            <td id="row0_col1"><?php echo $board[0][1] ?>
            </td>
            <td id="row0_col2"><?php echo $board[0][2] ?>
            </td>
            <td id="row0_col3"><?php echo $board[0][3] ?>
            </td>
            <td id="row0_col4"><?php echo $board[0][4] ?>
            </td>
            <td id="row0_col5"><?php echo $board[0][5] ?>
            </td>
            <td id="row0_col6"><?php echo $board[0][6] ?>
            </td>
            <td id="row0_col7"><?php echo $board[0][7] ?>
            </td>

        </tr>
        <tr id="row1">
            <td id="row1_col0"><?php echo $board[1][0] ?>
            </td>
            <td id="row1_col1"><?php echo $board[1][1] ?>
            </td>
            <td id="row1_col2"><?php echo $board[1][2] ?>
            </td>
            <td id="row1_col3"><?php echo $board[1][3] ?>
            </td>
            <td id="row1col4"><?php echo $board[1][4] ?>
            </td>
            <td id="row1_col5"><?php echo $board[1][5] ?>
            </td>
            <td id="row1_col6"><?php echo $board[1][6] ?>
            </td>
            <td id="row1_col7"><?php echo $board[1][7] ?>
            </td>

        </tr>
        <tr id="row2">
            <td id="row2_col0"><?php echo $board[2][0] ?>
            </td>
            <td id="row2_col1"><?php echo $board[2][1] ?>
            </td>
            <td id="row2_col2"><?php echo $board[2][2] ?>
            </td>
            <td id="row2_col3"><?php echo $board[2][3] ?>
            </td>
            <td id="row2_col4"><?php echo $board[2][4] ?>
            </td>
            <td id="row2_col5"><?php echo $board[2][5] ?>
            </td>
            <td id="row2col6"><?php echo $board[2][6] ?>
            </td>
            <td id="row2_col7"><?php echo $board[2][7] ?>
            </td>

        </tr>
        <tr id="row3">
            <td id="row3_col0"><?php echo $board[3][0] ?>
            </td>
            <td id="row3_col1"><?php echo $board[3][1] ?>
            </td>
            <td id="row3col2"><?php echo $board[3][2] ?>
            </td>
            <td id="row3_col3"><?php echo $board[3][3] ?>
            </td>
            <td id="row3_col4"><?php echo $board[3][4] ?>
            </td>
            <td id="row3_col5"><?php echo $board[3][5] ?>
            </td>
            <td id="row3_col6"><?php echo $board[3][6] ?>
            </td>
            <td id="row3_col7"><?php echo $board[3][7] ?>
            </td>

        </tr>
        <tr id="row4">
            <td id="row4_col0"><?php echo $board[4][0] ?>
            </td>
            <td id="row4_col1"><?php echo $board[4][1] ?>
            </td>
            <td id="row4_col2"><?php echo $board[4][2] ?>
            </td>
            <td id="row4_col3"><?php echo $board[4][3] ?>
            </td>
            <td id="row4_col4"><?php echo $board[4][4] ?>
            </td>
            <td id="row4_col5"><?php echo $board[4][5] ?>
            </td>
            <td id="row4_col6"><?php echo $board[4][6] ?>
            </td>
            <td id="row4_col7"><?php echo $board[4][7] ?>
            </td>

        </tr>
        <tr id="row5">
            <td id="row5_col0"><?php echo $board[5][0] ?>
            </td>
            <td id="row5_col1"><?php echo $board[5][1] ?>
            </td>
            <td id="row5_col2"><?php echo $board[5][2] ?>
            </td>
            <td id="row5_col3"><?php echo $board[5][3] ?>
            </td>
            <td id="row5_col4"><?php echo $board[5][4] ?>
            </td>
            <td id="row5_col5"><?php echo $board[5][5] ?>
            </td>
            <td id="row5_col6"><?php echo $board[5][6] ?>
            </td>
            <td id="row5_col7"><?php echo $board[5][7] ?>
            </td>

        </tr>
        <tr id="row6">
            <td id="row6_col0"><?php echo $board[6][0] ?>
            </td>
            <td id="row6_col1"><?php echo $board[6][1] ?>
            </td>
            <td id="row6_col2"><?php echo $board[6][2] ?>
            </td>
            <td id="row6_col3"><?php echo $board[6][3] ?>
            </td>
            <td id="row6_col4"><?php echo $board[6][4] ?>
            </td>
            <td id="row6_col5"><?php echo $board[6][5] ?>
            </td>
            <td id="row6_col6"><?php echo $board[6][6] ?>
            </td>
            <td id="row6_col7"><?php echo $board[6][7] ?>
            </td>

        </tr>
        <tr id="row7">
            <td id="row7_col0"><?php echo $board[7][0] ?>
            </td>
            <td id="row7_col1"><?php echo $board[7][1] ?>
            </td>
            <td id="row7_col2"><?php echo $board[7][2] ?>
            </td>
            <td id="row7_col3"><?php echo $board[7][3] ?>
            </td>
            <td id="row7_col4"><?php echo $board[7][4] ?>
            </td>
            <td id="row7_col5"><?php echo $board[7][5] ?>
            </td>
            <td id="row7_col6"><?php echo $board[7][6] ?>
            </td>
            <td id="row7_col7"><?php echo $board[7][7] ?>
            </td>

        </tr>
        </table>

        <?php # displays full history of the game
        for ($z = 0; $z < count($history); $z++) {
            echo '<br><br><h3><strong>Game Turn ' . $z . '</strong></h3><br>';
            echo '<table id="chessboard-table">';
            for ($i = 0; $i < 8; $i++) {
                echo '<tr id="row' . $i . '">';
                for ($j = 0; $j < 8; $j++) {
                    echo '<td id="row' . $i . '_col' . $j . '"> ' . $history[$z][$i][$j] . '</td>';  # Triple Dimension array - Z dimension is game turn, $i = row, $j = column.
                }
                echo '</tr>';
            }
            echo '</table>';
        }
        ?>
</body>

</html>