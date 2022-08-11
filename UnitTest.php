<?php

use PHPUnit\Framework\TestCase;

require_once "Rules.php";
require_once "Witch.php";

class UnitTest extends TestCase
{
    public function testCountWords()
    {

        // On the 1st year she kills 1 villager
        $witch  = array();
        $witch[] = new Witch(10, 11);
        $rules = new Rules($witch);
        $killResult = $rules->getResult();
        $this->assertEquals(1, $killResult);

        // On the 2nd year she kills 1 + 1 = 2 villagers
        $witch  = array();
        $witch[] = new Witch(10, 12);
        $rules = new Rules($witch);
        $killResult = $rules->getResult();
        $this->assertEquals(2, $killResult);

        // On the 3rd year she kills 1 + 1 + 2 = 4 villagers
        $witch  = array();
        $witch[] = new Witch(10, 13);
        $rules = new Rules($witch);
        $killResult = $rules->getResult();
        $this->assertEquals(4, $killResult);

        // On the 4th year she kills 1 + 1 + 2 + 3 = 7 villagers
        $witch  = array();
        $witch[] = new Witch(10, 14);
        $rules = new Rules($witch);
        $killResult = $rules->getResult();
        $this->assertEquals(7, $killResult);

        // On the 5th year she kills 1 + 1 + 2 + 3 + 5 = 12 villagers
        $witch  = array();
        $witch[] = new Witch(10, 15);
        $rules = new Rules($witch);
        $killResult = $rules->getResult();
        $this->assertEquals(12, $killResult);

        /*
         * Person A: Age of death = 10, Year of Death = 12
         * Person B: Age of death = 13, Year of Death = 17
        */
        $witch  = array();
        $witch[] = new Witch(10, 12);
        $witch[] = new Witch(13, 17);
        $rules = new Rules($witch);
        $killResult = $rules->getResult();
        $this->assertEquals(4.5, $killResult);
    }
}
