<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    public function posts(){
        return $this->belongsTo(Post::class);
    }
}
