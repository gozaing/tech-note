<?php

use Cake\Chronos\Chronos;

class DateOfRecord {

    public function date($dayOfUpdate)
    {
        $date = Chronos::parse($dayOfUpdate);
        return $date->toDateString();
    }

}