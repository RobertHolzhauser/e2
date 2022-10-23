<?php
# The purpose of this class is avoid cluttering game class with these strings.  Holds text for how to play.
class Instruction
{

    # These instructions are loosely adapted from the instructions included with the Traditions Bingo game from Cardinal Industries, LLc.  
    public string $instruction_label = "INSTRUCTIONS:";
    public string $objective_label = "OBJECTIVE";
    public string $objective = "To place chips on the corresponding spaces as they are chosen, and be the first to complete a winning pattern.";
    public string $getting_started_label = "HOW TO PLAY";
    public string $getting_started = "The computer will initially create game boards for all players of 5 rows of 5 squares, with the middle square blank. " .
        " Then it will randomly call numbers. When you notice that a number on your board has been selected, quickly click on that number to claim it.  Don't wait, your time is limited.";

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
}