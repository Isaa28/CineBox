<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $fillable = ['session_id' ,'seat_number', 'customer_name', 'purchase_date'];

       public function session()
    {
        return $this->belongsTo(Session::class);
    }
}