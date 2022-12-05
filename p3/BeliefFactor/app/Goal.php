<?php

namespace BeliefFactor;

use DateTime;
use Illuminate\Support\Facades\Date;

class Goal
{
    # properties
    private int $user_id;
    public int $id;
    public int $name;
    public string $description;
    public string $purpose;
    public date $target_date;
    public $actions = [];   // array of actions
    public Ranking $ranking;

    # constructor
    public function __construct(int $user_id)
    {
        $this->user_uid = $user_id;
    }
}