<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'title','slug','description','finish_day','published_budget','attachment',
        'is_expire'
    ];
}
