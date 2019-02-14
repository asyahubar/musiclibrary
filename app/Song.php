<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title', 'featuring', 'user_id', 'artist_id', 'album_id'
    ];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function artist()
    {
        return $this->belongsTo(\App\Artist::class);
    }

    public function album()
    {
        return $this->belongsTo(\App\Album::class);
    }

}
