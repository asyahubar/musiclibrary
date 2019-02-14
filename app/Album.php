<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'title', 'cover_url', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function artist()
    {
        return $this->belongsTo(\App\Artist::class);
    }

    public function songs()
    {
        return $this->hasMany(\App\Song::class);
    }

}
