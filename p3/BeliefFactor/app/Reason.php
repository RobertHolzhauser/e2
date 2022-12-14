<?php

namespace BeliefFactor;

class Reason
{
    # properties  
    public int $id;
    public int $user_id;
    public int $goal_id;
    public int $reason_id;
    public int $ranking_id;
    public string $rank_type;
    public string $perspective;
    public string $because;
    public string $therefore;
    public string $after;
    public string $while;
    public string $whenever;
    public string $sothat;
    public string $if;
    public string $although;

    public function __construct(int $reason_id, int $user_id, int $goal_id, int $action_id, int $rank_id, int $rank_type)
    {
        $this->reason_id = $reason_id;
        $this->user_id = $user_id;
        $this->goal_id = $goal_id;
        $this->action_id = $action_id;
        $this->rank_id = $rank_id;
        $this->rank_type = $rank_type;
    }
}