<?php
class Player
{
    public ?string $name;

    function __construct(string $nm)
    {
        $this->name = $nm;
    }
}