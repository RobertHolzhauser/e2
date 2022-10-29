<?php
# The purpose of this class is avoid cluttering game class with these strings.  Holds text for how to play.
class Instruction
{

    # These instructions are loosely adapted from the instructions included with the Traditions Bingo game from Cardinal Industries, LLc.  
    public string $instruction_label = "INSTRUCTIONS:";
    public string $objective_label = "OBJECTIVE";
    public string $objective = "To put a bingo marker on the corresponding spaces as they are called, and complete a winning pattern.";
    public string $getting_started_label = "HOW TO PLAY";
    public string $getting_started = "The game initially creates a board for you of 5 rows of 5 squares, with the middle square FREE. " .
        "When you notice that a number on your board has been called, click that number on your board to claim it.";
    public string $getting_started1 = "To get the next number click Next Call.  To start a new game click New Game.";
    public string $winning_patttern_label = "WINNING PATTERNS";
    public string $winning_pattern = 'Either a Horizontal or a Vertical line of 5 numbers. Diagonal does not count.  Click the "BINGO !!" button when you have a bingo';

    public function getInstructionLabel()
    {
        echo $this->instruction_label;
    }

    public function getObjectiveLabel()
    {
        echo $this->objective_label;
    }

    public function getObjective()
    {
        echo $this->objective;
    }

    public function getGettingStartedLabel()
    {
        echo $this->getting_started_label;
    }

    public function getGettingStarted()
    {
        echo $this->getting_started;
    }

    public function getGettingStarted1()
    {
        echo $this->getting_started1;
    }
    public function getWinningPatternLabel()
    {
        echo $this->winning_patttern_label;
    }

    public function getWinningPattern()
    {
        echo $this->winning_pattern;
    }
}