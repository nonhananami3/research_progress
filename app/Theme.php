<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable =[
        'title'
        ];
    
    public function post()
    {
       return $this-> belongsTo('App\Post');
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
