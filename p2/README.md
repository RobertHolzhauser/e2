# Project 2
+ By: Robert Holzhauser
+ URL: [http://e2p2.robertholzhauser.me](http://e2p2.robertholzhauser.me)

## Outside resource
+ Instructions included with Traditions Bingo from Cardinal Industries, LLC. (no link available)  
+ [Stackoverflow entry on how to add a JS class to an element](https://stackoverflow.com/questions/507138/how-to-add-a-class-to-a-given-element)
+ [Markdown Cheat Sheet](https://www.markdownguide.org/cheat-sheet/)
+ [W3 Schools entry on Javascript Timing](https://www.w3schools.com/js/js_timing.asp)
+ [StackOverFlow entry on how to fire function after page load completes](https://stackoverflow.com/questions/11936816/execute-function-after-complete-page-load)
+ [W3 Schools CSS How To Create A Circle](https://www.w3schools.com/howto/howto_css_circles.asp)
+ [Stack Overflow article on loading incomplete objects](https://stackoverflow.com/questions/1055728/php-session-with-an-incomplete-object)
+ [PHP.net manual entry on autoloading](https://www.php.net/manual/en/language.oop5.autoload.php)
+ [PHP.net manual entry on registering autoloading](https://www.php.net/manual/en/function.spl-autoload-register.php)


## Notes for instructor
I used the Design C Pattern, along with Object Oriented Programming.  

The classes are organized like so:
`
Game --> instructions  
`
`
Game --> players ---> board
`

The bingo card is set up such that all cells on the board are submit buttons.
The Bingo, Next Call, and New Game buttons are also submit buttons. 

The board is created dynamically with a nested loop.  The queue of calls is created ahead of time, and each call pops a number from the queue array.
Each click is evaluated to determine which button triggered the POST, action taken respectively.

CSS is used to generate the bingo marker, when the class "bingo-marker" is used.  When the board is generated, the array that tracks all of the 
cell clicks is tracked to see if the current cell contains any of the tracked values.  If so, the bingo-marker class is added to the table cell.
