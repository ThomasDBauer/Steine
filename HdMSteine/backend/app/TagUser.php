<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagUser extends Model
{

    public $timestamps = false;

    protected $fillable = [

    ];

    protected $hidden = [
        'tag_id',
        'user_id'
    ];


    public function users(){
        return $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsTo(Tag::class, 'id');
    }
}
