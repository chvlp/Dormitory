<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded;

    public function dormitory()
    {
        return $this->belongsTo(Dormitory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
