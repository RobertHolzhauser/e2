<?php

namespace BeliefFactor;

use BeliefFactor\Rank;

class Rankings
{
    # properties
    public int $id;
    public int $user_id;
    public int $goal_d;
    public int $action_id;
    public Rank $possible_rank;
    public Rank $desirable_rank;
    public Rank $worthit_rank;
    public Rank $appropriate_ecological_rank;
    public Rank $capable_rank;
    public Rank $responsible_rank;
    public Rank $deserve_rank;
    public Rank $ok_rank;
    public Rank $willing_rank;
    public Rank $ready_rank;
    public Rank $allow_rank;

    # constructor
    public function __construct(string $user_id, string $goal_id, string $action_id)
    {
        $this->user_uuid = $user_id;
        $this->goal_uuid = $goal_id;
        $this->action_uuid = $action_id;
    }
}