<?php

class ListStats
{
    private $list;
    private $min;
    private $max;
    private $total;
    private $count;

    public function __construct(array $list)
    {
        $this->list = $list;
        $this->getStats();
    }

    private function getStats()
    {
        $this->min = null;
        $this->max = null;
        $this->total = 0;
        foreach($this->list as $number) {
            if (is_null($this->min) || $number < $this->min) { 
                $this->min = $number;
            }
            if (is_null($this->max) || $number > $this->max) { 
                $this->max = $number;
            }
            $this->total += $number;
        }
    }


    public function getMinValue()  
    {
        return $this->min;
    }

    public function getMaxValue()
    {
         return $this->max;
    }

    public function getAverage()
    {
        return $this->getTotal() / $this->getCount();
    }

    public function getTotal()
    {
        return $this->total;
     }

    public function getCount()
    {
        return count($this->list);
    }
}

