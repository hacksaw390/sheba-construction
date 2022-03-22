<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Overview extends Model
{
    protected $fillable = [
        'des', 'item', 'title_status',
    ];
}
