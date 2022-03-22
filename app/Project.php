<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'project_type',
        'client',
        'budget',
        'surface',
        'year',
        'des',
    ];

    public function image(){
        return $this->hasOne(ProjectImage::class);
    }
}
