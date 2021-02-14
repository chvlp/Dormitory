<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registor extends Model
{
    protected $table ="registors";

    protected $guarded;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
