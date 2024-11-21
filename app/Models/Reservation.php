<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name',
        'email',
        'item',
        'reservation_time',
    ];
    
}
