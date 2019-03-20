<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'company_id',
        'days',
    ];

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function users(){
        return $this->belongToMany('App\User');
    }

    public function comments(){
        return $this->morphMany('App\Comment','commentable');
    }
}
