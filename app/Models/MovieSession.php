<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieSession extends Model
{
    protected $table = 'sessions_cine';
    protected $fillable = ['name' ,'movie_id', 'room_id', 'date_time'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}