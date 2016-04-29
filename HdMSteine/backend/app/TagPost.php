<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagPost extends Model
{
    protected $fillable = [
    ];

    protected $hidden = [
        'tag_id',
        'post_id'
    ];

    public $timestamps = false;

    public function posts(){
        return $this->belongsTo(Post::class, 'tag_id');
    }

    public function tags(){
        return $this->belongsTo(Tag::class, 'tag_id');
    }
}
