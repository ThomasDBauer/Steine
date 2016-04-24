<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = [
        'value'
    ];

    public function users(){
        return $this->hasMany(TagUser::class);
    }

    public function posts(){
        return $this->hasMany(TagPost::class);
    }
}
