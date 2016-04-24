<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'post_id', 'partner_id'
    ];

    public function partners(){
        return $this->belongsTo(User::class);
    }

    public function posts(){
        return $this->belongsTo(Post::class);
    }


}
