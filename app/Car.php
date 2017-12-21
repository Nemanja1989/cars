<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends \Eloquent
{
    //protected $table = 'cars';

    public static function getCarsWithThreeDors()
    {
        //pokupi ove gde je published
        return self::where('number_od_doors', 3)->get();
    }

}
