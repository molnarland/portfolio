<?php

class Population
{
    public string $city;
    public int $age;
    public int $number;

    public function __construct(array $oneLine)
    {
        $this->city = $oneLine[0];
        $this->age = (int)$oneLine[1];
        $this->number = (int)$oneLine[2];
    }
}