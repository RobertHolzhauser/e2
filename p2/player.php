<?php
class Player
{
    public ?string $name;
    public Board $board;
    public $tracking = [];      # array that tracks which pieces the player has tracked as having been called - from POST

    function __construct(string $nm)
    {
        $this->name = $nm;
        $this->board = new Board();
    }

    public function TrackCall(int $call)
    {
        $this->tracking[] = $call;
    }

    public function GetTracking()
    {
        $str_tracking = "";
        foreach ($this->tracking as $tr) {
            echo "<br>now tracking " . $tr;
            $str_tracking = $tr;
            echo "<br>" . $str_tracking;
        }
        echo $str_tracking;
    }
}

require 'board.php';