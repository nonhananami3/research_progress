<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable =[
        'body',
        'remark_body',
    ];
    
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
