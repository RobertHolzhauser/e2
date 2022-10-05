# Project 1
+ By: Robert Holzhauser 
+ URL: <http://e2p1.robertholzhauser.me>

## Game planning
+ Simple Chess.  To keep it simpler, don't use check mate type rules, or try to build sophisticated ways for computer to win.
It will play until the last man standing.  First player to run out of pieces loses.

+ Game class will be the master controller class.

+ Board - will have two representations.  
  Board logic - will be an 8x8 array of arrays.  Exists in game class.
  Board display in the view will iterate through the nested board array to display what pieces are where.
     This will be firstly a table in HTML, with some CSS styling to make it look reasonably like a game board.

  The board array consists of position_square objects.    A position_square is an object representing a position on the game board.

+ Player class will track the player name, and array of pieces, and color.  Color defines "home" side of the board.
+  For color "white", home side of board is rows 0 & 1.  For color "black" home side of board is rows 6 & 7.
+  Color also defines the color of pieces on the board.   
+ When an individual piece "loses" it will be removed from that players pieces array.

+ Game class will also contain history array, which will be an array of gameboard after every turn.


+ Check_Win method in Game class will check the size of each players arrays after each turn.

+ Pieces will simply display text that shows the player name, and piece name.
+ If there are multiple of a piece that exist at game start format will be P1/2 _ piece name _ piece number
    Player 1 King = P1_King
    Player 2 Pawn = P1_Pawn_1

Base class of pieces is Piece. it will have properties of:  Player, 



## Outside resources
[PHP Manual Object Oriented Reference](https://www.php.net/manual/en/language.oop5.basic.php)

[PHP Manual entry on object constructors](https://www.php.net/manual/en/language.oop5.decon.php)

[PHP Manual entry on arrays](https://www.php.net/manual/en/language.types.array.php)

[PHP Manual entry on typed properties](https://www.php.net/manual/en/language.oop5.properties.php)

[PHP Manual entry on class and method visibility](https://www.php.net/manual/en/language.oop5.visibility.php)

[PHP Manual entry on random number generation](https://www.php.net/manual/en/function.rand)

[W3Schools example of multiple dimensional arrays](https://www.w3schools.com/php/phptryit.asp?filename=tryphp_array_multi2)

[W3Schools reference on PHP Arithmetic Operators](https://www.w3schools.com/php/php_operators.asp)

[Design Wizard Eye Catching Color Combinations for 2021](https://designwizard.com/blog/design-trends/colour-combination/)

[PHP Manual entry on control structures](https://www.php.net/manual/en/language.control-structures.php)

[PHP Manual entry on array functions](https://www.php.net/manual/en/ref.array.php)

[PHP Manual entry on string functions](https://www.php.net/manual/en/ref.strings.php)

## Notes for instructor
*Originally I started to go down an Object Oriented path, but ran into a few difficulties, so I changed to a purely procedural paradigm.*
