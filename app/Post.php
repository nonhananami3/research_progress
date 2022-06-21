<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable =[
        'title',
        'user_id',
        'theme_id',
        'body',
        'start_date',
        'end_date',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function results()
    {
        return $this->hasMany('App\Result');
    }
    
    public function themes()
    {
        return $this->hasMany('App\Theme');
    }
    
    public function keywords()
    {
        return $this->belongsToMany('App\Keyword');
    }
    
    public function literatures()
    {
        return $this->belongsToMany('App\Literature');
    }
    
     public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('category')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
}