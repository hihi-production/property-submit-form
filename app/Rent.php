<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $table = 'rents';
    protected $fillable = [
        'rented_name',
        'owner_name',
        'owner_phone',
        'rented_address',
        'type',
        'price',
        'additional'
    ];
}
