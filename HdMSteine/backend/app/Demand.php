<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'post_id'
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
