<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $guarded;

    public function dormitory()
    {
        return $this->hasMany(Dormitory::class);
    }
}
