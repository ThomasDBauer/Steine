<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'description', 'price',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}