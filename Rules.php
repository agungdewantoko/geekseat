<?php

class Rules
{
    private $year_of_life;  // Amount year of life (Year of Death - Age of Death)
    private $killed;        // Sum of killing

    public function __construct(array $witches)
    {
        foreach ($witches as $witch) {
            $this->year_of_life = $witch->getYear() - $witch->getAge();
            $this->killed[] = $this->getKilled();
        }
    }

    public function getResult()
    {
        return (array_sum($this->killed) / count($this->killed));
    }

    public function getKilled()
    {
        $this->year_of_life;
        $number_killing_per_year = array();  // Number of killing per year
        $number_of_villagers_killed = 0;     // Number of villager killed

        if ($this->year_of_life <= 0) {
            die("-1");
        }
        if ($this->year_of_life >= 1) {
            $number_killing_per_year[] = 1;
        }
        if ($this->year_of_life >= 2) {
            $number_killing_per_year[] = 1;
        }
        if ($this->year_of_life >= 3) {
            // Loop while year of life > number killing per year
            while (count($number_killing_per_year) < $this->year_of_life) {
                $number_of_villagers_killed++;
                $check = 0;
                for ($fn = 2; $fn <= $number_of_villagers_killed; $fn++) {
                    $modulo = $number_of_villagers_killed % $fn;
                    if ($modulo == 0) {
                        $check++;
                    }
                }
                if ($check == 1) {  // Prime number if $check = 1
                    $number_killing_per_year[] = $number_of_villagers_killed;
                }
            }
        }
        return array_sum($number_killing_per_year);
    }
}
