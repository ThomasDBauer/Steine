<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagUser extends Model
{
    protected $fillable = [
    'tag_id',
    'user_id'
    ];
    public function posts(){
        return $this->hasMany(User::class);
    }
}
