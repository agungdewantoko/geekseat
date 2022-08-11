<?php

class Witch
{
    private $age;           // Age of Death
    private $year;          // Year of Death

    public function __construct($age, $year)
    {
        $this->age = $age;
        $this->year = $year;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getYear()
    {
        return $this->year;
    }
}
