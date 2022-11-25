<?php

namespace BeliefFactor;

use Ramsey\Uuid\Nonstandard\Uuid;

class Rank
{
    # properties
    public int $rank_id;
    public int $rank_value;
    public string $rank_type;
    public $audits = [];

    # constructor
    public function __construct(string $rank_type)
    {
        $this->rank_id = Uuid::uuid4()->toString();
        $this->rank_type = $rank_type;
    }
}