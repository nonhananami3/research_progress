<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Literature extends Model
{
    protected $fillable = [
        'writer_name',
        'name',
        'publisher_name',
        'year_of_issue',
        'start_page',
        'end_page',
    ];
    
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
