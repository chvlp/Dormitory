<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table = "role_user";

    protected $guarded;

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
