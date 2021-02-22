<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistorUser extends Model
{
    protected $table ="registor_users";

    protected $guarded;

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
