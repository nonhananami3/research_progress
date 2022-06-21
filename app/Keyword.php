<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = [
        'nama',
    ];
    
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
