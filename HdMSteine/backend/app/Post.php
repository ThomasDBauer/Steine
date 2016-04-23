<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function transactions(){
        return $this->hasMany(User::class);
    }
}