<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded;

    public function dormitory()
    {
        return $this->belongsTo(Dormitory::class);
    }
}
