<?php 

class Player {
    public string $name;        // player name
    public $pieces = [];       // array of pieces
    
    /*** 
     * Color is either white or black.  
     * Color tells us whether the players pieces start initially on rows 0 & 1, or rows 6 & 7.
     **/
    public string $color;      
    
    public function __construct(string $name, string $color) {
        $this->name = $name;
        $this->color = $color;
    }

    
} 