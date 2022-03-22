<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    protected $fillable = [
        'title', 'title_des', 'title_item','image'
    ];
}
