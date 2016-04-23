<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

    protected $fillable = [
        'post_id'
    ];

    public function posts(){
        return $this->belongsTo(Post::class);
    }
}
