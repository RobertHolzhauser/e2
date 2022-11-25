<?php

namespace BeliefFactor;

use Ramsey\Uuid\Nonstandard\Uuid;

class Goal
{
    # properties
    public int $user_id;
    public int $goal_uuid;
    public int $goal_name;
    public string $goal_description;
    public string $goal_purpose;
    public $actions = [];   // array of actions
    public Rankings $rankings;

    # constructor
    public function __construct(string $user_id)
    {
        $this->user_uuid = $user_id;
    }
}