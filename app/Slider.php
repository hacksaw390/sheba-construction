<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'slider_title', 'slider_sub_title', 'button_text','slider_image'
    ];
}
