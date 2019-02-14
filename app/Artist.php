<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function albums()
    {
        return $this->hasMany(\App\Album::class);
    }

    public function songs()
    {
        return $this->hasMany(\App\Song::class);
    }
}
