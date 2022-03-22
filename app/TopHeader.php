<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopHeader extends Model
{
    protected $fillable = [
        'address', 'phone_number', 'working_days',
    ];
}
