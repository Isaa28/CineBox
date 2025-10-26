<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    protected $fillable = ['movie_id', 'rooms_id', 'date_time'];
}