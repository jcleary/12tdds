<?php

require_once 'PHPUnit/Framework.php';
require_once 'ListStats.php';

class UntitledTest extends PHPUnit_Framework_TestCase
{
    public function testMinValueGetsSmallestValueInTheList()
    {
        $stats = new ListStats(array(44,132,4,67));
        $this->assertEquals(4, $stats->getMinValue());
    }

    public function testMaxValueGetsLargestValueInTheList()
    {
        $stats = new ListStats(array(44,132,4,67,155));
        $this->assertEquals(155, $stats->getMaxValue());
    }

    public function testGetsAverageValueFromList()
    {
        $stats = new ListStats(array(50, 50, 20));
        $this->assertEquals(40, $stats->getAverage());
    }

    public function testCanCountNumberOfElementsInTheList()
    {
        $stats = new ListStats(array(1,5,7,8,4,7,9));
        $this->assertEquals(7, $stats->getCount());
    }
}


