<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function conversations(){
        return $this->hasMany(UserConversation::class);
    }

    public function tags(){
        return $this->hasMany(TagUser::class);
    }

}
