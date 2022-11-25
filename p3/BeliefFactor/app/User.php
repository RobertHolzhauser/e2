<?php

namespace BeliefFactor;

use Ramsey\Uuid\Nonstandard\Uuid;

class User
{
    # properties
    public int $user_id;
    public string $user_name;
    public string $email;
    public string $password;

    public function __construct(string $user_name, string $email, string $password)
    {
        // $this->user_uuid = Uuid::uuid4()->toString();
        $this->user_name = $user_name;
        $this->email = $email;
        $this->password = $password;
    }
}