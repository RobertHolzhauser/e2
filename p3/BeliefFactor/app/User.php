<?php

namespace BeliefFactor;

class User
{
    # properties
    public int $user_id;
    public string $user_name;
    public string $email;
    public string $password;

    public function __construct(int $user_id,  string $user_name, string $email, string $password)
    {
        $this->$user_id;
        $this->user_name = $user_name;
        $this->email = $email;
        $this->password = $password;
    }
}