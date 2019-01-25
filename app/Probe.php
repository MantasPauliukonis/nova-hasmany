<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Probe extends Model
{
    public function measurements()
    {
        return $this->hasMany(ProbeMeasurement::class);
    }
}
