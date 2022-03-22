<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
//    public function project_id()
//    {
//        return $this->BelongsTo(Project::class,'project_id');
//    }

    function project(){

        return $this->belongsTo(Project::class);

    }

    protected $fillable = [
        'project_image',
    ];
}
