<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dormitory extends Model
{
    protected $table ="dormitory";
    protected $guarded;


    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }



    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
