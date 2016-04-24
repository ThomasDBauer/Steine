<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagPost extends Model
{
    protected $fillable = [
        'tag_id',
        'post_id'
    ];

    public $timestamps = false;

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
