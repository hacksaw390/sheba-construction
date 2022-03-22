<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientReview extends Model
{
    protected $fillable = [
        'name', 'des',
    ];
}
