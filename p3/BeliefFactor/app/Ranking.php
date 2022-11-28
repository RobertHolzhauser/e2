<?php

namespace BeliefFactor;

class Ranking
{
    # properties
    public int $id;
    public int $user_id;
    public int $goal_d;
    public int $action_id;
    public int $possible_int;
    public int $desirable_int;
    public int $worthit_int;
    public int $appropriate_ecological_int;
    public int $capable_int;
    public int $responsible_int;
    public int $deserve_int;
    public int $ok_int;
    public int $willing_int;
    public int $ready_int;
    public int $allow_int;

    # constructor
    public function __construct(string $user_id, string $goal_id, string $action_id)
    {
        $this->user_uuid = $user_id;
        $this->goal_uuid = $goal_id;
        $this->action_uuid = $action_id;
    }
}